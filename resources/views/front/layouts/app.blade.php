<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('front.layouts.partials.head.meta')

    {{-- <link rel="stylesheet" href="{{ mix('css/front.css') }}"> --}}

    {{-- <script defer src="{{ mix('js/front.app.js') }}"></script> --}}

    @include('front.layouts.partials.head.seo')
    {{-- @include('front.layouts.partials.head.hreflang')
    @include('front.layouts.partials.head.favicons')
    @include('front.layouts.partials.head.bugsnag') --}}
</head>
<body>

    {{ $slot }}

</body>
</html>
