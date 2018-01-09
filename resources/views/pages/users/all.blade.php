@extends('base')
@section('title','All Users')
@section('plugin_style')

@endsection

@section('page_style')

@endsection

@section('breadcrumbs')
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Users</li>
    <li class="breadcrumb-item">All users</li>

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
                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">
                    Create New
                </a>
            </div>
            <div class="card-body">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->user_type == 0)
                                    Admin
                                @else
                                    Staff
                                @endif
                            </td>
                            <td class="text-right">
                                <a href="{{ route('users.edit',['id'=>$user->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('users.delete',['id'=>$user->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center"> {!! $users->links() !!} </div>
            </div>

        </div>
    </div>

</div>
@endsection

@section('plugin_script')

@endsection

@section('page_script')

@endsection