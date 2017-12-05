@extends('base')
@section('title','Dashboard')
@section('plugin_style')

@endsection

@section('page_style')

@endsection

@section('breadcrumbs')
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>

    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
        </div>
    </li>
</ol>
@endsection

@section('content')
    @include('pages.dashboard.box')
    @include('pages.dashboard.notif')
@endsection

@section('plugin_script')
    <script src="{{ asset('plugins/chart.js/dist/Chart.min.js') }}" type="text/javascript"></script>
@endsection

@section('page_script')
    <script src="{{ asset('js/dashboard/dashboard.js') }}" type="text/javascript"></script>
@endsection