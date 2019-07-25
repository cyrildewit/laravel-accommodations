@component('front.layouts.main', [
    // 'meta' => $meta,
])
<!-- Content Row -->
<div class="row">

    <div class="col-lg-8 offset-lg-2 mb-4">

        <!-- Temporary box to make a search to accommodations -->
        <div class="card shadow mb-4">
            <div class="card-body p-5">

                <div class="text-center">
                    <h1 class="h2 text-gray-900 mb-4">Were are you going!</h1>
                </div>

                <form action="{{ route('front.search.index') }}" class="user">
                    <div class="form-group">
                        <input type="search" class="form-control form-control-user" id="exampleInputEmail" placeholder="Waar gaat u naartoe?">
                    </div>

                    <button href="login.html" class="btn btn-primary btn-user btn-block">
                        Zoek
                    </button>
              </form>

            </div>
        </div>

    </div>

</div>
@endcomponent
