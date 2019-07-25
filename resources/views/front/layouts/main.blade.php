@component('front.layouts.app', [
    // 'meta' => $meta ?? [],
])
<div class="bg-gray-100">

@include('front.layouts.partials.topbar')

    <!-- Begin Page Content -->
    {{ $slot }}

    @include('front.layouts.partials.footer')
</div>
@endcomponent
