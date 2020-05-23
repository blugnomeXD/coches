<?php

require_once('../clases/Administrador.php');
   
session_start();

$admin =  new Administrador;
$listarCoches = $admin->listarCoches();
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
        <li class="active" ><a href="gestor-ofertas.php">Gestor de Ofertas</a></li>
        <li ><a href="gestor-historial.php">Historial de coches vendidos</a></li> 
        <li ><a href="mensajeria.php">Mensajeria</a></li>     
        <li><a href="../actionLogin/logout.php">Cerrar Sesión</a></li>
      </ul>
    </div>
  </nav>

    <?php
          if (isset($_SESSION["eliminado"]))
      {?>
            <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Exito!</strong> Se ha sido eliminada correctamente
        </div>
      <?php
        unset($_SESSION["eliminado"]); }
      ?> 
  <main class="container p-4">
  <h2>Gestor de Ofertas</h2> 
<div class="table-responsive">
      <table class="table table-bordered table-striped ">
        <thead>
          <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th>Antiguedad</th>
            <th>Kilometros</th>
            <th>Estado de venta</th>
            <th>Vendedor</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
    <?php foreach($listarCoches as $listarCoches) {?>
          <tr>
            <td><?php echo $listarCoches['id'];?></td>
            <td><?php echo $listarCoches['titulo'];?></td>
            <td><?php echo $listarCoches['marca'];?></td>
            <td><?php echo $listarCoches['modelo'];?></td>
            <td><?php echo $listarCoches['precio'];?></td>
            <td><?php echo $listarCoches['antiguedad'];?></td>
            <td><?php echo $listarCoches['kms'];?></td>
            <td><?php echo $listarCoches['estado_venta'];?></td>
            <td><?php echo $listarCoches['usuario_venta'];?></td>
            <td>
              
              <a href="../actionAdmin/delete-coche.php?id=<?php echo $listarCoches['id'];?>" class=" btn-sm btn btn-danger">
                <i class="fa fa-trash"></i>
              </a>
            </td>
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