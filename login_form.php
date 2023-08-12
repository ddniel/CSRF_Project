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

    //Generar y almacenar el token CSRF en la sesión
    // if (!isset($_SESSION['csrf_token'])) {
    //     $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    // }

    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="./styles.css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>

    <main>
        <div class="card">
            <form action="" method="post">
                <h3>Login</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span>'.$error .'</span>';
                    }
                }

                ?>
                <div class="input-container">
                    <div class='sq'><i class='bx bxs-user'></i></div><input class="input-field" type="email" name="username" placeholder="Enter your email" require><br><br>
                </div>
                <div class="input-container">
                    <div class='sq'><i class='bx bxs-lock-alt'></i></div><input class="input-field" type="password" name="password" placeholder="Enter your password" require><br><br>
                </div>
                <input class="btn" type="submit" value="login" name="submit"><br><br><br>
                <p class="small-txt">Dont have an account ? <a href="register_form.php">Register  Now</a></p>
            </form>
        </div>
    </main>
    
    </body>
</html>