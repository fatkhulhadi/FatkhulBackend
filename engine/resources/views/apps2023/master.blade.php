<!DOCTYPE html>
<html lang=en>
<head>
    <title>@yield('title')</title>
    @stack('additional-css')
    @stack('additional-js')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">
        @yield('preloader')
        @include('apps2023.navbar')
        @include('apps2023.sidebar')
        @yield('konten')
        @include ('apps2023.footer')
    </div>



</body>
</html>