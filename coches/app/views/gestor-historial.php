<?php

require_once('../clases/Administrador.php');
   
session_start();

$admin =  new Administrador;
$listarHistorial = $admin->listarHistorial();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../assets/icons/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../assets/css/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../../assets/css/gestor-ofertas.css">
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Gestor de Usuarios</a>
      </div>
      <ul class="nav navbar-nav">
      <li><a href="index.php">Inicio</a></li>
        <li ><a href="administrador.php">Gestor de Usuarios</a></li>
        <li  ><a href="gestor-ofertas.php">Gestor de Ofertas</a></li>
        <li class="active"><a href="gestor-vendido.php">Historial de coches vendidos</a></li>
        <li ><a href="mensajeria.php">Mensajeria</a></li>      
        <li><a href="../actionLogin/logout.php">Cerrar Sesión</a></li>
      </ul>
    </div>
  </nav>
 
  <main class="container p-4">
  <h2>Historial de Ventas</h2> 
<div class="table-responsive">
      <table class="table table-bordered table-striped ">
        <thead>
          <tr>
            <th>ID Compra</th>
            <th>ID Coche</th>
            <th>Usuario comprador</th>
            <th>Usuario vendedor</th>
            <th>Fecha de la venta</th>
           
          </tr>
        </thead>
        <tbody>
    <?php 
    if(is_array($listarHistorial ))
      foreach( $listarHistorial  as $listarHistorial ) {?>
          <tr>
            <td><?php echo $listarHistorial ['id_compra'];?></td>
            <td><?php echo $listarHistorial ['id_coche'];?></td>
            <td><?php echo $listarHistorial ['usuario_compra'];?></td>
            <td><?php echo $listarHistorial ['usuario_venta'];?></td>
            <td><?php echo $listarHistorial ['fecha'];?></td>
        
          </tr>
              <?php }?>
        </tbody>
      </table>
    </div>
    </div>
  </main>
  <footer class="container-footer">
            <h4 id="footer-text"> IES Joan Coromines 2010 - 2020</h4>
                <a href="#">Contacto</a>
                <a href="#">Terminos y condiciones</a>
                <a href="#">Pólitica  de privacidad / Cookies</a>         
  </footer>

  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/css/bootstrap/js/bootstrap.js"></script>
 
  
</body>

</html>