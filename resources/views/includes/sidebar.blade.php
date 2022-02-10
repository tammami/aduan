<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <ul class="side-menu metismenu">
            <li class="{{Session::get('sidebar') == 'dashboard' ? 'active':''}}">
                <a href="/dashboard"><i class="sidebar-item-icon ti-home"></i>
                    <span class="nav-label">Dashboard</span></a>
            </li>
            
            @if(Auth::user()->level == 'ADMINISTRATOR')
                <li class="heading">Hak Akses</li>
                <li class="{{Session::get('sidebar') == 'pengguna' ? 'active':''}}">
                    <a href="/pengguna">
                        <i class="sidebar-item-icon ti-user"></i>
                        <span class="nav-label">Pengguna</span>
                    </a>
                </li>
                <li class="heading">Setup Data</li>
            @endif

            <li class="{{Session::get('sidebar') == 'wilayah' ? 'active':''}}">
                <a href="/wilayah">
                    <i class="sidebar-item-icon fa fa-map-signs"></i>
                    <span class="nav-label">Wilayah</span>
                </a>
            </li>
            <li class="{{Session::get('sidebar') == 'bidang' ? 'active':''}}">
                <a href="/bidang">
                    <i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Bidang</span>
                </a>
            </li>
            <li class="{{Session::get('sidebar') == 'sub_bidang' ? 'active':''}}">
                <a href="/sub_bidang">
                    <i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Sub Bidang</span>
                </a>
            </li>
            <li class="{{Session::get('sidebar') == 'jenis_aduan' ? 'active':''}}">
                <a href="/jenis_aduan">
                    <i class="sidebar-item-icon fa fa-list"></i>
                    <span class="nav-label">Jenis Aduan</span>
                </a>
            </li>

            <li class="heading">Input Data</li>
            <li class="{{Session::get('sidebar') == 'pengaduan' ? 'active':''}}">
                <a href="/pengaduan">
                    <i class="sidebar-item-icon fa fa-clipboard"></i>
                    <span class="nav-label">Pengaduan</span>
                </a>
            </li>
            
            <li class="heading">Laporan</li>
            <li class="{{Session::get('sidebar') == 'laporan_rekap' ? 'active':''}}">
                <a href="/laporan_rekap">
                    <i class="sidebar-item-icon fa fa-book"></i>
                    <span class="nav-label">Laporan Rekap</span>
                </a>
            </li>
            <li class="{{Session::get('sidebar') == 'laporan_detail' ? 'active':''}}">
                <a href="/laporan_detail">
                    <i class="sidebar-item-icon fa fa-book"></i>
                    <span class="nav-label">Laporan Detail</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href="/auth/logout" class="btn btn-purple" data-toggle="tooltip" data-placement="top" title="" data-original-title="Keluar Aplikasi"><i class="ti-power-off"></i></a>
        </div>
    </div>
</nav>
