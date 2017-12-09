@extends('base')
@section('title','New Item')
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
    <li class="breadcrumb-item">Create New</li>

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
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form action="{{ route('items.save') }}" method="POST">
            {{ csrf_field() }}
            <table class="table">
                <tr>
                    <td>UPC/EAN/ISBN</td>
                    <td>{{ $item->upc_ean_isbn }}
                </tr>
                <tr>
                    <td>Item Name</td>
                    <td>{{ $item->item_name }}</td>
                </tr>
                <tr>
                    <td>Current Quantity</td>
                    <td>{{ $item->quantity }}</td>
                </tr>
                <tr>
                    <td>Inventory to add/subtract *</td>
                    <td>
                        <input type="number" class="form-control" name="quantity">
                    </td>
                </tr>
                <tr>
                    <td>Comments</td>
                    <td>
                        <input type="text" class="form-control" name="comments">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
        <button type="submit" class="btn btn-primary form-control">Save User</button>
    </div>
</div>
@endsection

@section('plugin_script')

@endsection

@section('page_script')

@endsection
