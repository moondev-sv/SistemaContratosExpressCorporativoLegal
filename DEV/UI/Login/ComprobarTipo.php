<?php
//Se incluye para confirmar que el usuario tiene la sesion activa
 include('../Login/session.php');
//Comprueba con la bandera TipoUsuario para redireccionar al modulo correspondiente
 if ($TipoUsuario==1) {
    header("location:/CL/DEV/UI/Admin/");
 } elseif ($TipoUsuario==2){
    header("location:/CL/DEV/UI/Control_Total/");   
 } 
 //Si no corresponde con algun anterior lo devuelve al login.
 else {
    header("location:/CL/DEV/UI/Login/login.php");
 }
?>