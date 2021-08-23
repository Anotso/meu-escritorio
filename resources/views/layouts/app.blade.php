<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Escritório</title>
    {{-- AdminLTE CSS --}}
    <link rel="stylesheet" href="{{ assets('assets/plugins/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{ assets('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ assets('assets/plugins/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{ assets('assets/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{ assets('assets/plugins/fontawesome/css/all.min.css')}}">
    {{-- CSS Custon --}}
    @yield('css')
</head>
<body>

    @yield('content')

    {{-- AdminLTE JS --}}
    <script src="{{ assets('assets/plugins/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ assets('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ assets('assets/plugins/fontawesome/js/all.min.js')}}"></script>
    <script src="{{ assets('assets/dist/js/adminlte.min.js')}}"></script>
    {{-- JS Custon --}}
    @yield('script')
</body>
</html>
