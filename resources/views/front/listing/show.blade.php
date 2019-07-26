@component('front.layouts.main', [
    // 'meta' => $meta,
])
<div class="container">

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-8 offset-lg-2 mb-4">

            <!-- Temporary box to make a search to accommodations -->
            <div class="card shadow mb-4">
                <div class="card-body p-5">

                    <h1 class="text-gray-900">{{ $listing->name }}</h1>
                    <p class="mb-4"><span class="badge badge-primary">{{ $listing->type->description }}</span></p>

                    <p>{{ $listing->description }}</p>

                    <hr>

                    <h2>Rooms</h2>
                    <ul>
                        @foreach($listing->rooms as $room)
                        <li>
                            <strong>{{ $room->name }}</strong><br>
                            {{ $room->description }}
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>

        </div>

    </div>

</div>
@endcomponent
