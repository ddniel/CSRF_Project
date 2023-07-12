<?php
    @include 'config.php';

    session_start();
    if(isset($_POST['submit'])){

        $email = $_POST['username'];
        $password = $_POST['password'];
        $cpass = $_POST['cpassword'];
        // $regexPattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";

        $select = "SELECT * FROM user_form WHERE email = '$email' && pass = '$password'";

        $result = mysqli_query($conn,$select);

        if(mysqli_num_rows($result)> 0){
            $error[] = 'User already exist';
        }else{
            if($password != $cpass){
                $error[] = "Password does not match";
            }

            // else if(!preg_match_all($regexPattern, $password)){
            //     $error[] = "Password must contain 1 upper, 1 lower, 1 number and 8+ character";
            // }

            else{
                $insert = "INSERT INTO user_form(email,pass) VALUES('$email','$password')";
                mysqli_query($conn,$insert);
            }
       }

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
                <h3>Register Now</h3>
                
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
                <div class='input-container'>
                    <div class='sq'><i class='bx bxs-lock-alt'></i></div><input class="input-field" type="password" name="password" placeholder="Enter your password" require><br><br>
                </div>
                <div class='input-container'>
                    <div class='sq'><i class='bx bxs-check-circle'></i></div><input class="input-field" type="password" name="cpassword" placeholder="Confirm your password" require><br><br>
                </div>
                <input class="btn" type="submit" value="Register" name="submit"><br><br>
                <p class="small-txt">Have an account? <a href="login_form.php">Login now</a> </p>
            </form>
        </div>
    </main>
    
</body>
</html>