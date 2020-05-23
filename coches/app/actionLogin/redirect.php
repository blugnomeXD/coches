<?php
session_start();
require_once('../clases/Login.php');

    $login = new Login;

        $login->login($user,$password);
        
echo " Hola estoy desde  direct";
         /* header("Location: https://www.marca.com/");
         exit(); */

    E
       

    
?>
