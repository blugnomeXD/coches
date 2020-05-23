<?php

require_once('../clases/Administrador.php');
   
session_start();

$admin =  new Administrador;
$listarUsuarios = $admin->listarUsuarios();
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
        <li class="active"><a href="administrador.php">Gestor de Usuarios</a></li>
        <li ><a href="gestor-ofertas.php">Gestor de Ofertas</a></li>
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
  <h2>Gestor de Usuarios</h2> 
<div class="table-responsive">
      <table class="table table-bordered table-striped ">
        <thead>
          <tr>
            <th>Id Usuario</th>
            <th>Usuario</th>
            <th>Password</th>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Tipo Usuario</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
    <?php foreach($listarUsuarios as $listarUsuarios) {?>
          <tr>
            <td><?php echo $listarUsuarios['id_usuario'];?></td>
            <td><?php echo $listarUsuarios['usuario'];?></td>
            <td><?php echo $listarUsuarios['password'];?></td>
            <td><?php echo $listarUsuarios['dni'];?></td>
            <td><?php echo $listarUsuarios['nombre'];?></td>
            <td><?php echo $listarUsuarios['primer_apellido'];?></td>
            <td><?php echo $listarUsuarios['segundo_apellido'];?></td>
            <td><?php echo $listarUsuarios['email'];?></td>
            <td><?php echo $listarUsuarios['telefono'];?></td>
            <td><?php echo $listarUsuarios['tipo_usuario'];?></td>
            <td>
              
              <a href="../actionAdmin/delete-user.php?id=<?php echo $listarUsuarios['id_usuario'];?>" class=" btn-sm btn btn-danger">
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