<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'parciales/header.php' ?>

    <h1>Login</h1>
    <span>or <a href="signup.php">Signup</a> </span>

    <form action="login.php" method="post">
      <input type="text" name="Nombre" placeholder="Ingrese su nombre">
      <input type="password" name="Contraseña" placeholder="Ingrese su contraseña">
      <input type="submit" value="Send">
    </form>
  </body>
</html>
