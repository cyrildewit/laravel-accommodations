@component('front.layouts.main', [
    // 'meta' => $meta,
])
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <form class="form-inline">
                        <label class="sr-only" for="inlineFormInputName2">Bestemming</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Plaats">

                        <label class="sr-only" for="inlineFormInputName2">Inchecken</label>
                        <input type="date" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2">

                        <label class="sr-only" for="inlineFormInputName2">Uitchecken</label>
                        <input type="date" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2">

                        <button type="submit" class="btn btn-primary mb-2">Zoeken</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-4">

            <!-- Search -->
            <div class="card shadow mb-4">
                <div class="card-body">

                    <h2 class="h4 text-gray-900 mb-4">Zoek</h2>

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
                            <h5 class="card-title"><span class="badge badge-secondary">New</span>{{ $listing->name }}</h5>
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

</div>
@endcomponent
