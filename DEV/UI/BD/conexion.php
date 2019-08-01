<?php
$user = "root"; // Usuario a usar en la base de datos
$pass = ""; // Contraseña que se usa en la bd
$server = "localhost";  // Servidor donde esta alojado la bd
$bd = "corplegal"; // Nombre de la BD
$conex = mysqli_connect($server, $user, $pass) or die ("No se ha podido entablar conexion con el servidor"); // Linea de conexion a el servidor 
$conexBD = mysqli_select_db($conex, $bd) or die ("No se conecto con la base de datos"); // Linea de conexion a la base de datos
?>