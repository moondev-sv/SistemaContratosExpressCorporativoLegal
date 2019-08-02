<?php
//Conexion al servidor, base de datos.
include "../BD/conexion.php";

   //Se inicia la sesion.
   session_start();
   //Se hace la variable de la sesion del usuario logeado
   $comprobar_user = $_SESSION['usuario_logeado'];
   //Se obtiene la informacion del usuario logeado
   $ses_sql = mysqli_query($conex,"SELECT ID_Usuario, ID_TUser_FK, NomUser, NickUser from usuario where NickUser = '$comprobar_user' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $Usuario = $row['NickUser'];
   $CarnetUsuario =  $row['ID_Usuario'];
   $TipoUsuario = $row['ID_TUser_FK'];
   $NombreUsuario = $row['NomUser'];
   //Notario
   $ses_sql = mysqli_query($conex,"SELECT * FROM notario WHERE ID_Notario='1'");
   $notariorow = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $DomicilioNotario=$notariorow['Domicilio'];
   $NitNotario=$notariorow['Nit'];
   //Si no esta la variable con el nombre del usuario logeado se redirecciona al login.
   if(!isset($_SESSION['usuario_logeado'])){
      header("location:/CL/DEV/UI/Login/login.php");
      die();
   }
?>