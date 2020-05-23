<?php

session_start();
    if( $_SESSION['$tipo_usuario'] == 'Administrador'){

        header("Location: ../views/administrador.php");
            exit();
    }else{

        header("Location: ../views/panel-control.php");
    }
?>