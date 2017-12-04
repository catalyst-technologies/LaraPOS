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
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <strong>New Product</strong>
                <small>Form</small>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="company">Product Name</label>
                    <input type="text" class="form-control" id="productname" placeholder="Product Name">
                </div>

                <div class="form-group">
                    <label for="vat">VAT</label>
                    <input type="text" class="form-control" id="vat" placeholder="PL1234567890">
                </div>

                <div class="form-group">
                    <label for="street">Street</label>
                    <input type="text" class="form-control" id="street" placeholder="Enter street name">
                </div>

                <div class="row">

                    <div class="form-group col-sm-8">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="Enter your city">
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="postal-code">Postal Code</label>
                        <input type="text" class="form-control" id="postal-code" placeholder="Postal Code">
                    </div>

                </div>
                <!--/.row-->

                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" placeholder="Country name">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('plugin_script')

@endsection

@section('page_script')

@endsection