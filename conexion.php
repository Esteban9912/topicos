<?php
  $server ='localhost';
  $username = 'root';
  $password = '';
  $database ='tarea';

  try {
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
  } catch (PDOException $e) {
    die('Conexion fallida: '.$e->getMessage());

  }

 ?>
