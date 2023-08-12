<?php
    @include 'config.php';
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h3 style="position: absolute; left: 5%; top: 2%; font-size: 50px;">Welcome!</h3>
        
        <div style="position: absolute; right: 5%; top: 2%; text-align: right;">
            <span style="font-size: 16px;"><?php echo $_SESSION['username']; ?></span></p>
    
            <a href="logout.php">Log out</a><br><br>
            <a href="change_password.php">Change your password</a>
        </div>
        <div style="width: 60%;">
            <h3>Random Text</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam eos totam mollitia blanditiis est minima, esse vero qui illum voluptates inventore, quae corrupti dolor minus fugit iste natus deleniti. Aut. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam doloribus ratione inventore dolores vero minus praesentium accusantium laudantium dolorem unde voluptas adipisci, quisquam delectus obcaecati exercitationem! Vel beatae dolorum magnam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse dignissimos aliquam aperiam fuga voluptas illo, ratione culpa sit accusantium in, mollitia neque. Sunt dolorem eaque nesciunt deserunt dolore ipsam quam.</p>
        </div>
        
    </main>
    
</body>
</html>