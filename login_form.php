<?php
    @include 'config.php';

    session_start();

    if(isset($_POST['submit'])){

        $email = $_POST['username'];
        $password = $_POST['password'];
        $select = "SELECT * FROM user_form WHERE email = '$email' && pass = '$password'";

        $result = mysqli_query($conn,$select);
        if(mysqli_num_rows($result)> 0){
            $_SESSION['username'] = $email;
            $_SESSION['pass'] = $password;
            header('location:home.php');
        }else{
            $error[] = 'incorrect username or password';
        }

    }
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action="" method="post">
        <h3>Loginpage</h3>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span>'.$error .'</span>';
            }
        }

        ?>
         <input type="email" name="username" placeholder="enter your email" require><br><br>
        <input type="password" name="password" placeholder="enter your password" require><br><br>
        <input type="submit" value="login" name="submit"><br><br><br>
        <p>DONT have an account ? <a href="register_form.php">Register  Now</a></p>
    </body>
</html>