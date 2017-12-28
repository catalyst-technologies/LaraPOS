@extends('base')
@section('title','Inventory')
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
    <li class="breadcrumb-item">Editing [{{ $item->item_name }}]</li>

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
    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
        <form action="{{ route('inventory.update',['id'=>$item->id]) }}" method="POST">
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
                        <input type="number" class="form-control" name="in_out_qty">
                    </td>
                </tr>
                <tr>
                    <td>Remarks</td>
                    <td>
                        <input type="text" class="form-control" name="remarks">
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
    </div>
    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
        <table class="table">
            <thead>
                <tr>
                    <td>Inventory Data Tracking</td>
                    <td>Employee</td>
                    <td>In/Out Qty</td>
                    <td>Remarks</td>
                </tr>
            </thead>
            <tbody>
                @foreach($inventory as $inventory)
                <tr>
                    <td>{{ $inventory->created_at }}</td>
                    <td>{{ $inventory->user->username }}</td>
                    <td>{{ $inventory->in_out_qty }}</td>
                    <td>{{ $inventory->remarks }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('plugin_script')

@endsection

@section('page_script')

@endsection
