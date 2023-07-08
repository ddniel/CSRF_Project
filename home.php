<?php
    @include 'config.php';
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Welcome</h3>
    <p>your email is: <span><?php echo $_SESSION['username']; ?></span></p>

    <a href="logout.php">Log out</a>
    <a href="change_password.php">Change your password</a>
</body>
</html>