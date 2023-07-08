<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <?php
    $input = $_POST['username'];
    $regexPattern = "/[\w\W]*@[\w\W]*.[a-z]{2,3}/";

    if(isset($_POST['check'])){

        if (preg_match_all($regexPattern, $input)){
            echo 'valid';
        }else{
            echo 'Not valid';
        }
    }
    ?>

    <form action="" method="post"></form>
    <input type="text" name="username" placeholder="Enter your email" value=""><br>
    <input type="submit" value="Check" name="check">
</body>
</html>