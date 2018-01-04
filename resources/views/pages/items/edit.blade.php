@extends('base')
@section('title','Edit Item')
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
        <a href="{{ route('items.all') }}">Items</a>
    </li>
    <li class="breadcrumb-item">{{ $item->item_name }}</li>

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
<form action="{{ route('items.update',['id'=>$item->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <input type="text" class="form-control" name="upc_ean_isbn" placeholder="UPC/EAN/ISBN" value="{{ $item->upc_ean_isbn }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="item_name" placeholder="Enter Item Name" value="{{ $item->item_name }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="size" placeholder="Enter Item Size" value="{{ $item->size }}">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="description" rows="10">{{ $item->description }}</textarea>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="cost_price" placeholder="Enter Cost Price" value="{{ $item->cost_price }}">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="selling_price" placeholder="Enter Selling Price" value="{{ $item->selling_price }}">
            </div>
            <div class="form-group">
                Expiry Date <input type="date" class="form-control" name="expiry_date" valie="{{ $item->expiry_date }}">
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
