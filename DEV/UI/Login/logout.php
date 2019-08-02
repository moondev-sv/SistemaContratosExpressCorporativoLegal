<?php
//Inicia la sesion.
   session_start();
   //Comprueba si la sesion esta destruida lo redirige al login
   if(session_destroy()) {
    header("location:/CL/DEV/UI/Login/login.php");
   }
?>