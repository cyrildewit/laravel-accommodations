@component('secure.layouts.main', [
    // 'meta' => $meta,
])
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

{{-- <h1>Welcome {{ Auth::guard('secure')->user()->name }}</h1> --}}
@endcomponent
