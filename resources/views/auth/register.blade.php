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
                <div class="col-md-6">
                    <div class="card mx-4">
                        <div class="card-body p-4">
                            <form action="{{ route('register') }}" method="post">
                                {{ csrf_field() }}
                                <h1>Register</h1>
                                <p class="text-muted">Create your account</p>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control {{ $errors->has('username')?'is-invalid':'' }}" placeholder="Enter Username" name="username" value="{{ old('username') }}" required>
                                    @if($errors->has('username'))
                                    <div class="invalid-feedback help-block">
                                        {{ $errors->first('username') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" placeholder="Enter Email Address" name="email" value="{{ old('email') }}" required>
                                    @if($errors->first('password'))
                                    <div class="invalid-feedback help-block">
                                        {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':'' }}" placeholder="Enter Password" name="password" required>
                                    @if($errors->first('password'))
                                    <div class='invalid-feedback'>
                                        {{ $errors->first('password') }}
                                    </div>
                                    @endif
                                </div>
                                <div class='row'>
                                    <div class='col-sm-6'>
                                        <button type="submit" class="btn btn-block btn-success">Create Account</button>
                                    </div>
                                    <div class='col-sm-6'>
                                        <a href="{{ route('login') }}" class='btn btn-block btn-primary'>Already have an account?</a>
                                    </div>
                                </div>
                            </form>
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