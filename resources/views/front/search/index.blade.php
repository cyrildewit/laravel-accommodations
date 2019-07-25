@component('front.layouts.main', [
    // 'meta' => $meta,
])
<!-- Content Row -->
<div class="row">

    <div class="col-lg-4">

        <!-- Search -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <h1 class="h4 text-gray-900 mb-4">Zoek</h1>

            </div>
        </div>

    </div>

    <div class="col-lg-8">

        @foreach($listings as $listing)
        <!-- Listing -->
        <div class="card shadow mb-4">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="https://dummyimage.com/500x500/7d7d7d/fff" class="card-img">
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $listing->name }}</h5>
                        <p class="card-text small">{{ $listing->description }}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        {{ $listings->links() }}

    </div>

</div>
@endcomponent
