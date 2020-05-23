<?php

require_once('../clases/Login.php'); 

    session_start();
    $usuario= $_SESSION['$nia'];

        $login = new Login;
       
        $login->logout();
        header('Location:../views/index.php'); 
        exit();

?>