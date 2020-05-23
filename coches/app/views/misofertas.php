<?php       
   require_once('../clases/Usuario.php');
   
   session_start();

   $user = new Usuario;
   
   $sesion = $_SESSION['$usuario'];
   $historialOfertas = $user->cochesOfertados($sesion);

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/historial.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/icons/font-awesome-4.7.0/css/font-awesome.min.css">
    
</head>
</head>
<body>
<nav>
        <ul class="menu">
            <li class="logo"><a href="../index.php">COMPRA-VENTA</a></li>
            <li class="item"><a href="index.php"><i class="fa fa-undo" aria-hidden="true"></i>Inicio</a></li>
            <li class="item"><a href="panel-control.php"><i class="fa fa-user" aria-hidden="true"></i>Mi Información</a>
            </li>
            <li class="item"><a href="misofertas.php"><i class='fa fa-book'></i>Mis Ofertas</a></li>
            <li class="item"><a href="historial_compras.php"><i class='fa fa-book'></i>Historial-Compras</a></li>
            <li class="item"><a href="historial_ventas.php"><i class='fa fa-book'></i>Historial-Ventas</a></li>
            <li class="item"><a href="../actionLogin/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar Sesión</a>
            </li>
            <li class="toggle"><a href="#"><i class="fa fa-bars"></i></a></li>
        </ul>
    </nav>
    <main class="container p-4">
  
        <h2 class="h2">HISTORIAL  OFERTAS</h2>  

     <div class="table-responsive">
       <table class="table table-bordered table-striped ">
         <thead>
           <tr>
             <th>ID Coche</th>
             <th>Titulo</th>
             <th>Marca</th>
             <th>Modelo</th>
             <th>Precio</th>
             <th>Antiguedad</th>
             <th>Kilometros</th>
             <th>Estado Venta</th>
             
           </tr>
         </thead>
         <tbody>
      <?php  foreach($historialOfertas as $historialOfertas){ ?>   
           <tr>
             <td><?php echo $historialOfertas['id'];?></td>
             <td><?php echo $historialOfertas['titulo'];?></td>
             <td><?php echo $historialOfertas['marca'];?></td>
             <td><?php echo $historialOfertas['modelo'];?></td>
             <td><?php echo $historialOfertas['precio'];?></td>
             <td><?php echo $historialOfertas['antiguedad'];?></td>
             <td><?php echo $historialOfertas['kms'];?></td>
             <td><?php echo $historialOfertas['estado_venta'];?></td>
             
           </tr>
           
         </tbody>
      <?php }?>
       </table>
     </div>
     </div>
   </main>

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