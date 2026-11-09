<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>

<h1>Customer Accounts</h1>

<a href="/">Home</a> |
<a href="/about">About</a> |
<a href="/customers">Customers</a> |
<a href="/users">Users</a>
<a href="/customers/create">Add Customer</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Actions</th>
    </tr>

    @foreach($customers as $customer)
    <tr>
        <td>{{ $customer->full_name }}</td>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->phone }}</td>
        
        <td>
            <a href="/customers/{{ $customer->id }}/edit">
            Edit
            </a>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>