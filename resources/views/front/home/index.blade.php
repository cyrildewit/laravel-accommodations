@php
    $meta = [
        'title' => 'Home'
    ];
@endphp

@component('front.layouts.main', [
    'meta' => $meta,
])
<h1>Homepage</h1>
@endcomponent
