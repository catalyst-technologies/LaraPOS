@extends('base')
@section('title','All Items')
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
    <li class="breadcrumb-item">All Suppliers</li>

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
    <div class='col-md-12'>
        <div class="card">
            <div class="card-header">
                All Items
                <a href="{{ route('items.create') }}" class="btn btn-primary btn-sm float-right">
                    Create New
                </a>
            </div>
            <div class="card-body">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th><!-- Item Image --></th>
                            <th>Item ID</th>
                            <th>UPC/EAN/ISBN</th>
                            <th>Item Name</th>
                            <th>Size</th>
                            <th>Cost Price</th>
                            <th>Selling Price</th>
                            <th>Quantity</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td></td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->upc_ean_isbn }}</td>
                            <td>{{ $item->item_name }}</td>
                            <td>{{ $item->size }}</td>
                            <td>{{ $item->cost_price }}</td>
                            <td>{{ $item->selling_price }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td class="text-right">
                                <a href="{{ route('inventory.edit',['id'=>$item->id]) }}" class="btn btn-success">Inventory</a>
                                <a href="{{ route('items.edit',['id'=>$item->id]) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('items.delete',['id'=>$item->id]) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @include('pagination.default', ['paginator' => $items])
                
            </div>

        </div>
    </div>

</div>
@endsection

@section('plugin_script')

@endsection

@section('page_script')

@endsection
