@extends('base')
@section('title','Reports | Receivings')
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
    <li class="breadcrumb-item">>Reports</li>
    <li class="breadcrumb-item">Receivings</li>

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
                All Receivings
            </div>
            <div class="card-body">
                <table class="table table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Items Received</th>
                            <th>Received By</th>
                            <th>Supplied By</th>
                            <th>Total</th>
                            <th>Payment Type</th>
                            <th>Comment</th>
                            <th>Timestamp</th>
                            <th class="action"><!--  --></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($receivings as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->items_received() }}</td>
                            <td>{{ $item->user->username }}</td>
                            <td>{{ $item->supplier->company_name }}</td>
                            <td>{{ $item->total_cost() }}</td>
                            <td>{{ $item->payment_type }}</td>
                            <td>{{ $item->comment }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td class="action text-right">
                                <a href="#" class="btn btn-primary">Details</a>
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
