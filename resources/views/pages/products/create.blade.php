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
<form action="{{ route('users.save') }}" method="POST">
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <input type="text" class="form-control" id="product_name" placeholder="Product Name">
            </div>
            <textarea id="textarea-input" name="details" rows="15" class="form-control" placeholder="Content..."></textarea>
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
                    <button class="btn btn-flat btn-primary float-right">Submit</button>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        Product Price:
                    </div>
                    <div class="col-md-8">
                        <input type="number" class="form-control" id="product_price" placeholder="Product Price">
                    </div>
                </div>
            </div>
        </div>
</form>
</div>
@endsection

@section('plugin_script')

@endsection

@section('page_script')

@endsection
