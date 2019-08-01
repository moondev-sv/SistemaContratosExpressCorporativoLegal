<?php
//error_reporting(0);

//Archivo de conexión a la base de datos
include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UI\BD\conexion.php"; //temporal
require_once $_SERVER['DOCUMENT_ROOT'] . "/CL/DEV/UX/Plugins/dompdf/autoload.inc.php";
include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UI/Login/session.php";
include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UX\Funciones\includes/funciones_corporativo.php"; 
include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UX\Funciones\includes\Existen_categorias.php"; //Comprobar categorias
use Dompdf\Dompdf;
ob_start();

if (isset($_POST["btnGenerar"])) {

    //Todas las variables posibles (Lo hago por que hare todo en un solo if y necesitan estar vacias para)

    $Nombreform = "";
    $edad = "";
    $oficioform = "";
    $deptoform = "";
    $municform = "";
    $tdocumentoformletra = "";  
    $Duiformletra = "";
    $Nitformletra = "";
    $conpodertexto = "";
    $el_ellaV = "";
    $Nombreform2 = "";
    $oficioform2 = "";
    $municform2 = "";
    $deptoform2 = "";
    $tdocumentoform2letra = "";
    $Duiformletra2 = "";
    $Nitformletra2 = "";
    $el_ellaC = "";
    $Nomttarjeta = "";
    $ttarjetaletra = "";
    $ModelA = "";
    $ColoA = "";
    $anioletra = "";
    $CapaA = "";
    $ClaseA = "";
    $TraccionA = "";
    $TipoA = "";
    $DominioA = "";
    $NumMALetra = "";
    $GrabaALetra = "";
    $VinALetra = "";
    $CalidadA = "";
    $PrecioALetra = "";
    $senior = "";
    $diasrecletra = "";
    $mesrecletra = "";
    $aniorecletra = "";
    $horaRecletra = "";
    $minutorecletra = "";
    $diasrecletra = "";
    $mesrecletra = "";
/*------------------------------------------------------------------Variables Contrato -----------------*/
if ($_POST['t_persona'] == 1){
    $c_ciudad_soci= "";
    $c_depa_soci="";
    $c_nit_soci= "";
}else{
    $c_ciudad_soci= $_POST['c_ciudad_soci'];
    $c_depa_soci= $_POST['c_depa_soci'];
    $c_nit_soci= $_POST['c_nit_soci'];
    //Convertir NIT a letras
    $arreglo = str_split($c_nit_soci);
    $c_nit_soci="";
    foreach ($arreglo as $key => $value) {
        if ($value == "-") {
            $c_nit_soci .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $c_nit_soci .= " " . $res;
        }
    }
}

$c_clase_trabajo = $_POST['c_clase_trabajo'];
$c_t_servicio = $_POST['c_t_servicio']; //numeros - dias, meses
 //Convertir NIT a letras
 $arreglo = str_split($c_t_servicio);
 $c_t_servicio="";
 foreach ($arreglo as $key => $value) {
     if (!is_numeric($value)) {
         $letras .= $value;
     } else {
         $numeros .= $value;
     }
 }
 $numeros = numero_letra($numeros);
 $c_t_servicio = $numeros . $letras;





$c_apartir = $_POST['c_apartir']; //fecha
    
//sacando mes y dias y año
    $date = date_create($c_apartir);
    $c_apartirdia = date_format($date, 'j');
    $c_apartirdia = numero_letra($c_apartirdia);

    $date = date_create($c_apartir);
    $c_apartirmes = date_format($date, 'n');
    $c_apartirmes = mes($c_apartirmes);

    $date = date_create($c_apartir);
    $c_apartiranio = date_format($date, 'Y');
    $c_apartiranio = numero_letra($c_apartiranio);
//_____________________________________________________________________________________________________



$c_lugar_servicios = $_POST['c_lugar_servicios'];
$c_direccion_servicios = $_POST['c_direccion_servicios'];
$c_ciudad_prestacion = $_POST['c_ciudad_prestacion'];
$c_departamento_prestacion = $_POST['c_departamento_prestacion'];

$c_d_trabajo = $_POST['c_d_trabajo']; 
$c_h_trabajo_desde = $_POST['c_h_trabajo_desde']; //time
$c_h_trabajo_desde = numero_letra($c_h_trabajo_desde);
    


$c_h_trabajo_hasta = $_POST['c_h_trabajo_hasta']; //time
if ($_POST['sabados'] == 1){
    $c_h_trabajo_desde_sabado= "";
    $c_h_trabajo_hasta_sabado="";
   
}else{
    $c_h_trabajo_desde_sabado= $_POST['c_ciudad_soci']; //time
    $c_h_trabajo_desde_sabado = numero_letra($c_h_trabajo_desde_sabado);  

    $c_h_trabajo_hasta_sabado= $_POST['c_depa_soci']; //time
    $c_h_trabajo_hasta_sabado = numero_letra($c_h_trabajo_hasta_sabado);  
    
}

$c_salario_dolares = $_POST['c_salario_dolares']; //dolars
$c_salario_centavos = $_POST['c_salario_centavos']; //centavos
if($c_salario_centavos==0){
                
    $c_salario_dolares = (numero_letra($c_salario_dolares))." DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";
}
else if($c_salario_centavos==00){
    $c_salario_dolares = (numero_letra($c_salario_dolares))." DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";
}
else{
    
    $c_salario_centavos = numero_letra($c_salario_centavos);  
    

    $c_salario_dolares = (numero_letra($c_salario_dolares))." DOLARES CON ".(numero_letra($c_salario_centavos))." CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";
}


$c_num_cuo = $_POST['c_num_cuo']; //number
$c_num_cuo = numero_letra($c_num_cuo);  




$c_cant_dinero_d = $_POST['c_cant_dinero_d']; //dolars
$c_cant_dinero_c = $_POST['c_cant_dinero_c']; //cents
if($c_cant_dinero_c==0){
                
    $c_cant_dinero_d = (numero_letra($c_cant_dinero_d))." DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";
}
else if($c_cant_dinero_c==00){
    $c_cant_dinero_d = (numero_letra($c_cant_dinero_d))." DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";
}
else{
    $c_cant_dinero_c = numero_letra($c_cant_dinero_c);  
    

    $c_cant_dinero_d = (numero_letra($c_cant_dinero_d))." DOLARES CON ".(numero_letra($c_cant_dinero_c))." CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";
}


$c_f_pago = $_POST['c_f_pago']; 
$c_lugar_pago = $_POST['c_lugar_pago']; 

$c_materiales = $_POST['c_materiales']; 



$personas_depe = $_POST['personas_depe'];
$a=0; 
while($a<=$personas_depe)
{
    $c_nombre = $_POST['c_nombre'];
    $edad = $_POST['edad'];
    $profesion = $_POST['profesion'];
    $parentezco = $_POST['parentezco'];
    $a++;
}
foreach ($c_nombre as $key => $value) {
    echo $value."<br>";
}


//----------------------------------------Modificando valores


    //------------------------------------------------------------------------------Variables Notario

    $fechaRec = $_POST['fechaRec'];
    $horaRec = $_POST['horaRec'];
        //sacando mes y dias y año
        $date = date_create($fechaRec);
        $diasrec = date_format($date, 'j');
        $diasrecletra = numero_letra($diasrec);

        $date = date_create($fechaRec);
        $mesrec = date_format($date, 'n');
        $mesrecletra = mes($mesrec);

        $date = date_create($fechaRec);
        $aniorec = date_format($date, 'Y');
        $aniorecletra = numero_letra($aniorec);

        //formateando horas y minutos
        $date = date_create($horaRec);
        $horarec = date_format($date, 'H');
        $horaRecletra = numero_letra($horarec);

        $date = date_create($horaRec);
        $minutorec = date_format($date, 'i');
        $minutorecletra = numero_letra($minutorec);
            
       


    $NomNota = $_POST['NomNota'];
    $DomNota = $_POST['DomNota'];
     
    $deptocontrato = $_POST['deptocontrato'];
    $lugarcontrato = $_POST['lugarcontrato'];
    $NombreCont = "Poder para Venta de Vehiculo";
    $Id_UsuarioL = $_POST['Id_Usuario'];
    $GenNota = $_POST["GenNota"];
    if ($_POST["GenNota"] == 1) {
        $GenNota = "el suscrito Notario";
        $notarioGen = "Notario";
    } else {
        $GenNota = "la suscrita Notaria";
        $notarioGen = "Notaria";
    }

    if (($_POST['Generoform'] == 2 || strtolower($_POST['GeneroRecjs']) == "femenino") && ($_POST['Generoform2'] == 2 || strtolower($_POST['GeneroRecjs2']) == "femenino")) {
        $contratantes = "Las contratantes";
        $La_Lo_com = "las";
        $Los_Las_senio = "las señoras";

    } else {
        $contratantes = "Los contratantes";
        $La_Lo_com = "los";
        $Los_Las_senio = "los señores";
    }


    

    

    
    //Si busco el vendedor
    //-----------------------------Datos del VENDEDOR

    if (($_POST['CampovalidacionC1']) == 0) {

        $Conocidoform = $_POST['ConocidoRec'];
        $Generoform = $_POST['GeneroRecjs'];

        if ($Generoform == 1 || strtolower($Generoform) == "masculino") {
            $el_ellaV = "el deudor";
            $enterada ="enterado";
            $dela_deudora ="del deudor";
            $al_la_deudor ="al deudor";
            $arrendador = "arrendador";
            $senior = "el señor";
            $conjunsen = "del";
            $al_la = "al";
            $duenio = "es dueño y actual poseedor";
            $poseedor = "poseedor";
            $due = "dueño";
            $el_ellav_ = "él";
            $portador_portadora_v = "portador";
           $conjun_el="el";
            $conocido_conocida = "conocido como " . ucwords(strtolower($Conocidoform)) . ",";
            $apoderado_apoderadav = "Apoderado";
        } else if ($Generoform == 2 || strtolower($Generoform) == "femenino") {
            $enterada ="enterada";
            $el_ellaV = "la deudora";
            $dela_deudora ="de la deudora";
            $conjunsen = "de la";
            $al_la_deudor ="a la deudora";
            $arrendador = "arrendadora";
            $al_la = "a la";
            $senior = "la señora";
            $duenio = "es dueña y actual poseedora";
            $poseedor = "poseedora";
            $due = "dueña";
            $el_ellav_ = "ella";
            $conjun_el="la";
            $portador_portadora_v = "portadora";
            $conocido_conocida = "conocida como " . ucwords(strtolower($Conocidoform)) . ",";
            $apoderado_apoderadav = "Apoderada";
        }
        $Nombreform = $_POST['NombreRecjs'];
        $Duiform = $_POST['DuiRecjs'];
        $Nitform = $_POST['NitRecjs'];
        if (isset($_POST['TelClijs'])) {
            $telefonoform = $_POST['TelClijs'];
        } else {
            $telefonoform = "";
        }

        $oficioform = $_POST['OficioRecjs'];
        $fechanacform = $_POST['NacimientoRecjs'];
        $date = date_create($fechanacform);
        $edad = (date_format($date, 'Y-m-d'));
        $edad = CalculaEdad($edad);
        $edad = numero_letra($edad);

        


        if (isset($_POST['ID_Nacionalidad_FKRecjs'])) {
            $nacionalidadform = $_POST['ID_Nacionalidad_FKRecjs'];
        } else {
            $nacionalidadform = "1";
        }

        $deptoform = $_POST['ID_Depto_FKRecjs'];
        $municform = $_POST['ID_Munic_FKRecjs'];
        $tdocumentoform = $_POST['ID_DocIden_FKRec'];
        if ($tdocumentoform == 1) {
            $tdocumentoformletra = "Documento Único de Identidad";
        } else if ($tdocumentoform == 2) {
            $tdocumentoformletra = "Pasaporte";
        } else if ($tdocumentoform == 3) {
            $tdocumentoformletra = "Carnet de residente";
        } else {
            $tdocumentoformletra = $tdocumentoform;
        }
        $Duiformletra = "";
        $Nitformletra = "";
        //Convertir DUI a letras
        $arreglo = str_split($Duiform);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Duiformletra .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Duiformletra .= " " . $res;
            }
        }
        //Convertir NIT a letras
        $arreglo = str_split($Nitform);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Nitformletra .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Nitformletra .= " " . $res;
            }
        }

    } else {
        //-----------------------------------Datos del vendedor
        //Si el usuario ingreso el nuevo cliente 1 entonces se reciben las variables que añadio
        //Si ingreso los dos clientes se viene aca
        $Generoform = $_POST['Generoform'];
        $Conocidoform = $_POST['Conocidoform'];
        if ($Generoform == 1) {
            $el_ellaV = "el deudor";
            $dela_deudora ="del deudor";
            $al_la_deudor ="al deudor";
            $enterada ="enterado";
            $senior = "el señor";
            $conjunsen = "del";
            $al_la = "al";
            $conjun_el="el";
            $duenio = "es dueño y actual poseedor";
            $due = "dueño";
            $poseedor = "poseedor";
            $el_ellav_ = "él";
            $conocido_conocida = "conocido como  " . ucwords(strtolower($Conocidoform)) . ",";
            $portador_portadora_v = "portador";
            $apoderado_apoderadav = "Apoderado";
            $arrendador = "arrendador";
        } else {
            $el_ellaV = "la deudora";
            $dela_deudora ="del deudora";
            $senior = "la señora";
            $enterada ="enterada";
            $al_la_deudor ="a la deudora";
            $al_la = "a la";
            $conjunsen = "de la";
            $duenio = "es dueña y actual poseedora";
            $due = "dueña";
            $conjun_el="la";
            $poseedor = "poseedora";
            $arrendador = "arrendadora";
            $el_ellav_ = "ella";
            $portador_portadora_v = "portadora";
            $conocido_conocida = "conocida como  " . ucwords(strtolower($Conocidoform)) . ",";
            $apoderado_apoderadav = "Apoderada";
        }
        $Nombreform = $_POST['Nombreform'];
        $Duiform = $_POST['Duiform'];
        $Nitform = $_POST['Nitform'];
        if (isset($_POST['telefonoform'])) {
            $telefonoform = $_POST['telefonoform'];
        } else {
            $telefonoform = "";
        }
        $oficioform = $_POST['oficioform'];
        $fechanacform = $_POST['fechanacform'];
        $date = date_create($fechanacform);
        $edad = (date_format($date, 'Y-m-d'));

        $edad = CalculaEdad($edad);

        $edad = numero_letra($edad);
        if (isset($_POST['nacionalidadform'])) {
            $nacionalidadform = $_POST['nacionalidadform'];
        } else {
            $nacionalidadform = "1";
        }

        $deptoform = $_POST['deptoform'];
        $municform = $_POST['municform'];
        $tdocumentoform = $_POST['tdocumentoform'];
        if ($tdocumentoform == 1) {
            $tdocumentoformletra = "Documento Único de Identidad";
        } else if ($tdocumentoform == 2) {
            $tdocumentoformletra = "Pasaporte";
        } else if ($tdocumentoform == 3) {
            $tdocumentoformletra = "Carnet de residente";
        }
        $Duiformletra = "";
        $Nitformletra = "";
        //Convertir DUI a letras
        $arreglo = str_split($Duiform);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Duiformletra .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Duiformletra .= " " . $res;
            }
        }
        //Convertir NIT a letras
        $arreglo = str_split($Nitform);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Nitformletra .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Nitformletra .= " " . $res;
            }
        }
    }

    if (($_POST['CampovalidacionC2']) == 0) {
        //-----------------------------Datos del Comprador
        //Si el usuario ingreso el nuevo cliente 2 entonces se reciben las variables que añadio
        $Generoform2 = $_POST['GeneroRecjs2'];
        $Conocidoform2 = $_POST['ConocidoRec2'];

        if ($Generoform2 == 1 || strtolower($Generoform2) == "masculino") {
            $el_ellaC = "EL ARRENDATARIO";
            $senior2 = "del señor";
            $al_la2 = "al";
            $conjunsen2 = "del";
            $due = "dueño";
            $poseedor = "poseedor";
            $arrendatario = "arrendatario";
            $el_ellac_ = "él";
            $portador_portadora_c = "portador";
            $conocido_conocida2 = "conocido como  " . ucwords(strtolower($Conocidoform2)) . ",";

        } else if ($Generoform2 == 2 || strtolower($Generoform2) == "femenino") {
            $el_ellaC = "LA ARRENDATARIA";
            $senior2 = "de la señora";
            $al_la2 = "a la";
            $due = "dueña";
            $conjunsen2 = "de la";
            $poseedor = "poseedora";
            $arrendatario = "arrendataria";
            $el_ellac_ = "ella";
            $portador_portadora_c = "portadora";
            $conocido_conocida2 = "conocida como  " . ucwords(strtolower($Conocidoform2)) . ",";

        }
        $Nombreform2 = $_POST['NombreRecjs2'];
        $Duiform2 = $_POST['DuiRecjs2'];
        $Nitform2 = $_POST['NitRecjs2'];
        $telefonoform2 = $_POST['TelClijs2'];
        $oficioform2 = $_POST['OficioRecjs2'];
        $fechanacform2 = $_POST['NacimientoRecjs2'];

        $date = date_create($fechanacform2);
        $edad2 = (date_format($date, 'Y-m-d'));

        $edad2 = CalculaEdad($edad2);
        $edad2 = numero_letra($edad2);
        if (isset($_POST['ID_Nacionalidad_FKRecjs2'])) {
            $nacionalidadform2 = $_POST['ID_Nacionalidad_FKRecjs2'];
        } else {
            $nacionalidadform2 = "1";
        }

        $deptoform2 = $_POST['ID_Depto_FKRecjs2'];
        $municform2 = $_POST['ID_Munic_FKRecjs2'];
        $tdocumentoform2 = $_POST['ID_DocIden_FKRecjs2'];
        if ($tdocumentoform2 == 1) {
            $tdocumentoform2letra = "Documento Único de Identidad";
        } else if ($tdocumentoform2 == 2) {
            $tdocumentoform2letra = "Pasaporte";
        } else if ($tdocumentoform2 == 3) {
            $tdocumentoform2letra = "Carnet de residente";
        } else {
            $tdocumentoform2letra = $tdocumentoform2;
        }
        $Duiformletra2 = "";
        $Nitformletra2 = "";

        //Convertir DUI a letras
        $arreglo = str_split($Duiform2);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Duiformletra2 .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Duiformletra2 .= " " . $res;
            }
        }
        //Convertir NIT a letras
        $arreglo = str_split($Nitform2);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Nitformletra2 .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Nitformletra2 .= " " . $res;
            }
        }
    } else {

        //-----------------------------Datos del Comprador
        //Si el usuario ingreso el nuevo cliente 2 entonces se reciben las variables que añadio
        $Generoform2 = $_POST['Generoform2'];
        $Conocidoform2 = $_POST['Conocidoform2'];
        if ($Generoform2 == 1 || strtolower($Generoform2) == "masculino") {
            $el_ellaC = "EL ARRENDATARIO";
            $senior2 = "del señor";
            $al_la2 = "al";
            $conjunsen2 = "del";
            $due = "dueño";
            $poseedor = "poseedor";
            $arrendatario = "arrendatario";
            $el_ellac_ = "él";
            $portador_portadora_c = "portador";
            $conocido_conocida2 = "conocido como  " . ucwords(strtolower($Conocidoform2)) . ",";

        } else if ($Generoform2 == 2 || strtolower($Generoform2) == "femenino") {
            $el_ellaC = "LA ARRENDATARIA";
            $senior2 = "de la señora";
            $al_la2 = "a la";
            $due = "dueña";
            $conjunsen2 = "de la";
            $poseedor = "poseedora";
            $arrendatario = "arrendataria";
            $el_ellac_ = "ella";
            $portador_portadora_c = "portadora";
            $conocido_conocida2 = "conocida como  " . ucwords(strtolower($Conocidoform2)) . ",";
        }
        $Nombreform2 = $_POST['Nombreform2'];
        $Duiform2 = $_POST['Duiform2'];
        $Nitform2 = $_POST['Nitform2'];
        $telefonoform2 = $_POST['telefonoform2'];
        $oficioform2 = $_POST['oficioform2'];
        $fechanacform2 = $_POST['fechanacform2'];
        $date = date_create($fechanacform2);
        $edad2 = (date_format($date, 'Y-m-d'));
        $edad2 = CalculaEdad($edad2);
        $edad2 = numero_letra($edad2);

        if (isset($_POST['nacionalidadform2'])) {
            $nacionalidadform2 = $_POST['nacionalidadform2'];
        } else {
            $nacionalidadform2 = "1";
        }

        $deptoform2 = $_POST['deptoform2'];
        $municform2 = $_POST['municform2'];
        $tdocumentoform2 = $_POST['tdocumentoform2'];
        if ($tdocumentoform2 == 1) {


             //Convertir DUI a letras
        $arreglo = str_split($Duiform2);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Duiformletra2 .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Duiformletra2 .= " " . $res;
            }
        }
            $tdocumentoform2letra = "Documento Único de Identidad $Duiformletra2";
        } else if ($tdocumentoform2 == 2) {
            $tdocumentoform2letra = "Pasaporte";
        } else if ($tdocumentoform2 == 3) {
            $dia_carnet_migratorio = $_POST['dia_carnet_migratorio'];
     //sacando mes y dias y año
     $date = date_create($dia_carnet_migratorio);
     $dia_carnet_migratoriodia = date_format($date, 'j');
     $dia_carnet_migratoriodia = numero_letra($dia_carnet_migratoriodia);

     $date = date_create($dia_carnet_migratorio);
     $dia_carnet_migratoriomes = date_format($date, 'n');
     $dia_carnet_migratoriomes = mes($dia_carnet_migratoriomes);

     $date = date_create($dia_carnet_migratorio);
     $dia_carnet_migratorioanio = date_format($date, 'Y');
     $dia_carnet_migratorioanio = numero_letra($dia_carnet_migratorioanio);
            


     
     $dia_vence_carnet_migratorio = $_POST['dia_vence_carnet_migratorio'];
     //sacando mes y dias y año
     $date = date_create($dia_vence_carnet_migratorio);
     $dia_vence_carnet_migratoriodia = date_format($date, 'j');
     $dia_vence_carnet_migratoriodia = numero_letra($dia_vence_carnet_migratoriodia);

     $date = date_create($dia_vence_carnet_migratorio);
     $dia_vence_carnet_migratoriomes = date_format($date, 'n');
     $dia_vence_carnet_migratoriomes = mes($dia_vence_carnet_migratoriomes);

     $date = date_create($dia_vence_carnet_migratorio);
     $dia_vence_carnet_migratorioanio = date_format($date, 'Y');
     $dia_vence_carnet_migratorioanio = numero_letra($dia_vence_carnet_migratorioanio);


             //Convertir DUI a letras
        $arreglo = str_split($Duiform2);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Duiformletra2 .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Duiformletra2 .= " " . $res;
            }
        }
            $tdocumentoform2letra = "Carnet de residente numero $Duiformletra2, expedido en la Dirección General de Migración y Extranjería, de la ciudad de ".$_POST['Lugar_carnet_migratorio'].", el día $dia_carnet_migratoriodia de $dia_carnet_migratoriomes de $dia_carnet_migratorioanio, con vencimiento el día $dia_vence_carnet_migratoriodia de $dia_vence_carnet_migratoriomes de $dia_vence_carnet_migratorioanio";
        }
        $Duiformletra2 = "";
        $Nitformletra2 = "";

       
        //Convertir NIT a letras
        $arreglo = str_split($Nitform2);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Nitformletra2 .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Nitformletra2 .= " " . $res;
            }
        }

    }

    if ((str_word_count($conocido_conocida, 0)) <= 2) //Si el campo conocidos no ha ingresado nada se coloca un espacio vacio y por ende no se imprime en el contrato
    {
        $conocido_conocida = "";
    }

    if ((str_word_count($conocido_conocida2, 0)) <= 2) //Si el campo conocidos no ha ingresado nada se coloca un espacio vacio y por ende no se imprime en el contrato
    {
        $conocido_conocida2 = "";
    }

    $contenido = "<html>";
    $contenido .= "<head>
            <style>
            html {
                margin: 15mm 25mm 25mm 25mm;
                }
                body {
                margin: 15mm 5mm -5mm 5mm;
                text-align:justify;
                line-height: 200%;
                font-size:4mm;family-font:CENTURY;
                }
                hr {
                    page-break-after: always;
                    border: 0;
                    margin: 0;
                    padding: 0;
                    }
            </style>";
    $contenido .= "</head>";
    $contenido .= "<body>";
   /**$contenido .= "<div><p>

    


En la ciudad de $lugarcontrato departamento de $deptocontrato Republica de El Salvador,  a las $horaRecletra horas del $diasrecletra de $mesrecletra del $aniorecletra.- Ante mi $NomNota, $notarioGen, del domicilio de $DomNota, $senior $Nombreform, de $edad años de edad, $oficioform, del domicilio de $municform, departamento de $deptoform, a quien no conozco pero identifico por medio de su Documento Único de Identidad número $Duiformletra y con Numero de Identificación Tributario $Nitformletra, y ME DICE: I) Que tal y como lo hace constar la Certificación de partida de nacimiento, inscrita al numero $p_nacimiento_migratorio, folio $folio_migratorio, del tomo $tomo_migratorio, que la Alcaldía Municipal de la ciudad de $alcaldia_migratorio, llevo en el año $anio_partida_migratorio, certificación que ha sido extendida por $extendida_migratorio, $cargo_migratorio del Estado Familiar, el día $fecha_exten_migratoriodia de $fecha_exten_migratoriomes del $fecha_exten_migratorioanio, en la cual consta que $_el_ella_menor menor $Nombre_hijo_migratorio, nació en la ciudad de $nacido_en_migratorio, a las $hora_nac_migratoriohora horas y $hora_nac_migratoriomin minutos del día $fechanacform_hijodia de $fechanacform_hijomes de $fechanacform_hijoanio, y que es $_el_la_hijo $conjunsen compareciente; y que $conjun_el compareciente es $parentesco_migratorio de dicho menor con Pasaporte $tpasaporte_migratorio, numero del pasaporte Salvadoreño $numero_pasapor_migratorio, expedido por las autoridades de la Republica de El Salvador, el día veintidós de Marzo del dos mil diecinueve, con la fecha de vencimiento el día $exp_pasa_migratoriodia de $exp_pasa_migratoriomes del $exp_pasa_migratorioanio.- ii) Que $conjun_el compareciente ejerce la autoridad parental sobre $_el_ella_menor menor antes mencionado conjuntamente con $Nombreform2.- iii) Que por medio de la presente Acta Notarial, concede AUTORIZACION, para que su $hijo $Nombre_hijo_migratorio, de generales antes expresadas y con Pasaporte relacionado, puedan salir del país por cualquier lugar fronterizo, ya sea terrestre o aéreo, acompañado por su $Parentesco2_migratorio, $Nombreform2, de $edad2 años de edad $oficioform2 de nacionalidad $nacionalidadform2, del domicilio de la ciudad de $municform2, portadora de su $tdocumentoform2letra; con destino hacia $lugar_destino_migratorio, por un periodo de $tiempo_estimado_migratorio, a partir del día $fecha_viaje_migratoriodia de $fecha_viaje_migratoriomes de $fecha_viaje_migratorioanio, todo de acuerdo a lo regulado en el Articulo Cuarenta y Cuatro de Ley de Protección Integral de la Niñez y la Adolescencia.- Así se expreso el compareciente a quien explique los efectos legales de la presente Acta Notarial. Que consta de un folio útil; y leído que le hube íntegramente todo lo escrito en un solo acto, sin interrupción, manifiesta su conformidad, ratifica su contenido y firmamos. - DE TODO DOY FE. -



        </p>

<div style='width:100%%;margin-top:5%;'>
<span style='float:left;'>
 F:______________________________

 </span>
 <span style='float:left;margin-left:13%;'>
 F:______________________________

 </span><br>
</div>
<div style='width:100%;margin-top:-1px;'>
<span style='width:55%;float:left;font-size:12px;'>
 " . strtoUpper($Nombreform) . "
 </span>
 <span style='width:35%;font-size:12px;'>
 " . strtoUpper($Nombreform2) . "
 </span>
</div>
</div>
"; */

   
    $contenido .= "
            </div></body>";
    $contenido .= "</html>";

  //  $iddepto1 = departamentoComprobar($deptoform, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso
    //$idmunic1 = municipioComprobar($municform, $conex, $iddepto1); //Comprobar si existe regresa id sino devuelve el id del munic de ingreso
    //$iddepto2 = departamentoComprobar($deptoform2, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso
    //$idmunic2 = municipioComprobar($municform, $conex, $iddepto2); //Comprobar si existe regresa id sino devuelve el id del munic de ingreso
    //$ID_Cliente1 = ingresarClientes($Duiform, $Nombreform, $Nitform, $telefonoform, $oficioform, $fechanacform, $iddepto1, $idmunic1, $tdocumentoform, $nacionalidadform, $Generoform, $conex); //Ingresar o comprobar el cliente1

    //$ID_Cliente2 = ingresarClientes($Duiform2, $Nombreform2, $Nitform2, $telefonoform2, $oficioform2, $fechanacform2, $iddepto2, $idmunic2, $tdocumentoform2, $nacionalidadform2, $Generoform2, $conex); //Ingresar o comprobar el cliente2

    //$lugarcontrato = departamentoComprobar($lugarcontrato, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso

    //$tipo = 3;//Mutuo
    // $ID_Cliente1 = 0;$ID_Cliente2=0;
    //$respuesta = ingresarContratos($NombreCont, $fechaRec, $horaRec, $Id_UsuarioL,$tipo,$ID_Cliente1,$ID_Cliente2, $conex);  
    
    $filename = $_SERVER['DOCUMENT_ROOT'] . "/CL/DOCS/CONTRATOS/ContratoMutuo/$respuesta.pdf";
  //  actualizarContratos($respuesta, $filename, $conex);
    echo $contenido;
    //Instanciando y usando la clase de Dompdf
    $dompdf = new Dompdf();
    $dompdf->loadHtml(ob_get_clean());
    // Opcional, el uso del tipo de pagina y la alineacion
    $dompdf->setPaper('letter', 'portrait');
    // Renderizar el html de $contenido a PDF
    $dompdf->render();
    $nombre_archivo = 'contratoPPVV.pdf';
    $pdf = $dompdf->output(); //Obtiene el pdf
    $f;
    $l;
    if (headers_sent($f, $l)) { //Si encontro algun espacio en blanco no va a imprimir el pdf, ya que tiene que estar vacio el php a la hora de incluir el plugin
        echo $f, '<br/>', $l, '<br/>';
        die("Ahora detecta una linea en blanco  $f, '<br/>', $l, '<br/>");
    }
    file_put_contents($filename, $pdf);
    // Sacar el pdf generado al navegador para que pueda visualizarlo
    $dompdf->stream($nombre_archivo, array("Attachment" => 0));
} else if (isset($_POST["portada"])) {
    if (($_POST['CampovalidacionC2']) == 0) {
        $Nombreform2 = $_POST['NombreRecjs2'];
        $Nombreform2=str_replace('ñ', '&ntilde;', $Nombreform2);
        $Nombreform2=str_replace('Ñ', '&Ntilde;', $Nombreform2);
    }
    else{
        $Nombreform2 = $_POST['Nombreform2'];
        $Nombreform2=str_replace('ñ', '&ntilde;', $Nombreform2);
        $Nombreform2=str_replace('Ñ', '&Ntilde;', $Nombreform2);
        
    }
    if (($_POST['CampovalidacionC1']) == 0) {
        $Nombreform = $_POST['NombreRecjs'];
        $Nombreform=str_replace('ñ', '&ntilde;', $Nombreform);
        $Nombreform=str_replace('Ñ', '&Ntilde;', $Nombreform);
    }
    else{
        $Nombreform = $_POST['Nombreform'];
        $Nombreform=str_replace('ñ', '&ntilde;', $Nombreform);
        $Nombreform=str_replace('Ñ', '&Ntilde;', $Nombreform);
    }
    $NomNota = $_POST['NomNota'];

    $contenido .= "
    <html>
    <head>
            <style>
            html {
                margin: 0cm;
                }
                body {
                margin: 0mm 0mm 0mm 0mm;
                text-align:justify;
                line-height: 200%;
                font-size:4mm;
                family-font:CENTURY;
                }
                hr {
                    page-break-after: always;
                    border: 0;
                    margin: 0;
                    padding: 0;
                    }
                    #watermark {
                        position:fixed;
                        
                      
                        /** The width and height may change 
                            according to the dimensions of your letterhead
                        **/
                        width:    21.6cm;
                        height:   28cm;
        
                        /** Your watermark should be behind every content**/
                        z-index:  -1000;
                    }
                    span{
                        font-size:30px;font-family:sans-serif;
                        font-weight:500;
                    }
                    .notario{
                        font-size:21px;font-family:sans-serif;
                    }
            </style>
            </head>
                <body>
                    <div id='watermark'>
                        <img src='logo1.png' height='100%' width='100%'>
                    </div>
                    <div style='margin-top:31%;margin-left:19%;width:100%;text-align:center'>
                        <span style=''>Contrato de Trabajo</span>
                    </div>
                    <div style='margin-top:11%;margin-left:19%;width:100%;text-align:center'>
                        <span style=''>".ucwords(strtolower(utf8_decode($Nombreform)))."</span>
                    </div>
                    <div style='margin-top:12%;margin-left:19%;width:100%;text-align:center'>
                        <span style=''>".ucwords(strtolower(utf8_decode($Nombreform2)))."</span>
                    </div>
                    <div style='margin-top:19%;margin-left:19%;width:100%;text-align:center'>
                        <span class='notario'>".ucwords(strtolower($NomNota))."</span>
                    </div>
                </body>
            </html>
            ";
            echo $contenido;

            //Instanciando y usando la clase de Dompdf
            $dompdf = new Dompdf();
            $dompdf->loadHtml(ob_get_clean());
         
            // Opcional, el uso del tipo de pagina y la alineacion
            $dompdf->setPaper('letter', 'portrait');
            // Renderizar el html de $contenido a PDF
            $dompdf->render();
            $nombre_archivo = 'contratoPPVV.pdf';
            $pdf = $dompdf->output(); //Obtiene el pdf
            
            $f;
            $l;
            if (headers_sent($f, $l)) { //Si encontro algun espacio en blanco no va a imprimir el pdf, ya que tiene que estar vacio el php a la hora de incluir el plugin
                echo $f, '<br/>', $l, '<br/>';
                die("Ahora detecta una linea en blanco  $f, '<br/>', $l, '<br/>");
            }
        
            file_put_contents($filename, $pdf);
            // Sacar el pdf generado al navegador para que pueda visualizarlo
            $dompdf->stream($nombre_archivo, array("Attachment" => 0));

} else {
    $respuesta = "No se ha ingresado el pdf";
    echo $respuesta;
}
?>