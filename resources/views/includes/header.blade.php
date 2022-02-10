<header class="header">
    <div class="page-brand">
        <a href="/dashboard">
            <span class="brand">PENGADUAN</span>
            <span class="brand-mini">ADN</span>
        </a>
    </div>
    <div class="flexbox flex-1">
         <!-- {{-- START TOP-LEFT TOOLBAR --}} -->
        <ul class="nav navbar-toolbar">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            </li>
        </ul>
         <!-- {{-- END TOP-LEFT TOOLBAR --}} -->
         <!-- {{-- START TOP-RIGHT TOOLBAR --}} -->
        <ul class="nav navbar-toolbar">
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <span>{{Auth::user()->nama}}</span>
                    <img src="{{Auth::user()->foto}}" alt="image" style="width: 45px; height: 45px; object-fit: cover; object-position: 0px 1%;"/>
                </a>
                <div class="dropdown-menu dropdown-arrow dropdown-menu-right admin-dropdown-menu">
                    <div class="admin-menu-content">
                        <div class="d-flex justify-content-between mt-2">
                            <a class="d-flex align-items-center" href="/auth/logout">Keluar dari aplikasi<i class="ti-shift-right ml-2 font-20"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
         <!-- {{-- END TOP-RIGHT TOOLBAR --}} -->
    </div>
 </header>
