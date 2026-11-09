<!DOCTYPE html>
<html>
<head>
    <title>Create Customer</title>
</head>
<body>

<h1>Create Customer</h1>

<a href="/">Home</a> |
<a href="/about">About</a> |
<a href="/customers">Customers</a> |
<a href="/users">Users</a>

<br><br>

<form method="POST" action="/customers/store">
    @csrf

    Full Name:
    <input type="text" name="full_name">
    <br><br>

    Email:
    <input type="email" name="email">
    <br><br>

    Phone:
    <input type="text" name="phone">
    <br><br>

    <button type="submit">
        Save Customer
    </button>
</form>

</body>
</html>