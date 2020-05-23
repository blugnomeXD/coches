<?php

require_once('../clases/Usuario.php');


    $usuario = $_POST['usuario'];
    $password= $_POST['password'];
    $dni= $_POST['dni'];
    $nombre= $_POST['nombre'];
    $primer_apellido= $_POST['primer_apellido'];
    $segundo_apellido= $_POST['segundo_apellido'];
    $email= $_POST['email'];
    $telefono= $_POST['telefono'];

         $user = new Usuario();
         $user->registroUsuario($usuario,$password,$dni,$nombre,$primer_apellido,$segundo_apellido,$email,$telefono);
         
         header("Location: ../views/index.php");
         exit();
        

?>
