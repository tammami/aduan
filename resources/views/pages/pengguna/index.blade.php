@extends('layouts.master')

@section('title', 'Pengguna Aplikasi')

@section('plugins_styles')
<link href="{{asset('assets/vendors/dataTables/datatables.min.css')}}" rel="stylesheet" />
@endsection

@section('page_styles')

@endsection

@section('content')
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-body">
            <h5 class="font-strong mb-4">DATA PENGGUNA APLIKASI </h5>
            <div class="flexbox mb-4">
                <div class="flexbox">
                    <a href="/pengguna/create">
                        <button class="btn btn-primary btn-rounded btn-fix">
                            <span class="btn-icon"><i class="la la-plus"></i>Tambah Data</span>
                        </button>
                    </a>
                </div>
                <div class="input-group-icon input-group-icon-left mr-3">
                    <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                    <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Cari ...">
                </div>
            </div>

            <div class="table-responsive row">
                <table class="table table-bordered table-hover" id="datatable">
                    <thead class="thead-default thead-lg">
                        <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>Nama Pengguna</th>
                            <th>Bidang</th>
                            <th>Sub Bidang</th>
                            <th>Hak Akses</th>
                            <th>Status</th>
                            <th class="no-sort"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $nomor_urut = 1
                        @endphp
                        @foreach($pengguna as $data_pengguna)
                        <tr>
                            <td>{{$nomor_urut}}</td>
                            <td>{{$data_pengguna->nama}}</td>
                            <td>{{$data_pengguna->user}}</td>
                            <td>{{$data_pengguna->bidang}}</td>
                            <td>{{$data_pengguna->sub_bidang}}</td>
                            <td>
                                {{$data_pengguna->level}}</span>
                            </td>
                            <td>
                                <center>
                                    @if ($data_pengguna->status == TRUE)
                                    <span class="badge badge-success badge-pill">Aktif</span>
                                    @else
                                    <span class="badge badge-danger badge-pill">Tidak Aktif</span>
                                    @endif
                                </center>
                            </td>
                            <td>
                                <center>
                                    <a href="/pengguna/{{$data_pengguna->id}}/edit">
                                        <button type="submit" class="btn btn-sm btn-secondary btn-icon-only btn-circle" data-toggle="tooltip" data-placement="top" title="Edit data {{$data_pengguna->nama}} ?">
                                            <i class="la la-pencil"></i>
                                        </button>
                                    </a>
                                </center>
                            </td>
                        </tr>
                        @php
                        $nomor_urut++
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('plugins_scripts')
<script src="{{asset('assets/vendors/dataTables/datatables.min.js')}}"></script>
@endsection

@section('page_scripts')
<script>
    $(function() {
        $('#datatable').DataTable({
            pageLength: 30,
            fixedHeader: true,
            responsive: true,
            "sDom": 'rtip',
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });

        var table = $('#datatable').DataTable();
        $('#key-search').on('keyup', function() {
            table.search(this.value).draw();
        });
    });
</script>
@endsection