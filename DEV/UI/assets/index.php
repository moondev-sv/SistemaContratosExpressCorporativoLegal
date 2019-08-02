<?php
 //Se incluye para confirmar que el usuario tiene la sesion activa
   include $_SERVER['DOCUMENT_ROOT']."/CL\DEV\UI\Login/session.php";
   //Si esta logeado pero no tiene permisos para estar en dicha ruta lo redirige a un error
   header("location:/CL\DEV\UX\Errores\Error403.php");
?>
