@extends('auth.base')
@section('title','LOGIN');
@section('content')
<div class="col-md-8">
    <div class="card-group">
        <div class="card p-4">
            <div class="card-body">
                <form action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    <h1>Login</h1>
                    <p class="text-muted">Sign In to your account</p>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control {{ $errors->has('username')?'is-invalid':'' }}" placeholder="Username" name="username" value="{{ old('username') }}">
                        @if($errors->has('username'))
                        <div class="invalid-feedback help-block">
                            {{ $errors->first('username') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':'' }}" placeholder="Password" name="password" required>
                        @if($errors->has('password'))
                        <div class="invalid-feedback help-block">
                            {{ $errors->first('password') }}
                        </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary px-4">Login</button>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('password.request') }}" class="btn btn-link px-0">Forgot password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
                <div>
                    <h2>Sign up</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary active mt-3">Register Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection