<?php
    @include 'config.php';

    session_start();

    if(isset($_POST['submit'])){

        $email = $_SESSION['username']; // Informacion extraida de DB de la sesion iniciada.

        $password = $_POST['password']; // Informacion del formulario
        $cpass = $_POST['cpassword']; // Informacion del formulario

        // Verificar el token CSRF
        
        // if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        //     die("CSRF token verification failed. Possible CSRF attack.");
        // } else {
    
            if($password != $cpass){
                $error[] = "Password does not match";
            }

            else{
                $update = "UPDATE user_form SET pass='$password' WHERE email='$email'";
                mysqli_query($conn,$update);
                echo "Password changed succesfully.";
                // header('location:home.php');
            }
        // }

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
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span>'.$error .'</span>';
            }
        }
        ?>
        <!-- <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>"> -->

        <input type="password" name="password" placeholder="Enter your new password" require><br><br>
        <input type="password" name="cpassword" placeholder="Confirm your password" require><br><br>
        <input type="submit" value="Send" name="submit"><br><br>
    </form>
    
</body>
</html>