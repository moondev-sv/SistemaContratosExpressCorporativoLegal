<?php
//Conexion al servidor, base de datos.
require_once ('../BD/conexion.php');

//Inicio de la sesion del usuario
session_start();

//Comprobar si el metodo de envio de datos al servidor es por POST
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      //Declaracion de Usuario y contraseña en el sistema 
      $Usuario = mysqli_real_escape_string($conex,$_POST['user']);
      $Contrasenia = mysqli_real_escape_string($conex,$_POST['pass']); 
      //Consulta para comparar el $Usuario y $Contrasenia en la base de datos
      $sql = "SELECT ID_Usuario FROM usuario WHERE NickUser = '$Usuario' and ContUser = '$Contrasenia'";
      $result = mysqli_query($conex,$sql) or die(mysqli_error($conex)) ;
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      //Comprueba si el resultado de la consulta de $Usuario y $Contrasenia, la tabla deveria devolver 1 fila
      //Si la respuesta es positiva entonces comprueba los datos en ComprobarTipo.php
      //Sino guarda un mensaje en una variable para mostrarla como error de inicio.
      if($count == 1) {
         $_SESSION['usuario_logeado'] = $Usuario;
         echo 'INGRESO SATISFACTORIAMENTE';
         header("location: ComprobarTipo.php");
        $ingreso = 0;
      }else {
        $ingreso = 1;
        $mensaje= 'USUARIO O CONTRASEÑA INCORRECTOS';
      }
   } 
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/CL/DEV/UI/css/bootstrap.min.css">
    <!-- iconos -->
    <script defer src="/CL/DEV/UI/js/all.js"></script>
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="/CL/DEV/UI/css/personalizado.css">
    <title>Login</title>
    <link rel="icon" href="/CL/DEV/UI/assets/login.ico">
</head>

<body>
    <div class="my-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="/CL/DEV/UI/assets/logo2.png" style="width:35%;" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-sm-3 myform-cont">
                    <div class="myform-top">
                        <h3 class="mt-2" style="font-size:28px">Sistema de Contratos Express</h3>
                        <hr style="border:1px solid white;">
                        <div class="myform-top-left">
                            <h3>Inicie sesión</h3>
                            <p>Digite su <i class="fas fa-user"></i> Usuario y <i class="fas fa-unlock-alt"></i>
                                Contraseña</p>
                        </div>
                        <div class="myform-top-right">
                            <i class="fas fa-key"></i>
                        </div>
                    </div>
                    <div class="myform-bottom">
                        <form role="form" action="login.php" method="POST" class="was-validated">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    </div>
                                    <input type="text" name="user" placeholder="Usuario" class="form-control"
                                        id="username" id="validationDefault01" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                                    </div>
                                    <input type="password" name="pass" placeholder="Contraseña" class="form-control"
                                        id="password" id="validationDefault01" required>
                                </div>
                                <?php
                                    //La variable $ingreso sirve como bandera declarada en la parte posterior
                                    //Comprueba si el inicio de sesion fue exitoso o no
                                    //En caso de que si no imprime nada y pasaa entrar al sistema.
                                      if (!isset($ingreso)) {
                                        echo "";
                                      }
                                      //En caso de que no fue exitoso pasa a mostrar un mensaje de error abajo de los botones 
                                      else {
                                        if ($ingreso==1) {
                                          echo "<div class='row mx-md-n5'>
                                          <div class='col rounded mt-4'><span class='badge badge-danger text-wrap'>".$mensaje."</span></div></div>";
                                        } 
                                      }   
                                    ?>
                                <div style="margin-top:5%;">
                                    <button type="submit" name="btnEntrar"
                                        class="btn btn-success btn-lg btn-block">Entrar</button>
                                    <button name="" type="reset"
                                        class="btn btn-danger btn-lg btn-block">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/CL/DEV/UI/js/popper.min.js"></script>
    <script src="/CL/DEV/UI/js/bootstrap.min.js"></script>
    <script src="/CL/DEV/UI/js/bootstrap.bundle.js"></script>
    <script language="javascript" src="/CL/DEV/UI/js/jquery-3.3.1.slim.min.js"></script>
</body>

</html>