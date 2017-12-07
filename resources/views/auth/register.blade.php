@extends('auth.base')
@section('content')
<div class="col-md-6">
    <div class="card mx-4">
        <div class="card-body p-4">
            <form action="{{ route('register') }}" method="post">
                {{ csrf_field() }}
                <h1>Register</h1>
                <p class="text-muted">Create your account</p>
                <div class="form-group mb-3">
                    <input type="text" class="form-control {{ $errors->has('username')?'is-invalid':'' }}" placeholder="Enter Username" name="username" value="{{ old('username') }}" required>
                    @if($errors->has('username'))
                    <div class="invalid-feedback help-block">
                        {{ $errors->first('username') }}
                    </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" placeholder="Enter Email Address" name="email" value="{{ old('email') }}" required>
                    @if($errors->first('password'))
                    <div class="invalid-feedback help-block">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':'' }}" placeholder="Enter Password" name="password" required>
                    @if($errors->first('password'))
                    <div class='invalid-feedback'>
                        {{ $errors->first('password') }}
                    </div>
                    @endif
                </div>
                <div class='row'>
                    <div class='col-sm-6'>
                        <button type="submit" class="btn btn-block btn-success">Create Account</button>
                    </div>
                    <div class='col-sm-6'>
                        <a href="{{ route('login') }}" class='btn btn-block btn-primary'>Already have an account?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection