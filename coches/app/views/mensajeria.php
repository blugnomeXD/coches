
<?php

session_start();
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
        <li ><a href="gestor-vendido.php">Historial de coches vendidos</a></li>    
        <li class="active"><a href="mensajeria.php">Mensajeria</a></li>     
        <li><a href="../actionLogin/logout.php">Cerrar Sesión</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
  <h2>Enviar mensaje a un usuario</h2> 
    <form class="" action="#" method="GET">

      
      <div class="form-group">
        <label class="" for="titulo">Usuario:</label>
        <input type="text" class="form-control" id="titulo"  name="titulo" value="">
      </div>
  
     

        <div class="form-group">
        <label class="" for="descripcion" style="display:block">Mensaje</label>
    <textarea  name="descripcion" id="descripcion" cols="80" rows="10"></textarea>      
      </div>
      <button type="submit" class="btn btn-success">Enviar mensaje</button>
    </form>
    
    
    
  <footer class="container-footer tamano">
  <div id="footer">
  <h4 id="footer-text"> IES Joan Coromines 2010 - 2020</h4>
                <a href="#">Contacto</a>
                <a href="#">Terminos y condiciones</a>
                <a href="#">Pólitica  de privacidad / Cookies</a>   
  </div>
                  
  </footer>
  
  
 <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/css/bootstrap/js/bootstrap.js"></script>
  
</body>

</html>