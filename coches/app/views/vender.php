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
    <title>Vender</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/sign-up.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">
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
                    <form action="#">
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

        <section id="content-register">
            <h2 class="subheader"> formulario de venta</h2>
            <p>Para vender debes estar registrado, si no lo estás hazlo <a href="registro.html">aquí</a></p>
            <div class="form-register-user">
                <form action="../actionUser/vender.php" method="POST" id="sell-form">

                    <label for="titulo">Titulo de la venta</label><br>
                    <input type="text" id="titulo" name="titulo" required><br>

                    <label for="marca">Marca</label><br>
                    <input type="text" id="marca"  name="marca" minlength="3" maxlength="12" required><br>

                    <label for="modelo">Modelo</label><br>
                    <input type="text" id="modelo"   name="modelo" minlength="3" maxlength="12" required><br>

                    <label for="precio">Precio</label><br>
                    <input type="text" id="precio"  name="precio" minlength="7" maxlength="7" required><br>

                    <label for="antiguedad">Antiguedad</label><br>
                    <input type="text" id="antiguedad" name="antiguedad" minlength="7" maxlength="7" required><br>

                    <label for="kilometros">Kilometros</label><br>
                    <input type="text" id="kilometros"  name="kilometros" minlength="3" maxlength="12" required><br>

                    <input type="file" id="car" accept="image/png, image/jpeg"><br>
                    <input type="submit" value="REGISTRARSE">
                </form>
            </div>
            
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