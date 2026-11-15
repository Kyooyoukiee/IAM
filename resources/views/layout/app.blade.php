<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem IAM</title>
</head>

<body>
    <h1>Selamat Datang di Sistem IAM</h1>
    <a href="/">Home</a><br>
    <a href="/login">Login</a><br>
    <a href="/register">Register</a><br>
    <a href="/dashboard">Dashboard</a><br>

    <form action="/logout" method="POST" style="display: inline;">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <hr />
    @yield('content')
</body>

</html>