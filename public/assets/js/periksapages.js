app = angular.module("app", []);

app.controller("PeriksaController", [
    "$scope",
    "$http",
    function PeriksaController($scope, $http) {
        $scope.antrians = [];
        $scope.barangs = [];
        $scope.montirs = [];
        $scope.jumlah = 1;

        $scope.barangTransaksis = [];
        $http({
            method: "GET",
            url: "/periksa/getantrian"
        }).then(res => {
            $scope.antrians = res.data;
            $scope.selectedOption = $scope.antrians[0];
        });

        $http({
            method: "GET",
            url: "/periksa/getbarang"
        }).then(res => {
            $scope.barangs = res.data;
            $scope.selectedBarang = $scope.barangs[0];
        });

        $http({
            method: "GET",
            url: "/periksa/getmontir"
        }).then(res => {
            $scope.montirs = res.data;
            $scope.selectedMontir = $scope.montirs[0];
            $scope.pilihMontir = $scope.selectedMontir;
        });

        //getBarang Selected Barang When Changed
        $scope.getBarang = function() {
            $scope.jumlah = 1;
        };

        //change jumlah -1
        $scope.minJumlah = function() {
            if ($scope.jumlah != 0) $scope.jumlah -= 1;
        };

        //change jumlah +1
        $scope.addJumlah = function() {
            $scope.jumlah += 1;
        };

        //get jumlah harga barangtransaksi
        $scope.getJumlahHarga = function() {
            var count = 0;
            angular.forEach($scope.barangTransaksis, function(barang) {
                count += barang.harga * barang.jumlah;
            });
            return count;
        };

        //add barang list on barang transaksi
        $scope.addBarang = function() {
            if ($scope.antrians.length == 0) {
                Swal.fire("Warning", "Data antrian masih kosong!", "warning");
            } else {
                if ($scope.jumlah > $scope.selectedBarang.jumlah) {
                    Swal.fire(
                        "Warning",
                        "Sisa stok barang kurang!" +
                            $scope.selectedBarang.jumlah,
                        "warning"
                    );
                } else {
                    $scope.barangTransaksis.push({
                        number: $scope.barangTransaksis.length + 1,
                        barang_id: $scope.selectedBarang.id,
                        nama_barang: $scope.selectedBarang.nama,
                        jumlah: $scope.jumlah,
                        harga: $scope.selectedBarang.harga_jual,
                        transaksi_kode: $scope.selectedOption.kode
                    });
                }
            }
        };

        //remove Item in barang transaksi

        $scope.removeItem = function(index) {
            $scope.barangTransaksis.splice(index, 1);
        };

        //submit barang transaksi and change transaksi status
        $scope.submitData = function() {
            if ($scope.barangTransaksis.length == 0) {
                Swal.fire("Warning", "Data barang masih kosong!", "warning");
            } else {
                angular.forEach($scope.barangTransaksis, function(barang) {
                    $http({
                        url: "/periksa",
                        method: "POST",
                        data: {
                            transaksi_kode: $scope.selectedOption.kode,
                            barang_id: barang.barang_id,
                            jumlah: barang.jumlah,
                            montir_id: $scope.selectedMontir.id
                        }
                    }).then(res => console.log(res));
                });
                Swal.fire(
                    "Success",
                    "Data barang berhasil disubmit",
                    "success"
                ).then(result => {
                    location.reload();
                });
            }
        };
    }
]);
