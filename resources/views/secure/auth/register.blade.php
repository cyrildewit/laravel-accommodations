@component('front.layouts.app', [
    // 'meta' => $meta,
    'body_class' => 'bg-gradient-primary d-flex flex-row align-items-center'
])
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>

                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>

                                <form method="POST" action="{{ route('secure.auth.register') }}" class="user">
                                    {{ csrf_field() }}

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="first_name" class="form-control form-control-user {{ $errors->has('first_name') ? 'is-invalid' : '' }}" id="exampleFirstName" placeholder="First Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="last_name" class="form-control form-control-user {{ $errors->has('last_name') ? 'is-invalid' : '' }}" id="exampleLastName" placeholder="Last Name">
                                        </div>

                                        @if($errors->has(['first_name', 'last_name']))
                                            @foreach(Arr:wrap($errors->get('first_name'), $errors->get('last_name')) as $message)
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user {{ $errors->has('email') ? 'is-invalid' : '' }}" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">

                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user {{ $errors->has('password') ? 'is-invalid' : '' }}" id="exampleInputPassword" placeholder="Password">

                                        @if($errors->has('password'))
                                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user {{ $errors->has('password') ? 'is-invalid' : '' }}" id="exampleInputPassword" placeholder="Repeat Password">

                                        @if($errors->has('password'))
                                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary btn-user btn-block" type="submit">
                                        Register Account
                                    </button>

                                </form>

                                <hr>

                                <div class="text-center">
                                    <a class="small" href="{{ route('secure.auth.password.request') }}">Forgot Password?</a>
                                </div>

                                <div class="text-center">
                                    <a class="small" href="{{ route('secure.auth.register') }}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

  </div>
@endcomponent
