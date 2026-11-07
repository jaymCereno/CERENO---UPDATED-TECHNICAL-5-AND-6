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

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Username</th>
        <th>Full Name</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->username }}</td>
        <td>{{ $user->full_name }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>