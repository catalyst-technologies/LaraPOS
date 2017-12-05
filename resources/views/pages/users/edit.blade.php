@extends('base')
@section('title','Edit User')
@section('plugin_style')

@endsection

@section('page_style')

@endsection

@section('breadcrumbs')
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class='breadcrumb-item'>Users</li>
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
<form action="{{ route('users.update',['id'=>$user->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <input type='hidden' name='uid' value='{{ $user->id }}'/>
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" value='{{ $user->username }}'>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email Address" value='{{ $user->email }}'>
            </div>
            <div class="form-group">
                <select class="form-control" name="user_type">
                    @if($user->user_type == 0)
                        <option value="0" selected>Admin</option>
                    @else
                        <option value="0">Admin</option>
                    @endif
                    @if($user->user_type == 1)
                        <option value="1" selected>Staff</option>
                    @else
                        <option value="1">Staff</option>
                    @endif
                </select>
            </div>
            <button type="submit" class="btn btn-primary form-control">Save User</button>
        </div>
    </div>        
</form>
@endsection

@section('plugin_script')

@endsection

@section('page_script')

@endsection
