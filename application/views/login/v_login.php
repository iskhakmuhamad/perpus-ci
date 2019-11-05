<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/login/login.css') ?>">
    <title>Login</title>
</head>

<body style="background-image: url(<?= base_url('assets/css/login/login.jpg') ?>)">
    <div class="box">
        <h2>Login</h2>
        <form action="<?= base_url('login') ?>" method = "POST" >
            <div class="inputBox">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <input type="submit" name="login" value="Login">
        </form>
    </div>


</body>

</html>