<?php       
   require_once('../clases/Usuario.php');
   
   session_start();

   $user = new Usuario;
   
   $sesion = $_SESSION['$usuario'];
   $historialCompra = $user->listarCompras($sesion);

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
            <li class="logo"><a href="index.php">COMPRA-VENTA</a></li>
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
  
        <h2 class="h2">HISTORIAL  DE COMPRAS</h2>  

     <div class="table-responsive">
       <table class="table table-bordered table-striped ">
         <thead>
           <tr>
             <th>ID Compra</th>
             <th>Marca</th>
             <th>Modelo</th>
             <th>Precio</th>
             <th>Kilometros</th>
             <th>Fecha Inscripcion</th>
             <th>Vendedor</th>
           </tr>
         </thead>
         <tbody>
      <?php  
        if(is_array($historialCompra))
          foreach($historialCompra as $historialCompra){ ?>   
           <tr>
             <td><?php echo $historialCompra['id_compra'];?></td>
             <td><?php echo $historialCompra['marca'];?></td>
             <td><?php echo $historialCompra['modelo'];?></td>
             <td><?php echo $historialCompra['precio'];?></td>
             <td><?php echo $historialCompra['kms'];?></td>
             <td><?php echo $historialCompra['fecha'];?></td>
             <td><?php echo $historialCompra['usuario_venta'];?></td>
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