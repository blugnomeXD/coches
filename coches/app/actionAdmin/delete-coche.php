<?php
session_start();
require_once("../clases/Administrador.php");

$administrador = new Administrador;

        $id = $_GET['id'];

        $administrador->eliminarCoche($id);
  
     $_SESSION["eliminado"]="eliminado";

         header("Location: ../views/gestor-ofertas.php");
         exit();
?>