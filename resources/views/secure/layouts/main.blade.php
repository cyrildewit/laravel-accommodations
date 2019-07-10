@component('secure.layouts.app', [
    // 'meta' => $meta ?? [],
])
<!-- Page Wrapper -->
<div id="wrapper">

    @include('secure.layouts.partials.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('secure.layouts.partials.topbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                {{ $slot }}

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        @include('secure.layouts.partials.footer')

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
@endcomponent
