@component('front.layouts.main', [
    // 'meta' => $meta,
])
<!-- 404 Error Text -->
<div class="text-center py-5">
    <div class="error mx-auto" data-text="404">404</div>
    <p class="lead text-gray-800 mb-5">Page Not Found</p>
    <p class="text-gray-500 mb-0">The page you are looking for might have been removed, had its name changed or is temporarily unavailable.</p>
    <a href="{{ route('front.home.index') }}">&larr; Back to Home</a>
</div>
@endcomponent
