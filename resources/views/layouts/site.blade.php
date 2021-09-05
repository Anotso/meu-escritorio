<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Escritório</title>
    {{-- AdminLTE CSS --}}
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap-reboot.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap-grid.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    {{-- CSS Custon --}}
    @yield('css')
</head>
<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <!-- Navbar -->
        @include('components.navbar',[$navbar])
        <!-- /.navbar -->

        <!-- Main content -->
        <section class="container">

            <!-- Default box -->
            @yield('content')
            <!-- /.card -->

        </section>
        <!-- /.content -->

        <footer class="home-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; {{ now()->year }} .</strong> All rights
            reserved.
        </footer>
    </div>

    {{-- AdminLTE JS --}}
    <script src="{{ asset('assets/plugins/jquery-3.6.0.min.js')}}"></script>
    {{-- <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/fontawesome/js/all.min.js')}}"></script>
    <script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script> --}}
        <script src="{{ asset('assets/plugins/bs/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
    {{-- JS Custon --}}
    @yield('script')
</body>
</html>
