<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>

<h1>Create User</h1>

<form method="POST" action="/users/store">
    @csrf

    <label>Username</label>
    <input type="text" name="username">

    <br><br>

    <label>Full Name</label>
    <input type="text" name="full_name">

    <br><br>

    <button type="submit">Save User</button>
</form>

</body>
</html>
