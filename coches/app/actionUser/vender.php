<?php
session_start();
require_once("../clases/Usuario.php");

    $titulo= $_POST['titulo'];
    $marca= $_POST['marca'];
    $modelo=$_POST['modelo'];
    $precio=$_POST['precio'];
    $antiguedad=$_POST['antiguedad'];
    $kilometros=$_POST['kilometros'];

    $usuario_venta = $_SESSION['$usuario'];
    
   

    $usu = new Usuario;
    $usu->ventaCoche($titulo,$marca,$modelo,$precio,$antiguedad,$kilometros,$usuario_venta);

    header("Location: ../views/index.php");
         exit();
?>
