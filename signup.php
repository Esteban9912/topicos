<?php
require 'conexion.php';

$message = '';

if (!empty($_POST['Nombre'])&& !empty($_POST['Contraseña'])){
  $sql = "INSERT INTO usuario (nombre, contraseña) VALUES (:Nombre, :Contraseña)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':Nombre',$_POST['Nombre']);
  $password = password_hash($_POST['Contraseña'], PASSWORD_BCRYPT);
  $stmt->bindParam(':Contraseña', $password);

  if ($stmt->execute()) {
    $message = 'Registro creado';
  } else {
    $message = 'No se creo el registro';
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'parciales/header.php' ?>

    <?php if(!empty($message)): ?>
      <p><?= $message ?></p>
    <?php endif; ?>





    <h1>Signup</h1>
    <span>or <a href="login.php">Login</a> </span>

    <form class="" action="signup.php" method="post">
      <input type="text" name="Nombre" placeholder="Ingrese su nombre">
      <input type="password" name="Contraseña" placeholder="Ingrese su contraseña">
      <input type="password" name="Confirma_contraseña" placeholder="Confirma la contraseña">
      <input type="submit" value="Send">

    </form>
  </body>
</html>
