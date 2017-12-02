<div style="width: 100%; float:left">
    <a href="{{ route('users.create') }}">Create</a>
</div>

@foreach ($users as $user)
<div style="width: 100%; float:left">
    <p>----------------------------</p>
    <p>Username: {{ $user->username }}</p>
    <p>Email: {{ $user->email }}</p>
    <a href="{{ route('users.edit'      , ['id' => $user->id]) }}">Edit</a>
    <a href="{{ route('users.delete'    , ['id' => $user->id]) }}">Delete</a>
</div>
@endforeach