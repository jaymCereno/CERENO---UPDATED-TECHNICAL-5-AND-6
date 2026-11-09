<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>

<h1>User Accounts</h1>

<a href="/">Home</a> |
<a href="/about">About</a> |
<a href="/customers">Customers</a> |
<a href="/users">Users</a>

<a href="/users/create">
    Add User
</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Avatar</th>
        <th>Username</th>
        <th>Full Name</th>
        <th>Actions</th>
    </tr>

    @foreach($users as $user)
    <tr>

        <td>

            @if($user->avatar)

                <img
                    src="{{ asset('storage/' . $user->avatar) }}"
                    width="80"
                    height="80">

            @else

                <img
                    src="https://via.placeholder.com/80"
                    width="80"
                    height="80">

            @endif

        </td>

        <td>{{ $user->username }}</td>

        <td>{{ $user->full_name }}</td>

        <td>
            <a href="/users/{{ $user->id }}/edit">
                Edit
            </a>
        </td>

    </tr>
    @endforeach

</table>

</body>
</html>