<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">

    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('dist/img/lp3i.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin: 20px; width:100%">
                <strong>Hai {{ Auth()->user()->name }} </strong>
            </div>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('dist/img/pribadi.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Muhammad Alfan Alfazar</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="{{route('home')}}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('positions.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Positions
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('departements.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Departements

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('users.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Users

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Master Pegawai
                                    <i class="fas fa-angle-left right"></i>
                                    <!-- <span class="badge badge-info right">6</span> -->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('jadwals.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Jadwal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('pegawais.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Pegawai</p>
                                    </a>
                                </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="card">
                                    <div class="card-header">
                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="card">
                                                    <h1 class="card-header" style="background-color: #343A40; color:aliceblue">@yield('title',$title)</h1>
                                                    <div class="card-body">
                                                        @yield('content')
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content-header -->

                    <!-- Main content -->


                    <!-- Small boxes (Stat box) -->

                    <!-- /.content-wrapper -->
                    <footer class="main-footer">
                        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
                        All rights reserved.
                        <div class="float-right d-none d-sm-inline-block">
                            <b>Version</b> 3.2.0
                        </div>
                    </footer>

                    <!-- Control Sidebar -->
                    <aside class="control-sidebar control-sidebar-dark">
                        <!-- Control sidebar content goes here -->
                    </aside>
                    <!-- /.control-sidebar -->
                </div>
                <!-- ./wrapper -->

                <!-- jQuery -->
                <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
                <!-- jQuery UI 1.11.4 -->
                <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
                <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                <script>
                    $.widget.bridge('uibutton', $.ui.button)
                </script>
                <!-- Bootstrap 4 -->
                <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                <!-- ChartJS -->
                <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
                <!-- Sparkline -->
                <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
                <!-- JQVMap -->
                <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
                <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
                <!-- jQuery Knob Chart -->
                <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
                <!-- daterangepicker -->
                <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
                <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
                <!-- Tempusdominus Bootstrap 4 -->
                <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
                <!-- Summernote -->
                <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
                <!-- overlayScrollbars -->
                <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
                <!-- AdminLTE App -->
                <script src="{{asset('dist/js/adminlte.js')}}"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="{{asset('dist/js/demo.js')}}"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
                @yield('js')
</body>

</html>