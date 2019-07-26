<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('front.layouts.partials.head.meta')

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <script src="https://kit.fontawesome.com/c2c562ce07.js"></script>

    <link rel="stylesheet" href="{{ mix('css/front.css') }}">

    <script defer src="{{ mix('js/front.app.js') }}"></script>

    @include('front.layouts.partials.head.seo')
    {{-- @include('front.layouts.partials.head.hreflang')
    @include('front.layouts.partials.head.favicons')
    @include('front.layouts.partials.head.bugsnag') --}}
</head>
<body
    @unless(empty($body_class))
        class="{{ $body_class }}"
    @endunless
>

    {{ $slot }}

    {{-- <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script> --}}

</body>
</html>
