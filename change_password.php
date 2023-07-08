<?php
    @include 'config.php';

    session_start();

    if(isset($_POST['submit'])){

        $email = $_SESSION['username']; // Informacion extraida de DB de la sesion iniciada.

        $password = $_POST['password']; // Informacion del formulario
        $cpass = $_POST['cpassword']; // Informacion del formulario


        // $regexPattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";

    
            if($password != $cpass){
                $error[] = "Password does not match";
            }

            // else if(!preg_match_all($regexPattern, $password)){
            //     $error[] = "Password must contain 1 upper, 1 lower, 1 number and 8+ character";
            // }

            else{
                $update = "UPDATE user_form SET pass='$password' WHERE email='$email'";
                mysqli_query($conn,$update);
                echo "Password changed succesfully.";
                // header('location:home.php');
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
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span>'.$error .'</span>';
            }
        }
        ?>

        <input type="password" name="password" placeholder="Enter your new password" require><br><br>
        <input type="password" name="cpassword" placeholder="Confirm your password" require><br><br>
        <input type="submit" value="Send" name="submit"><br><br>
    </form>
    
</body>
</html>