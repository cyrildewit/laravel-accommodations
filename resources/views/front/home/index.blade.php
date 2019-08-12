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
                            <input type="text" name="destination" class="form-control" id="destination">
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
                                <option value="">Choose</option>
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

<style>
.autocomplete-suggestions { border: 1px solid #999; background: #fff; cursor: default; overflow: auto; }
.autocomplete-suggestion { padding: 10px 5px; font-size: 1.2em; white-space: nowrap; overflow: hidden; }
.autocomplete-selected { background: #f0f0f0; }
.autocomplete-suggestions strong { font-weight: normal; color: #3399ff; }

/* #searchfield { display: block; width: 100%; text-align: center; margin-bottom: 35px; } */

/* #searchfield form {
  display: inline-block;
  background: #eeefed;
  padding: 0;
  margin: 0;
  padding: 5px;
  border-radius: 3px;
  margin: 5px 0 0 0;
}
#searchfield form .biginput {
  width: 600px;
  height: 40px;
  padding: 0 10px 0 10px;
  background-color: #fff;
  border: 1px solid #c8c8c8;
  border-radius: 3px;
  color: #aeaeae;
  font-weight:normal;
  font-size: 1.5em;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  transition: all 0.2s linear;
}
#searchfield form .biginput:focus {
  color: #858585;
} */
</style>
@endcomponent
