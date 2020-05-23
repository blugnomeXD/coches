<?php
session_start();
    require_once("../clases/Usuario.php");

        $cuenta = $_SESSION['$usuario'];
        $dni = $_POST['dni'];
        $password = $_POST['password'];
        $nombre = $_POST['nombre'];
        $primer_apellido = $_POST['primer_apellido'];
        $segundo_apellido =  $_POST['segundo_apellido'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $fecha_nacimiento  = $_POST['fecha_nacimiento'];
        
      echo   $fecha_nacimiento  . "<br>";
     
            
   
            $usuario = new Usuario;
    
            $usuario->editarUsuario($cuenta,$dni,$password,$nombre,$primer_apellido, $segundo_apellido,$email,$telefono );           
        

        
      

        

?>