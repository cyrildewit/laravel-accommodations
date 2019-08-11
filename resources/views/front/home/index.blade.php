@component('front.layouts.main', [
    // 'meta' => $meta,
])
<section class="welcome-area">
    <div class="welcome-area-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="welcome-area-content text-center">
                        <h2 class="text-uppercase">Find Your Perfect Trip</h2>
                        <p>The simplest way to book an accommodation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="accommodation-search-form-area">
    <div class="accommodation-search-form-wrapper">
        <div class="container">
            <div class="accommodation-search-form">
                <form action="{{ route('front.search.index') }}" method="GET">
                    <div class="row justify-content-between align-items-end">
                        <div class="col-12 col-md-4">
                            <label for="destination">Where are you going?</label>
                            <input type="text" class="form-control" id="destination" name="check_in_date">
                        </div>

                        <div class="col-12 col-md-2">
                            <label for="checkInDate">Check In</label>
                            <input type="date" class="form-control" id="checkInDate">
                        </div>

                        <div class="col-12 col-md-2">
                            <label for="checkOutDate">Check Out</label>
                            <input type="date" class="form-control" id="checkOutDate">
                        </div>

                        <div class="col-12 col-md-1">
                            <label for="numOfGuests">Guests</label>
                            <select name="guests" id="numOfGuests" class="form-control">
                                <option value="1">1 guest</option>
                            </select>
                        </div>

                        <div class="col-12 col-md-3">
                            <button type="submit" class="form-control btn btn-primary w-100">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endcomponent
