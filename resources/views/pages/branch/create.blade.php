@extends('base')
@section('title','Create Branch')
@section('plugin_style')

@endsection

@section('page_style')

@endsection

@section('breadcrumbs')
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class='breadcrumb-item'>
        <a href="{{ route('users.all') }}">Branch</a>
    </li>
    <li class='breadcrumb-item'>All Branch</li>
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
<form action="{{ route('branch.save') }}" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Branch Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Contact Number">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="street_adress" placeholder="Street Adress">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="city" placeholder="City">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="country" placeholder="Country">
            </div>
            <button type="submit" class="btn btn-primary form-control">Save Branch</button>
        </div>
    </div>
</form>
@endsection

@section('plugin_script')

@endsection

@section('page_script')

@endsection
