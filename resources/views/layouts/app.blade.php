<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Meu Escritório</title>
        {{-- AdminLTE CSS --}}
        {{-- <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap-reboot.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap-grid.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}"> --}}
            <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesomeLTE/css/all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        {{-- CSS Custon --}}
        @yield('css')
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src=" "
                                class="user-image img-circle elevation-2" alt="User Image">
                            <span class="d-none d-md-inline"> NOME DO USUÁRIO </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header bg-primary">
                                <img src=" "
                                    class="img-circle elevation-2" alt="User Image">

                                <p>
                                    NOME
                                    <small>Miembro desde </small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                <form action=" " method="post">
                                    <input type="hidden" name="user_id" value=" ">
                                            @csrf
                                            <button type="submit" class="btn btn-default btn-flat float-right">Sign out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4 main-color">
                <!-- Brand Logo -->
                <a href="/" class="brand-link">
                    <img src=" " alt="JT Squad" class=""
                        style="opacity: .8">
                    <span
                        class="brand-text font-weight-light"></span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item">
                                <a href=""
                                    class="nav-link ">
                                    <i class="nav-icon fas fa-file-alt"></i>
                                    <p>
                                        Relatórios
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href=" "
                                    {{-- class="nav-link {{ isActive('dashboard.administrator.live.index') }}"> --}}
                                    class="nav-link">
                                    <img src="" class="nav-icon">
                                    <p>
                                        Live
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">

                    <!-- Default box -->
                    @yield('content')
                    <!-- /.card -->

                    <div class="config">
                        <i class="fas fa-cog"></i>
                    </div>

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; {{ now()->year }}</strong> All rights
                reserved.
            </footer>
        </div>

        {{-- AdminLTE JS --}}
            <script src="{{ asset('assets/plugins/jquery-3.6.0.min.js')}}"></script>
            <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('assets/plugins/fontawesome/js/all.min.js')}}"></script>
            <script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
        {{-- JS Custon --}}
            @yield('script')
    </body>
</html>
