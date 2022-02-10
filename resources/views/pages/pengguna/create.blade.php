@extends('layouts.master')

@section('title', 'Tambah Data Pengguna')

@section('plugins_styles')
@endsection

@section('content')
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox ibox-fullheight">
                    <div class="ibox-head">
                        <div class="ibox-title">TAMBAH DATA PENGGUNA</div>
                    </div>
                    <form class="form-horizontal" method="POST" action="/pengguna">
                        @csrf
                        <div class="ibox-body">
                            @if ($errors->any())
                                <div class="alert alert-pink alert-dismissable fade show has-icon">
                                    <i class="la la-info-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button>
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                            @endif
                            <div class="form-group mb-4 row">
                                <label class="col-sm-2 col-form-label">Pegawai</label>
                                <div class="col-sm-10">
                                    <select name="nip" class='pegawai' class="selectpicker custom_s2 form-control" title="Pilih Pegawai" data-width="100%" data-live-search="true" required>
                                        @foreach ($pegawai as $data_pegawai)
                                        <option value="{{$data_pegawai->nip}}">{{$data_pegawai->pegawai}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4 row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="password" type="password" placeholder="Password untuk login..." required>
                                </div>
                            </div>
                            <div class="form-group mb-4 row">
                                <label class="col-sm-2 col-form-label">Sub Bidang</label>
                                <div class="col-sm-10">
                                    <select name="id_sub_bidang" class='sub_bidang' class="selectpicker custom_s2 form-control" title="Pilih Sub Bidang" data-width="100%" data-live-search="true" required>
                                        @foreach ($sub_bidang as $data_sub_bidang)
                                        <option value="{{$data_sub_bidang->id}}">{{$data_sub_bidang->sub_bidang}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4 row">
                                <label class="col-sm-2 col-form-label">Wilayah</label>
                                <div class="col-sm-10">
                                    <select name="id_wilayah" class='wilayah' class="selectpicker custom_s2 form-control" title="Pilih Wilayah" data-width="100%" data-live-search="true" required>
                                        @foreach ($wilayah as $data_wilayah)
                                        <option value="{{$data_wilayah->id}}">{{$data_wilayah->wilayah}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4 row">
                                <label class="col-sm-2 col-form-label">Nomor HP</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="telp" type="text" placeholder="Nomor HP..." required>
                                </div>
                            </div>
                            <div class="form-group mb-4 row">
                                <label class="col-sm-2 col-form-label">Level</label>
                                <div class="col-sm-10">
                                    <select name="level" class='level' class="selectpicker custom_s2 form-control" title="Pilih Level" data-width="100%" data-live-search="true" required>
                                        <option value="ADMINISTRATOR">ADMINISTRATOR</option>
                                        <option value="MANAJER">MANAJER</option>
                                        <option value="ASISTEN MANAJER">ASISTEN MANAJER</option>
                                        <option value="PETUGAS LAPANGAN">PETUGAS LAPANGAN</option>
                                        <option value="CS">CS</option>
                                        <option value="SPI">SPI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4 row">
                                <label class="col-sm-2 col-form-label">Status Pengguna</label>
                                <div class="col-sm-10">
                                    <label class="radio radio-inline radio-info">
                                        <input type="radio" name="status" value="1" checked>
                                        <span class="input-span"></span>Aktif</label>
                                    <label class="radio radio-inline radio-info">
                                        <input type="radio" name="status" value="0">
                                        <span class="input-span"></span>Tidak Aktif</label>
                                </div>
                            </div>
                        </div>
                        <div class="ibox-footer row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-primary mr-2" id="alertify" type="submit">Simpan</button>
                                <button class="btn btn-secondary" type="reset">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('plugins_scripts')
    <script src="{{asset('assets/vendors/jquery.maskedinput/dist/jquery.maskedinput.min.js')}}"></script>
@endsection

@section('page_scripts')
    <script>
        $(function() {
            $('.pegawai').select2({
                 dropdownPosition: 'below'
            });
            $('.level').select2({
                 dropdownPosition: 'below'
            });
            $('.sub_bidang').select2({
                 dropdownPosition: 'below'
            });
            $('.wilayah').select2({
                 dropdownPosition: 'below'
            });
        });
    </script>

@endsection
