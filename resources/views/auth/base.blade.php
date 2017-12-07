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
                @yield('content')
            </div>
        </div>

        <!-- Bootstrap and necessary plugins -->
        <script type="text/javascript" src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/tether/dist/js/tether.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    </body>
</html>