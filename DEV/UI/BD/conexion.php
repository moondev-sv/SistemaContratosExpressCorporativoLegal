<?php
$user = "root"; // Usuario a usar en la base de datos
$pass = "mysql"; // Contraseña que se usa en la bd
$server = "localhost";  // Servidor donde esta alojado la bd
$bd = "corplegal"; // Nombre de la BD
$conex = mysqli_connect($server, $user, $pass) or die ("No se ha podido entablar conexion con el servidor"); // Linea de conexion a el servidor 

/* cambiar el conjunto de caracteres a utf8 */
if (!$conex->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $conex->error);
    exit();
} else {
    //printf("Conjunto de caracteres actual: %s\n", $conex->character_set_name());
}


$conexBD = mysqli_select_db($conex, $bd) or die ("No se conecto con la base de datos"); // Linea de conexion a la base de datos


?>