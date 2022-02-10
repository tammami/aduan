@extends('layouts.master')

@section('title', 'Jenis Aduan')

@section('plugins_styles')
    <link href="{{asset('assets/vendors/dataTables/datatables.min.css')}}" rel="stylesheet" />
@endsection

@section('page_styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox ibox-fullheight">
                    <div class="ibox-head">
                        <div class="ibox-title">DATA JENIS ADUAN</div>
                    </div>
                    <div class="ibox-body">
                        <div class="row mb-2">
                            <div class="col-md-8 form-group">
                                
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="input-group-icon input-group-icon-left">
                                    <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                                    <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Cari ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive row">
                                    <table class="table table-bordered table-hover" id="datatable">
                                        <thead class="thead-default thead-lg">
                                        <tr>
                                            <th>Kode Jenis Aduan</th>
                                            <th>Jenis Aduan</th>
                                            <th>Bidang</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($jenis_aduan as $data_jenis_aduan)
                                            <tr>
                                                <td>{{$data_jenis_aduan->id}}</td>
                                                <td>{{$data_jenis_aduan->jenis_aduan}}</td>
                                                <td>{{$data_jenis_aduan->bidang}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('plugins_scripts')
    <script src="{{asset('assets/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('assets/vendors/dataTables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
@endsection

@section('page_scripts')
    <script src="{{asset('assets/js/scripts/dashboard_visitors.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
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
