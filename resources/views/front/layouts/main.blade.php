@component('front.layouts.app', [
    // 'meta' => $meta ?? [],
])
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('front.layouts.partials.topbar')

            <!-- Begin Page Content -->
            {{ $slot }}

        </div>
        <!-- End of Main Content -->

        @include('front.layouts.partials.footer')

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
@endcomponent
