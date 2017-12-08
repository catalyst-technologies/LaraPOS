@extends('base')
@section('title','Edit Customer')
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
    <li class="breadcrumb-item">
        <a href="{{ route('customers.all') }}">Customers</a>
    </li>
    <li class="breadcrumb-item">Edit Customer</li>

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
<form action="{{ route('customers.update',['id'=>$customer->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Enter Customer Name" required value="{{ $customer->name }}">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter Email Address" required value="{{ $customer->email }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone_number" placeholder="Enter Phone Number" required value="{{ $customer->phone_number }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="address" placeholder="Enter Address" requried value="{{ $customer->address }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="city" placeholder="Enter City" required value="{{ $customer->city }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="state" placeholder="Enter State" required value="{{ $customer->state }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="zip" placeholder="Enter ZIP Code" required value="{{ $customer->zip }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="company_name" placeholder="Enter Company Name" required value="{{ $customer->company_name }}">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="account" placeholder="Enter Account Number" required value="{{ $customer->account }}">
            </div>
            <button type="submit" class="btn btn-primary form-control">Save User</button>
        </div>
    </div>        
</form>
@endsection

@section('plugin_script')

@endsection

@section('page_script')

@endsection
