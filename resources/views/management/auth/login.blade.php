<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c2c562ce07.js"></script>
</head>
<body class="bg-light d-flex flex-row align-items-center">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card p-4">
                    <div class="card-body">
                        <h2>Login</h5>
                        <p class="text-muted">Management portal for employees</p>

                        <form method="POST" action="{{ route('management.auth.login') }}">

                            {{ csrf_field() }}

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>

                                <input class="form-control" type="email" name="email" placeholder="E-mailaddress">

                            </div>

                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-unlock-alt"></i>
                                    </span>
                                </div>

                                <input class="form-control" type="password" name="password" placeholder="Password">

                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary px-4" type="submit">Login</button>
                                </div>

                                <div class="col-6 text-right">
                                    <a class="btn btn-link px-0" href="">Forgot password?</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
