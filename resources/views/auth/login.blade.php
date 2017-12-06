<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.3
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
        <meta name="author" content="Lukasz Holeczek">
        <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
        <title>CoreUI Bootstrap 4 Admin Template</title>
        <!-- Icons -->
        <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('plugins/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Main styles for this application -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
        <!-- Styles required by this views -->
    </head>
    <body class="app flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card-group">
                        <div class="card p-4">
                            <div class="card-body">
                                <form action="{{ route('login') }}" method="post">
                                    {{ csrf_field() }}
                                    <h1>Login</h1>
                                    <p class="text-muted">Sign In to your account</p>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control {{ $errors->has('username')?'is-invalid':'' }}" placeholder="Username" name="username" value="{{ old('username') }}">
                                        @if($errors->has('username'))
                                        <div class="invalid-feedback help-block">
                                            {{ $errors->first('username') }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':'' }}" placeholder="Password" name="password" required>
                                        @if($errors->has('password'))
                                        <div class="invalid-feedback help-block">
                                            {{ $errors->first('password') }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary px-4">Login</button>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a href="{{ route('password.request') }}" class="btn btn-link px-0">Forgot password?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                            <div class="card-body text-center">
                                <div>
                                    <h2>Sign up</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a href="{{ route('register') }}" class="btn btn-primary active mt-3">Register Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap and necessary plugins -->
        <script type="text/javascript" src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/tether/dist/js/tether.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>