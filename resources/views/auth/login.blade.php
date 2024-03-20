<!doctype html>
<html lang="en">
<head>
    <title>Login admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('stylelogin/css/style.css') }}">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(https://bukutamu.net/wp-content/uploads/2023/06/04.png);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <h3 class="mb-4">Sign In</h3>
                                </div>

                            </div>
                            <form action="/login"method="post" class="signin-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" feor="name">Username</label>
                                    <input type="text" name="username"
                                        class="@error('username') is-invalid @enderror form-control"
                                        placeholder="Username" required>
                                    @error('username')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" name="password"
                                        class="@error('password') is-invalid @enderror form-control"
                                        placeholder="Password" required>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        In</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('stylelogin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('stylelogin/js/popper.js') }}"></script>
    <script src="{{ asset('styleloginjs/bootstrap.min.js') }}"></script>
    <script src="{{ asset('styleloginjs/main.js') }}"></script>

</body>

</html>
