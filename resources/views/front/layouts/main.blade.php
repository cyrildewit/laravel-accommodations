@component('front.layouts.app', [
    'meta' => $meta ?? [],
])
    <div class="container">
        {{ $slot }}
    </div>
@endcomponent
