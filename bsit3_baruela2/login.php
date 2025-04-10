<?php
// login.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <h2>Login</h2>
  <form action="login_process.php" method="post">
    Contact Number: <input type="text" name="contact" required /><br />
    Password: <input type="password" name="password" required /><br />
    <button type="submit">Login</button>
  </form>
  <a href="register.php"><button>Register</button></a>
</body>
</html>
