<form action="{{ route('users.save') }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="username" placeholder="Enter Username">
    <input type="email" name="email" placeholder="Enter Email">
    <input type="password" name="password" placeholder="Enter Password">
    <input type="submit" value="Save">
</form>
