
      <?php 
        session_start(); 
        require_once("../clases/Coches.php");

        $listar = new Coches;
        $listarCoches = $listar->listarCoches();
        ?>   

        
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compra venta de automobiles">
    <meta name="keywords" content="coches,comprar,vender,automobiles,motos">
    <meta name="author" content="Fernando Melendez Prieto">

    <title>Inicio  COMPRA-VENTA</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/sign-up.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/coche.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <header id="header">
        <div class="center">
            <!-- LOGO -->
            <div id="logo">
                <img src="../../assets/img/rueda.png" class="app-logo" alt="Logotipo" />
                <div id="brand">
                    <h1><a href="index.php"><strong>COMPRA-VENTA</strong></a></h1>
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
                    <li id="micuenta" >
                        <a href="../actionLogin/panel.php" >MI CUENTA</a>
                    </li>
                    <li id="cerrarsesion" >
                        <a href="../actionLogin/logout.php" >CERRAR SESION</a>
                    </li>
                    <li id="sesion">
                        <a href="#modal">INICIAR SESIÓN</a>
                    </li>
                    <li id="registro">
                        <a href="registro.php">REGISTRARSE</a>
                    </li>
                </ul>
            </nav>
        </div>

            

        <div class="container-all" id="modal">
            <div class="popup">
                <div class="container-form">
                    <form action="../actionLogin/redirect.php" method="POST">
                        <label for="email_sign">USUARIO</label><br>
                        <input type="text" name="user"  id="email_sign"><br>
                        <label for="pass_sign">PASSWORD</label><br>
                        <input type="password" id="pass_sign" name="password"><br>
                        <input type="submit" value="login">
                    </form>
                </div>
                <a href="#" class="btn-close-popup">X</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </header>
    <div id="slider" class="slider-big ">

        <h1>Bienvenido a COMPRA-VENTA.es</h1>
         <a href="#" class="btn-white" id="btn-registro">Registrate!</a>
    </div>
    <div class="center">
    <section id="content-index">
        <h2 class="subheader">coches disponibles </h2>
   
<?php  
        foreach($listarCoches  as $listarCoches ){ ?>
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
        <?php }?>

         
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

    <?php  include("../actionLogin/comprobarMenu.php") ?>
</body>

</html>