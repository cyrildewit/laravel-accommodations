<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('front.layouts.partials.head.seo')
</head>
<body>

    {{ $slot }}

</body>
</html>
