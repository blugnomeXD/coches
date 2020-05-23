<?php
session_start();
require_once('../clases/Login.php');

      $user = $_POST['user'];
      $password = $_POST['password'];

      $login = new Login;

        $login->login($user,$password);
        
             header("Location: ../views/index.php");
        exit();
  
?>

