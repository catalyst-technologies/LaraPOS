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
        @include('_template.head')
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
        <title>CoreUI - Open Source Bootstrap Admin Template</title>
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/simple-line-icons/css/simple-line-icons.css') }}">
        @yield('plugin_style')
        <!-- Main styles for this application -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Styles required by this views -->
        @yield('page_style')
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
        @include('_template.header')
        <div class="app-body">
           @include('_template.sidebar')
            <!-- Main content -->
            <main class="main">
                @yield('breadcrumbs')
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.conainer-fluid -->
            </main>
            @include('_template.aside')
        </div>
        @include('_template.footer')
        <!-- Bootstrap and necessary plugins -->
        <script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('plugins/tether/dist/js/tether.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('plugins/PACE/pace.js') }}" type="text/javascript"></script>
        <!-- Plugins and scripts required by all views -->
        <script src="{{ asset('plugins/chart.js/dist/Chart.min.js') }}" type="text/javascript"></script>
        @yield('plugin_script')
        <!-- GenesisUI main scripts -->
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        @yield('page_script')
    </body>
</html>
