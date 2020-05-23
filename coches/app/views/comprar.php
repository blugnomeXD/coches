
<?php 
        session_start(); 
   
        ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compra venta de automobiles">
    <meta name="keywords" content="coches,comprar,vender,automobiles,motos">
    <meta name="author" content="Fernando Melendez Prieto">
    <title>COMPRAR</title>
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
                    <form>
                        <label for="email_sign">EMAIL</label><br>
                        <input type="text" id="email_sign"><br>
                        <label for="pass_sign">PASSWORD</label><br>
                        <input type="password" id="pass_sign"><br>
                        <input type="submit" value="login">
                    </form>
                </div>
                <a href="#" class="btn-close-popup">X</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </header>

    <div class="center">
        <aside id="sidebar-filter">
            <div class="form-register-user">
                <form id="buy-form" action="busqueda.php" method="POST">
                
                    <label for="marca" id ="bajar">BUSCAR</label><br>
                    <input type="text" id="marca" name ="keyword" required><br>
                    <p>Busca el coche</p>
                    <input type="submit" value="Filtrar" onclick="loadDoc()">
                </form>
            </div>
        </aside>
        <section id="content-sell">
            
        </section>

    </div>
    <?php  include("../actionLogin/comprobarMenu.php") ?>
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