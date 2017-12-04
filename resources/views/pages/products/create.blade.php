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
        <div class="form-group">
            <input type="text" class="form-control" id="product_name" placeholder="Product Name">
        </div>
        <textarea id="textarea-input" name="details" rows="15" class="form-control" placeholder="Content..."></textarea>
    </div>
    <div class='col-md-4'>
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
                            <select class="form-control form-control-sm">
                                <option>Private</option>
                                <option>Public</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-calendar-plus-o "
                        </td>
                        <td>Published on</td>
                        <td class="text-right"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Updated on</td>
                        <td class="text-right"></td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                
            </div>
        </div>
    </div>
</div>
@endsection

@section('plugin_script')

@endsection

@section('page_script')

@endsection