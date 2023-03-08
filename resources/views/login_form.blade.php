<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/login.css'])
    <title>Document</title>
</head>
<body>

</body>
</html>

{{--Login--}}
<section class="login-section">
<h1>Please fill in login credientals</h1>
<form action="/login" method="POST" class="login-form">
    @csrf
    <label for="email">Email</label>
    <input type="email" required name="email">
    <label for="password">Password</label>
    <input type="password" name="password">
    <button type="submit">Login</button>
</form>
@include('errors')
<a href="/">Back</a>
</section>

<p>Dont have an account?</p>
<a href="/register_form">Register here</a>

