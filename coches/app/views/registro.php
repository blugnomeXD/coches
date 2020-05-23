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
    <title>Registro en la web</title>
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
                        <input type="text"  id="email_sign"><br>
                        <label for="pass_sign">PASSWORD</label><br>
                        <input type="password"  id="pass_sign"><br>
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
            <h2 class="subheader"> REGISTRO</h2>
            <div class="form-register-user">
                <form action='../actionUser/registerUser.php' method='POST'id="register-form">

                    <label for="usuario">Usuario</label><br>
                    <input type="text" id="usuario" name="usuario" minlength="3" maxlength="12" required><br>

                    <label for="password">Contraseña</label><br>
                    <input type="password" id="password" name="password" minlength="8" maxlength="11" required><br>

                    <label for="dni">DNI</label><br>
                    <input type="text" id="dni" minlength="3" name="dni" maxlength="12" required><br>

                    <label for="nombre">Nombre</label><br>
                    <input type="text" id="nombre" minlength="3" name="nombre" maxlength="12" required><br>

                    <label for="primer_apellido">Primer Apellido</label><br>
                    <input type="text" id="primer_apellido" minlength="3" name="primer_apellido" maxlength="12" required><br>

                    <label for="segundo_apellido">Segundo Apellido</label><br>
                    <input type="text" id="segundo_apellido" name="segundo_apellido" minlength="3" maxlength="12" required><br>

                    <label for="email">Email</label><br>
                    <input type="text" id="email" name="email" minlength="3"  maxlength="12" required><br>

                    <label for="telefono">Teléfono</label><br>
                    <input type="text" id="telefono" name="telefono" minlength="9" maxlength="9" required><br>
               
                    <input type="submit" value="REGISTRARSE">
                </form>
            </div>

            <p><strong>Si  ya estas registrado,inicia sesión desde <a href="#modal">aquí</a></strong></p>
  
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