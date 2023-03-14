<!DOCTYPE html>
<html>
<head>
    <title>Admin Auth Laravel 10 </title>
</head>
<body>

<div class="container">
    Welcome, Admin {{auth()->guard('admin')->user()->name}}

    <a href="admin_logout">Logout</a>
</div>

</body>
</html>
