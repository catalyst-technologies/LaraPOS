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
        <title>{{ env('APP_NAME') }} | @yield('title')</title>
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('plugins/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
        <!-- plugins and styles required by all views -->
        <link rel="stylesheet" href="{{ asset('plugins/tether/dist/css/tether.min.css') }}" type="text/css"/>
        <!-- plugin styles -->
        @yield('plugin_style')
        <!-- template styles for this application -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
        <!-- page styles -->
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
                    @include('flash::message')
                    <div class="animated fadeIn">
                        @yield('content')
                    </div>
                </div>
                <!-- /.conainer-fluid -->
            </main>
            @include('_template.aside')
        </div>
        @include('_template.footer')
        <!-- Plugins and scripts required by all views -->
        <script type="text/javascript" src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/tether/dist/js/tether.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/PACE/pace.js') }}"></script>
        <!-- plugin scripts -->
        @yield('plugin_script')
        <!-- template main scripts -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <!-- page scripts -->
        @yield('page_script')
        <script>
            $('div.alert').not('.alert-important').delay(10000).fadeOut(350);
        </script>
        <script>
            /* For Branching */
            $('#branch-menu .dropdown-menu .dropdown-item').on('click', function (e) {
                $(this).parent().children().removeClass('active');
                $.ajax({
                    type: 'GET',
                    url: "{{ URL::to('/') }}/branch/select/" + $(this).data('id'),
                    success: function (data) {
                        //$("#msg").html(data.msg);
                    }
                });
                $(this).addClass('active');
            })
        </script>
    </body>
</html>
