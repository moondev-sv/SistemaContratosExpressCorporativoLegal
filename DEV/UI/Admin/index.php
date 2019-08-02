<?php
//Se incluye para confirmar que el usuario tiene la sesion activa
include_once $_SERVER['DOCUMENT_ROOT']."/CL\DEV\UI/Login/session.php";
//Se comprueba que el usuario tiene el mismo tipo que el modulo.
//Sirve para evitar que un usuario P. Ejemplo Medico quiera entrar al modulo Admin o vicebersa
if ($TipoUsuario != 1) {
    //Si es diferente lo redirecciona a una pagina de error.
    header("location:/CL\DEV\UX\Errores\Error403.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/CL/DEV/UI/css/bootstrap.min.css">

    <!-- iconos -->
    <script src="/CL/DEV/UI/js/jquery-3.3.1.min.js"></script>
    <script defer src="/CL/DEV/UI/js/all.js"></script>

    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="/CL/DEV/UI/css/personalizado.css">
    <link rel="stylesheet" href="/CL/DEV/UI/css/nav_w3.css">
    <title>Digitador(a)</title>
    <link rel="icon" href="/CL/DEV/UI/assets/admin.ico">
</head>
<body>
    <script src="/CL/DEV/UI/js/all.js"></script>
    <script src="/CL/DEV/UI/js/popper.min.js"></script>
    <script src="/CL/DEV/UI/js/bootstrap.min.js"></script>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Cerrar &times;</button>
        <img src="/CL/DEV/UI/assets/logo2.png" style="width:100%;" alt="">
        <div style="text-align:left;margin-top:2px;margin-left:5%;">
            <span style="font-weight: bold;"><b>Contratos</b></span>
            <a href="?x=vta_vehiculo.php" class="w3-bar-item w3-button btn">Contrato: Venta Vehiculos</a>
            <a href="?x=arrendamiento.php" class="w3-bar-item w3-button btn">Contrato: Arrendamiento de inmueble</a>
            <a href="?x=mutuo.php" class="w3-bar-item w3-button btn">Mutuo: Caja de Credito</a>
            <a href="?x=vta_arma.php" class="w3-bar-item w3-button btn">Poder: Venta de Armas</a>
            <a href="?x=p_migrato_1p.php" class="w3-bar-item w3-button btn">Permiso migratorio: p/viajar con 1 de los padres</a>
            <a href="?x=c_trabajo.php" class="w3-bar-item w3-button btn">Contrato: De Trabajo</a>
            <hr>
            <a href="?x=ayuda.php" class="w3-bar-item w3-button btn">Ayuda y Acerca de.</a>
        </div>
        <hr>
        <div>
            <a href="../Login/logout.php" class="w3-bar-item w3-button btn btn-danger mr-1 mb-1">Cerrar Sesión</a>
        </div>
    </div>
    <div id="main">
        <div class="contentAdmin">
            <div class="container" style="justify-content:center;">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="/CL/DEV/UI/assets/logo2.png" style="width:35%;" alt="">
                    </div>
                </div>
                <div class="col-sm-12 offset-sm-0 form-contAdmin">
                    <div class="form-topAdmin">
                        <div class="form-top-leftAdmin" style="width:50%;">
                            <button id="openNav" class="w3-button menu w3-xlarge" onclick="w3_open()">&#9776;
                                Menú</button>
                        </div>
                        <div class="form-top-rightAdmin" style="width:50%;color:white;">
                            <div style="width:100%;font-size:12px;">
                                <h3>Modulo: Digitador(a)</h3>
                                <h3> Usuario: <?php echo $Usuario . ' (' . $NombreUsuario . ')'; ?> </h3>
                                <p>1. Seleccione la pestaña a utilizar. <br>2. Ingrese y/o consulte los datos
                                    correspondientes.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="myform-bottomAdmin">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 offset-sm-0">
                                    <?php
                                        if (isset($_GET['x'])) {
                                            include $_SERVER['DOCUMENT_ROOT'] . "/CL/DEV/UX/Funciones/".$_GET['x']."";
                                        }
                                        else{
                                                echo "<h2 id='bienvenida' class='display-5' style='color:black!important;'>Bienvenido al panel de digitador(a)</h2>";
                                        }
                                    ?>
                                    <script>
                                        //Abre el menu lateral
                                    function w3_open() {
                                        document.getElementById("main").style.marginLeft = "25%";
                                        document.getElementById("mySidebar").style.width = "25%";
                                        document.getElementById("mySidebar").style.display = "block";
                                        document.getElementById("openNav").style.display = 'none';
                                    }
                                        //Cierra el menu lateral
                                    function w3_close() {
                                        document.getElementById("main").style.marginLeft = "0%";
                                        document.getElementById("mySidebar").style.display = "none";
                                        document.getElementById("openNav").style.display = "inline-block";
                                    }
                                    </script>