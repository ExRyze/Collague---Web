<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <?php
    if (isset($_GET['error'])) {
      echo "<b>{$_GET['error']}</b><hr>";
    }
  ?>

  <h3>Login</h3>

  <form action="./../config/cf_login.php" method="post">
    <label for="username">Username</label><br>
    <input type="text" name="username">
    <br><br>

    <label for="password">Password</label><br>
    <input type="password" name="password">
    <br><br>

    <button type="submit">Submit</button>
  </form>
  <a href="./register.php">Register</a>
</body>
</html>