<?php
session_start();
require_once('../clases/Login.php');
echo " Hola estoy desde  direct";
    $login = new Login;

        $login->login($user,$password);
        

         header("Location: ../views/index.php");
        exit();

   
       

    
?>
