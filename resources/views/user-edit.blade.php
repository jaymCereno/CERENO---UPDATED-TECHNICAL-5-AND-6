<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h1>Edit User</h1>

<a href="/">Home</a> |
<a href="/about">About</a> |
<a href="/customers">Customers</a> |
<a href="/users">Users</a>

<br><br>

<form method="POST"
      action="/users/{{ $user->id }}/update"
      enctype="multipart/form-data">

    @csrf

    Username:
    <input
        type="text"
        name="username"
        value="{{ $user->username }}">

    <br><br>

    Full Name:
    <input
        type="text"
        name="full_name"
        value="{{ $user->full_name }}">

    <br><br>

    Avatar:
    <input
        type="file"
        name="avatar">

    <br><br>

    <button type="submit">
        Update User
    </button>

</form>

@if($user->avatar)

    <img
        src="{{ asset('storage/' . $user->avatar) }}"
        width="120"
        height="120">

    <br><br>

@endif

</body>
</html>