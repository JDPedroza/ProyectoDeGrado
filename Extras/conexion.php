<?php
  try {
    $username = "root";
    $pw = "1q2w3e4r";
    $dsn = 'mysql:host=127.0.0.1;dbname=pruebadb;port=3306;charset=UTF8';
    $base = new Pdo($dsn, "$username", "$pw");
    /*echo "Conexion Success";*/
  } catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }