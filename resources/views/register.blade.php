<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h1 style="text-align: center; color: #4b5563;">REGISTER PAGE</h1>

        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password" required>
        <br>
        <label for="confirmpassword">Confirm Password:</label>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>