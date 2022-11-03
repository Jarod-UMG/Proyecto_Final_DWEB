<?php
require 'config/database.php';
session_start();

if (!empty($_POST['usuario']) && !empty($_POST['contra'])) {
  $records = $conn->prepare('SELECT *FROM clientes WHERE usuario = usuario AND contra = contra;');
  require_once "vistas.php";
  $records->bindParam('usuario', $_POST['usuario']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  require_once "index.php";

  $message = '';

  if (count($results) > 0 && password_verify($_POST['contra'], $results['contra'])) {
    $_SESSION['id_cliente'] = $results['id_clinte'];
  } else {
    $message = 'Sorry, those credentials do not match';
  }
}

?>

