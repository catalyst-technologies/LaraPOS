&@extends('base')
@section('title','Delivery')
@section('plugin_style')

@endsection

@section('page_style')

@endsection

@section('breadcrumbs')
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('root') }}">Dashboard</a>
    </li>
    <li class='breadcrumb-item'>
        <a href="{{ route('users.all') }}">Users</a>
    </li>
    <li class='breadcrumb-item'>All Users</li>
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
<form action="{{ route('deliveries.save') }}" method="POST">
    {{ csrf_field() }}
    <div class="row">

      <div class="col-lg-8">

        <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                  <input type="text" class="form-control" name="driver" placeholder="Driver">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="plate_num" placeholder="Plate Number">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="tracking_num" placeholder="Tracking Number">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="from" placeholder="From">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="to" placeholder="To">
              </div>

          </div>

        </div>

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

          </div>

  </div>

</form>
@endsection

@section('plugin_script')

@endsection

@section('page_script')

@endsection
