<form action="{{ route('users.update',['id'=>$user->id]) }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="username" value="{{ $user->username }}" placeholder="Enter Username">
    <input type="email" name="email" value="{{ $user->email }}" placeholder="Enter Email">
    <input type="submit" value="Save">
</form>