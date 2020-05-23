

<?php

require_once("../clases/Usuario.php");

    $word = $_POST['keyword'];
 
     $usuario = new Usuario;

     $listarCoches = $usuario->buscarCoche($word);
 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compra venta de automobiles">
    <meta name="keywords" content="coches,comprar,vender,automobiles,motos">
    <meta name="author" content="Fernando Melendez Prieto">
    <title>Busqueda</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/sign-up.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/coche.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <header id="header">
        <div class="center">

            <div id="logo">
                <img src="../../assets/img/rueda.png" class="app-logo" alt="Logotipo" />
                <div id="brand">
                    <h1><a href="index.html"><strong>COMPRA-VENTA</strong></a></h1>
                </div>
            </div>
             <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">INICIO</a>
                    </li>
                    <li>
                        <a href="comprar.php">COMPRAR</a>
                    </li>
                    <li>
                        <a href="vender.php">VENDER</a>
                    </li> 
            </nav>
        </div>
        <div class="center">
    <section id="content-index">
    <?php 
    if (is_array($listarCoches)){
        foreach($listarCoches  as $listarCoches ){ ?>
         <h2 class="subheader">coches disponibles </h2>
        <div class="lista-coche">
    <div class="foto-coche">
        <img src=../../assets/img/coche.jpg alt="">
    </div>
    <div class="info-venta">
    <div class="modelo-coche">
        <h2 class="text-modelo"><?php echo $listarCoches['titulo'];?></h2>
    </div>

    <div class="datos">
        <div class="izquierda">
            <ul>
                <li><strong>Marca: </strong><?php echo $listarCoches['marca'];?> </li> 
                <li><strong> Modelo: </strong><?php echo $listarCoches['modelo'];?></li> 
                <li><strong>Precio: </strong><?php echo $listarCoches['precio'];?>€</li>
            </ul>
        </div>
        <div class="derecha">
        <ul>
            <li><strong>Antiguedad: </strong><?php echo $listarCoches['antiguedad'];?></li>
            <li><strong>Kms: </strong><?php echo $listarCoches['kms'];?>Kms </li>
            <li><strong>Usuario: </strong><?php echo $listarCoches['usuario_venta'];?></li>
        </ul>
        </div>
    </div>
        <form action="../actionUser/comprar.php"   method="POST">
            <input type="hidden" name="id_coche" value="<?php echo $listarCoches['id'];?>">
            <input type="hidden" name="usuario_compra" value="<?php echo $_SESSION['$usuario'];?>">
            <input type="submit" value="COMPRAR YA !" class="submit-comprar">
        </form>
    </div>
        </div>
    <?php }}
            else{
        
         echo" no hay resultados" ;
            }?>

         
    </section>
</div>

      
    <div class="clearfix"></div>
    <footer id="footer">
        <div class="center">
            <p>
                &copy; Compra-Venta 2020-2021
            </p>
            <p>
                <strong>Email de contacto: contacto@compraventa.es </strong> <br>
                <a href="terminos.html">Condiciones de venta</a>
            </p>
        </div>
    </footer>

      
    
</body>

</html>
