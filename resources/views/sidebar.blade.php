<head>
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
</head>

<aside style="background: black" class="main-sidebar">
    <!-- Brand Logo -->
    <a style="color: white;" href="../../index3.html" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item pill-1">
                    <a style="color: white;" href="{{ route('home') }}" class="nav-link {{ (request()->routeIs('home') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item pill-2">
                    <a style="color: white;" href="{{ route('profile') }}" class="nav-link {{ (request()->routeIs('profile') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item pill-3">
                    <a style="color: white;" href="{{ route('pengalaman') }}" class="nav-link {{ (request()->routeIs('pengalaman') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Pengalaman Kuliah
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

