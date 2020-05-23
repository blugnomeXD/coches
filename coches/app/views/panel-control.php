<?php

session_start();

  require_once("../clases/Usuario.php");
  $session_user = $_SESSION['$usuario'];

   
  $usuario = new Usuario;
  
$print_user = $usuario->mostrarUsuario($session_user);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de usuario</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/panel_control.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/icons/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav>
        <ul class="menu">
            <li class="logo"><a href="../index.php">COMPRA-VENTA</a></li>
            <li class="item"><a href="index.php"><i class="fa fa-undo" aria-hidden="true"></i>Inicio</a></li>
            <li class="item"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Mi Información</a>
            </li>
            <li class="item"><a href="misofertas.php"><i class='fa fa-book'></i>Mis Ofertas</a></li>
            <li class="item"><a href="historial_compras.php"><i class='fa fa-book'></i>Historial-Compras</a></li>
            <li class="item"><a href="#"><i class='fa fa-book'></i>Historial-Ventas</a></li>
            <li class="item"><a href="../actionLogin/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar Sesión</a>
            </li>
            <li class="toggle"><a href="#"><i class="fa fa-bars"></i></a></li>
        </ul>
    </nav>

   

    <h2 class="info-text">Mi&nbsp;Informacion</h2>
    
               

    <div class="container">
    <form action='../actionUser/updateUser.php' method='POST'>
    
      
      <div class="form-group">
        <label class="" for="dni">DNI:</label>
        <input type="text" class="form-control" id="dni"  name="dni" value="<?php echo $print_user[2]?>">
      </div>
      <div class="form-group">
        <label class="" for="password">Contraseña:</label>
        <input type="password" class="form-control" id="password"  name="password" value="<?php echo $print_user[1]?>">
      </div>
      <div class="form-group">
        <label class="" for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre"  name="nombre" value="<?php echo $print_user[3]?>" required  >
      </div>
      <div class="form-group">
        <label class="" for="primer_apellido">Primer Apellido:</label>
        <input type="text" class="form-control" id="primer_apellido"  name="primer_apellido" value="<?php echo $print_user[4]?>" required >
      </div>

      <div class="form-group">
        <label class="" for="segundo_apellido">Segundo Apellido:</label>
        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" value="<?php echo $print_user[5]?>" required>
      </div>

      <div class="form-group">
        <label class="" for="email">Email:</label>
        <input type="text" class="form-control" id="email"  name="email" value="<?php echo $print_user[6]?>">
      </div>

      <div class="form-group">
        <label class="" for="telefono">Teléfono:</label>
        <input type="number" class="form-control" id="telefono"  name="telefono" value="<?php echo $print_user[7]?>">
      </div>

      <button type="submit" class="btn btn-success">Editar</button>
    </form>
  </div>    
    
   

    <footer class="container-footer">
            <h4 id="footer-text"> COMPRA-VENTA.NET 2016 - 2020</h4>
                <a href="#">Contacto</a>
                <a href="#">Terminos y condiciones</a>
                <a href="#">Pólitica  de privacidad / Cookies</a>         
  </footer>

        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/css/bootstrap/js/bootstrap.js"></script>
        <script src="../../assets/js/menu.js"></script>
       

    </body>
</html>