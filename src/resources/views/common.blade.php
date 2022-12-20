@include('layout.header')
@include('layout.sidebar')
@include('layout.footer')
<!doctype html>
<html>

<head>
    <meta charset='utf-8' />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <link href="/vendor/adminlte/dist/css/adminlte.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @yield('header')
    @yield('sidebar')
    @yield('contents')
    @yield('footer')
</div>

<!-- REQUIRED SCRIPTS -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/adminlte/dist/js/adminlte.min.js"></script>

</body>

</html>
