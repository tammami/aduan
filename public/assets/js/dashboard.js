app = angular.module("app", []);

app.controller("DashboardController", [
    "$scope",
    "$http",
    function DashboardController($scope, $http) {
        $scope.selesaikanTransaksi = function(kode) {
            Swal.fire({
                title: "Konfirmasi",
                text: "Selesaikan transaksi ini?",
                input: "text",
                type: "warning",
                inputAttributes: {
                    autocapitalize: "off"
                },
                showCancelButton: true,
                confirmButtonText: "Ya, Selesaikan!",
                showLoaderOnConfirm: true,
                inputPlaceholder: "Tambahkan Keterangan disini..."
            }).then(result => {
                if (result.value === "") {
                    swal.fire({
                        title: "You need to write something in Keterangan!",
                        type: "info"
                    });
                    return false;
                }
                if (result.value) {
                    $http({
                        url: "transaksi/selesaikan/" + kode,
                        method: "POST",
                        data: {
                            status: "2",
                            ket: result.value
                        }
                    }).then(res => {
                        Swal.fire(
                            "Success",
                            "Berhasil diselesaikan",
                            "success"
                        ).then(result => {
                            window.open("/laporan/nota/" + kode, "_blank");
                            location.reload();
                        });
                    });
                }
            });
        };
    }
]);
