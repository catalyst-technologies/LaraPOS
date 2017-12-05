@extends('base')
@section('title','All Products')
@section('plugin_style')

@endsection

@section('page_style')

@endsection

@section('breadcrumbs')
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Products</li>
    <li class="breadcrumb-item">All Products</li>

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
                All Products
                <a href="{{ route('ui.products.create') }}" class="btn btn-primary btn-sm float-right">
                    Create New
                </a>
            </div>
            <div class="card-body">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Expiry</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->qty }}</td>
                            <td>{{ $product->expiry }}</td>
                            <td class="text-right">
                                <a href="{{ route('products.edit',['id'=>$product->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('products.delete',['id'=>$product->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
@endsection

@section('plugin_script')

@endsection

@section('page_script')

@endsection
