@extends('base')
@section('title','Create Product')
@section('plugin_style')
<link rel="stylesheet" href="{{ asset('plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('page_style')

@endsection

@section('breadcrumbs')
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Products</li>
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
<form action="{{ route('products.save') }}" method="POST">
  {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
            </div>
            <textarea id="textarea-input" name="product_description" rows="15" class="form-control" placeholder="Content..."></textarea>
        </div>
        <div class='col-lg-4 col-md-push-12'>
            <div class='card'>
                <div class='card-header'>
                    Action
                </div>
                <div class='card-body'>
                    <table class="" style="width:100%">
                        <tr>
                            <td>
                                <i class="fa fa-lock"></i>
                            </td>
                            <td>Visibility</td>
                            <td class="text-right">
                                <select class="">
                                    <option>Private</option>
                                    <option>Public</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-calendar-plus-o"></i>
                            </td>
                            <td>Created at</td>
                            <td class="text-right">
                                5 months ago
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-calendar"></i>
                            </td>
                            <td>Updated at</td>
                            <td class="text-right">
                                4 hours ago
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-flat btn-danger">Trash</a>
                    <input type="submit" class="btn btn-flat btn-primary float-right"></button>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                          Price:
                    </div>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="product_price" name="product_price" placeholder="Product Price">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        Quantity:
                    </div>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="product_quantity" name="product_quantity" placeholder="Product Quantity">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        Expiry:
                    </div>
                    <div class="col-md-9">
                        <input type="date" class="form-control" id="product_expiry" name="product_expiry" placeholder="Product Expiry">
                    </div>
                </div>
            </div>
        </div>
</form>
</div>
@endsection

@section('plugin_script')
<script src="{{ asset('plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }} "></script>
@endsection

@section('page_script')
<script>
$('input[type="date"]').datetimepicker();
</script>
@endsection
