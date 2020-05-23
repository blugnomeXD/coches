<?php
session_start();
require_once("../clases/Usuario.php");

    $id_coche=$_POST['id_coche'];
    $usuario_compra=$_POST['usuario_compra'];

       
    $usu = new Usuario;
    $usu->compraCoche($id_coche,$usuario_compra);
?>