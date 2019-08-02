<?php
error_reporting(0);
header('Content-Type: text/html; charset=UTF-8');
ini_set("default_charset", "UTF-8");
mb_internal_encoding("UTF-8");
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
/*------------------------------------------------------------------Variables Nuevo Contrato -----------------*/
//Datos del menor
$genero_migratorio = $_POST['genero_migratorio'];
$nombre_menor_migratorio = $_POST['nombre_menor_migratorio'];
$fecha_menor_migratorio = $_POST['fecha_menor_migratorio']; //Fecha
$date = date_create($fecha_menor_migratorio);
$edad_menor = (date_format($date, 'Y-m-d'));
$edad_menor = (CalculaEdad($edad_menor));
$edad_menor = numero_letra($edad_menor);


$date = date_create($fecha_menor_migratorio);
$fecha_menor_migratoriodia = date_format($date, 'j');
$fecha_menor_migratoriodia = numero_letra($fecha_menor_migratoriodia);
$fecha_menor_migratoriomes = date_format($date, 'n');
$fecha_menor_migratoriomes = mes($fecha_menor_migratoriomes);
$fecha_menor_migratorioanio = date_format($date, 'Y');
$fecha_menor_migratorioanio = numero_letra($fecha_menor_migratorioanio);


$hora_menor_migratorio = $_POST['hora_menor_migratorio']; //Hora
$date = date_create($hora_menor_migratorio);
$hora_menor_migratoriohora = date_format($date, 'H');
$hora_menor_migratoriohora = numero_letra($hora_menor_migratoriohora+1);
$hora_menor_migratoriomin = date_format($date, 'i');
$hora_menor_migratoriomin = numero_letra($hora_menor_migratoriomin);


$direccion_menor_migratorio = $_POST['direccion_menor_migratorio'];
$municipio_menor_migratorio = $_POST['municipio_menor_migratorio'];
$depto_menor_migratorio = $_POST['depto_menor_migratorio'];
$lugar_nac_migratorio = $_POST['lugar_nac_migratorio'];
$ciudad_menor_migratorio = $_POST['ciudad_menor_migratorio'];
//Datos de la certificacion de partida de nacimiento
$p_nacimiento_migratorio = $_POST['p_nacimiento_migratorio'];
$p_nacimiento_migratorio = numero_letra($p_nacimiento_migratorio);


$folio_migratorio = $_POST['folio_migratorio'];
$folio_migratorio = numero_letra($folio_migratorio);


$tomo_migratorio = $_POST['tomo_migratorio'];

if(is_numeric($tomo_migratorio)){
    $tomo_migratorio = numero_letra($tomo_migratorio);
}
else{
    $tomo_migratorio = $tomo_migratorio;
}


$libro_migratorio = $_POST['libro_migratorio'];

if(is_numeric($libro_migratorio)){
    $libro_migratorio = numero_letra($libro_migratorio);
}
else{
    $libro_migratorio = $libro_migratorio;
}





$alcaldia_migratorio = $_POST['alcaldia_migratorio'];
$anio_partida_migratorio = $_POST['anio_partida_migratorio']; //Fecha
$anio_partida_migratorioanio = numero_letra($anio_partida_migratorio);


$cargo_migratorio = $_POST['cargo_migratorio'];
$fecha_exten_migratorio = $_POST['fecha_exten_migratorio']; //Fecha
//Pasaporte del menor
$t_pasaporte_migratorio = $_POST['t_pasaporte_migratorio'];



$numero_pasaporte_migratorio = $_POST['numero_pasaporte_migratorio'];//Convertir numero pasaporte a letras
$arreglo = str_split($numero_pasaporte_migratorio);
$numero_pasaporte_migratorio="";
foreach ($arreglo as $key => $value) {
    if ($value == "-") {
        $numero_pasaporte_migratorio .= " gui&oacute;n";
    } else if(is_numeric($value)) {
        $res = numero_letra($value);
        $numero_pasaporte_migratorio .= " " . $res;
    }else {
        $numero_pasaporte_migratorio .= " " . $value;
    }
}



$expedido_por_pasaporte_migratorio = $_POST['expedido_por_pasaporte_migratorio'];



$fecha_exp_pasaporte_migratorio = $_POST['fecha_exp_pasaporte_migratorio'];
$date = date_create($fecha_exp_pasaporte_migratorio);
$fecha_exp_pasaporte_migratoriodia = date_format($date, 'j');
$fecha_exp_pasaporte_migratoriodia = numero_letra($fecha_exp_pasaporte_migratoriodia);
$fecha_exp_pasaporte_migratoriomes = date_format($date, 'n');
$fecha_exp_pasaporte_migratoriomes = mes($fecha_exp_pasaporte_migratoriomes);
$fecha_exp_pasaporte_migratorioanio = date_format($date, 'Y');
$fecha_exp_pasaporte_migratorioanio = numero_letra($fecha_exp_pasaporte_migratorioanio);



$fecha_venci_pasaporte_migratorio = $_POST['fecha_venci_pasaporte_migratorio'];
$date = date_create($fecha_venci_pasaporte_migratorio);
$fecha_venci_pasaporte_migratorioodia = date_format($date, 'j');
$fecha_venci_pasaporte_migratorioodia = numero_letra($fecha_venci_pasaporte_migratorioodia);
$fecha_venci_pasaporte_migratoriomes = date_format($date, 'n');
$fecha_venci_pasaporte_migratoriomes = mes($fecha_venci_pasaporte_migratoriomes);
$fecha_venci_pasaporte_migratorioanio = date_format($date, 'Y');
$fecha_venci_pasaporte_migratorioanio = numero_letra($fecha_venci_pasaporte_migratorioanio);



//Destino
$lugar_destino_migratorio = $_POST['lugar_destino_migratorio'];
$tiempo_estimado_migratorio = $_POST['tiempo_estimado_migratorio'];
$arreglo = str_split($tiempo_estimado_migratorio);
$tiempo_estimado_migratorio="";
foreach ($arreglo as $key => $value) {
    if (!is_numeric($value)) {
        $tiempo_estimado_migratorio_letra .= $value;
    } else if(is_numeric($value)) {
        $res = numero_letra($value);
        $tiempo_estimado_migratorio_numero .= $res;
    }
}
$tiempo_estimado_migratorio = $tiempo_estimado_migratorio_numero + $tiempo_estimado_migratorio_letra;

$fecha_viaje_migratorio = $_POST['fecha_viaje_migratorio'];
$date = date_create($fecha_viaje_migratorio);
$fecha_viaje_migratoriodia = date_format($date, 'j');
$fecha_viaje_migratoriodia = numero_letra($fecha_viaje_migratoriodia);
$fecha_viaje_migratoriomes = date_format($date, 'n');
$fecha_viaje_migratoriomes = mes($fecha_viaje_migratoriomes);
$fecha_viaje_migratorioanio = date_format($date, 'Y');
$fecha_viaje_migratorioanio = numero_letra($fecha_viaje_migratorioanio);




$genero_migratorio = $_POST['genero_migratorio'];
if ($genero_migratorio==1) {
    $_el_ella_menor ="el";
    $el_la ="el";
    $_el_la_hijo ="el hijo";
    $hijo="hijo";
    $ninio="el niño";
    $del_ninio="del niño";
    $dicho="dicho";
    $portador="portador";
    $menor ="niño";
}
else if ($genero_migratorio==2){
    $_el_ella_menor ="ella";
    $_el_la_hijo ="la hija";
    $el_la ="la";
    $hijo="hija";
    $ninio="la niña";
    $del_ninio="de la niña";
    $dicho="dicha";
    $portador="portadora";
    $menor ="niña";
}
else if ($genero_migratorio==3){
    $_el_ella_menor ="el";
    $el_la ="el";
    $_el_la_hijo ="el hijo";
    $hijo="hijo";
    $ninio="el adolescente";
    $del_ninio="del adolescente";
    $dicho="dicho";
    $portador="portador";
    $menor ="adolescente";
}
else if ($genero_migratorio==4){
    $_el_ella_menor ="ella";
    $_el_la_hijo ="la hija";
    $el_la ="la";
    $hijo="hija";
    $ninio="la adolescente";
    $del_ninio="de la adolescente";
    $dicho="dicha";
    $portador="portadora";
    $menor ="adolescente";

}
/*------------------------------------------------------------------Variables Contrato -----------------*/

$parentesco_migratorio = $_POST['parentesco_migratorio'];
$tpasaporte_migratorio = $_POST['tpasaporte_migratorio'];
$numero_pasapor_migratorio = $_POST['numero_pasapor_migratorio'];
$Parentesco2_migratorio=$_POST['Parentesco2_migratorio'];
//Convertir numero pasaporte a letras
$arreglo = str_split($numero_pasapor_migratorio);
$numero_pasapor_migratorio="";
foreach ($arreglo as $key => $value) {
    if ($value == "-") {
        $numero_pasapor_migratorio .= " gui&oacute;n";
    } else if(is_numeric($value)) {
        $res = numero_letra($value);
        $numero_pasapor_migratorio .= " " . $res;
    }else {
        $numero_pasapor_migratorio .= " " . $value;
    }
}
$exp_pasa_migratorio = $_POST['exp_pasa_migratorio'];
$date = date_create($exp_pasa_migratorio);
$exp_pasa_migratoriodia = date_format($date, 'j');
$exp_pasa_migratoriodia = numero_letra($exp_pasa_migratoriodia);

$date = date_create($exp_pasa_migratorio);
$exp_pasa_migratoriomes = date_format($date, 'n');
$exp_pasa_migratoriomes = mes($exp_pasa_migratoriomes);

$date = date_create($exp_pasa_migratorio);
$exp_pasa_migratorioanio = date_format($date, 'Y');
$exp_pasa_migratorioanio = numero_letra($exp_pasa_migratorioanio);

$vence_pasa_migratorio = $_POST['vence_pasa_migratorio'];
$date = date_create($vence_pasa_migratorio);
$vence_pasa_migratoriodia = date_format($date, 'j');
$vence_pasa_migratoriodia = numero_letra($vence_pasa_migratoriodia);

$date = date_create($vence_pasa_migratorio);
$vence_pasa_migratoriomes = date_format($date, 'n');
$vence_pasa_migratoriomes = mes($vence_pasa_migratoriomes);

$date = date_create($vence_pasa_migratorio);
$vence_pasa_migratorioanio = date_format($date, 'Y');
$vence_pasa_migratorioanio = numero_letra($vence_pasa_migratorioanio);

$p_nacimiento_migratorio = $_POST['p_nacimiento_migratorio'];
$p_nacimiento_migratorio = numero_letra($p_nacimiento_migratorio);

$folio_migratorio = $_POST['folio_migratorio'];
$folio_migratorio = numero_letra($folio_migratorio);

$tomo_migratorio = $_POST['tomo_migratorio'];
//$tomo_migratorio = numero_letra($tomo_migratorio);

//$alcaldia_migratorio = $_POST['alcaldia_migratorio'];
//$anio_partida_migratorio = $_POST['anio_partida_migratorio'];
//$date = date_create($anio_partida_migratorio);
  // $anio_partida_migratorio = date_format($date, 'Y');
   //$anio_partida_migratorio = numero_letra($anio_partida_migratorio);

$extendida_migratorio = $_POST['extendida_migratorio'];
$cargo_migratorio = $_POST['cargo_migratorio'];
$fecha_exten_migratorio = $_POST['fecha_exten_migratorio'];
$date = date_create($fecha_exten_migratorio);
   $fecha_exten_migratoriodia = date_format($date, 'j');
   $fecha_exten_migratoriodia = numero_letra($fecha_exten_migratoriodia);

   $date = date_create($fecha_exten_migratorio);
   $fecha_exten_migratoriomes = date_format($date, 'n');
   $fecha_exten_migratoriomes = mes($fecha_exten_migratoriomes);

   $date = date_create($fecha_exten_migratorio);
   $fecha_exten_migratorioanio = date_format($date, 'Y');
   $fecha_exten_migratorioanio = numero_letra($fecha_exten_migratorioanio);

$Genero_hijo_migratorio = $_POST['Genero_hijo_migratorio'];

/*if ($Genero_hijo_migratorio==1) {
    $_el_ella_menor ="el";
    $_el_la_hijo ="el hijo";
    $hijo="hijo";
    $ninio="el niño";
    $dicho="dicho";
}
else{
    $_el_ella_menor ="ella";
    $_el_la_hijo ="la hija";
    $hijo="hija";
    $ninio="la niña";
    $dicho="dicha";
}*/



$Nombre_hijo_migratorio = $_POST['Nombre_hijo_migratorio'];
$nacido_en_migratorio = $_POST['nacido_en_migratorio'];
$fechanacform_hijo = $_POST['fechanacform_hijo'];
$date = date_create($fechanacform_hijo);
$fechanacform_hijodia = date_format($date, 'j');
$fechanacform_hijodia = numero_letra($fechanacform_hijodia) ;
    
 
   $date = date_create($fechanacform_hijo);
   $fechanacform_hijomes = date_format($date, 'n');
   $fechanacform_hijomes = mes($fechanacform_hijomes);

   $date = date_create($fechanacform_hijo);
   $fechanacform_hijoanio = date_format($date, 'Y');
   $fechanacform_hijoanio = numero_letra($fechanacform_hijoanio);

$hora_nac_migratorio = $_POST['hora_nac_migratorio'];
 //formateando horas y minutos
 $date = date_create($hora_nac_migratorio);
 $hora_nac_migratoriohora = date_format($date, 'H');
 $hora_nac_migratoriohora = numero_letra($hora_nac_migratoriohora);

 $date = date_create($hora_nac_migratorio);
 $hora_nac_migratoriomin = date_format($date, 'i');
 $hora_nac_migratoriomin = numero_letra($hora_nac_migratoriomin);
 

$lugar_destino_migratorio = $_POST['lugar_destino_migratorio'];
$tiempo_estimado_migratorio = $_POST['tiempo_estimado_migratorio'];
  //Convertir tiempo estimado a letras
  
  $arreglo = str_split($tiempo_estimado_migratorio);
  $tiempo_estimado_migratorio="";
  $res="";
  foreach ($arreglo as $key => $value) {
      if (!is_numeric($value)) {
          $tiempo_estimado_migratorio_letra .= $value;
      } else if(is_numeric($value)) {
          $res .= $value;
      }
  }
  $tiempo_estimado_migratorio = numero_letra($res);
  $tiempo_estimado_migratorio;
  $tiempo_estimado_migratorio = ($tiempo_estimado_migratorio.$tiempo_estimado_migratorio_letra);


$fecha_viaje_migratorio = $_POST['fecha_viaje_migratorio'];

//sacando mes y dias y año
$date = date_create($fecha_viaje_migratorio);
$fecha_viaje_migratoriodia = date_format($date, 'j');
$fecha_viaje_migratoriodia = numero_letra($fecha_viaje_migratoriodia);

$date = date_create($fecha_viaje_migratorio);
$fecha_viaje_migratoriomes = date_format($date, 'n');
$fecha_viaje_migratoriomes = mes($fecha_viaje_migratoriomes);

$date = date_create($fecha_viaje_migratorio);
$fecha_viaje_migratorioanio = date_format($date, 'Y');
$fecha_viaje_migratorioanio = numero_letra($fecha_viaje_migratorioanio);
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
    $NombreCont = "Permiso migratorio: P/Viajar con 1 de los padres";
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


    

    

    
    //Si busco el compareciente
    //-----------------------------Datos del primero compareciente

    if (($_POST['CampovalidacionC1']) == 0) {
        
        $Direccionform = $_POST['DireccionRec'];
        $ID_Nacionalidad_FKform = $_POST['ID_Nacionalidad_FKRec'];
        $Conocidoform = $_POST['ConocidoRec'];
        $Generoform = $_POST['GeneroRecjs'];
        $vencimientoform = $_POST['vencimientoRec'];
        $date = date_create($vencimientoform);
        $vencimientoformdia = date_format($date, 'j');
        $vencimientoformdia = numero_letra($vencimientoformdia);
        $vencimientoformmes = date_format($date, 'n');
        $vencimientoformmes = mes($vencimientoformmes);
        $vencimientoformanio = date_format($date, 'Y');
        $vencimientoformanio = numero_letra($vencimientoformanio);
        $parentescoform = $_POST['parentescoRec'];
        if($parentescoform==1){
            $parentescoform = "padre";
        }elseif ($parentescoform==2) {
            $parentescoform = "madre";
        }
        if ($Generoform == 1 || strtolower($Generoform) == "masculino") {
            $el_ellaV = "el deudor";
            $enterada ="enterado";
            $dela_compareciente ="del compareciente";
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
            $dela_compareciente ="de la compareciente";
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
        $fechanacform = $_POST['NacimientoRec'];
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
        //-----------------------------------Datos del primer compareciente
        //Si el usuario ingreso el nuevo cliente 1 entonces se reciben las variables que añadio
        //Si ingreso los dos clientes se viene aca}
        $Direccionform = $_POST['Direccionformform'];
        $ID_Nacionalidad_FKform = $_POST['ID_Nacionalidad_FKform'];
        

$cadena_de_texto = $ID_Nacionalidad_FKform;
$cadena_buscada   = "salva";
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);
        if ($posicion_coincidencia) {
            $ID_Nacionalidad_FKform == "Salvadoreña";
        }


        $Generoform = $_POST['Generoform'];
        $Conocidoform = $_POST['Conocidoform'];
        $vencimientoform = $_POST['vencimientoform'];
        $date = date_create($vencimientoform);
        $vencimientoformdia = date_format($date, 'j');
        $vencimientoformdia = numero_letra($vencimientoformdia);
        $vencimientoformmes = date_format($date, 'n');
        $vencimientoformmes = mes($vencimientoformmes);
        $vencimientoformanio = date_format($date, 'Y');
        $vencimientoformanio = numero_letra($vencimientoformanio);
        $parentescoform = $_POST['parentescoform'];
        if($parentescoform==1){
            $parentescoform = "padre";
        }elseif ($parentescoform==2) {
            $parentescoform = "madre";
        }
        if ($Generoform == 1) {
            $el_ellaV = "el deudor";
            $dela_deudora ="del deudor";
            $al_la_deudor ="al deudor";
            $dela_compareciente ="del compareciente";
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
            $dela_compareciente ="de la compareciente";
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
//---------------------------------------------------------------------------------
$Direccionform2 = $_POST['Direccionform2'];
        $ID_Nacionalidad_FKform2 = $_POST['ID_Nacionalidad_FKform2'];
        $Conocidoform2 = $_POST['Conocidoform2'];
        $Generoform2 = $_POST['Generoform2'];
        $vencimientoform2 = $_POST['vencimientoform2'];
        $date = date_create($vencimientoform);
        $vencimientoformdia2 = date_format($date, 'j');
        $vencimientoformdia2 = numero_letra($vencimientoformdia2);
        $vencimientoformmes2 = date_format($date, 'n');
        $vencimientoformmes2 = mes($vencimientoformmes2);
        $vencimientoformanio2 = date_format($date, 'Y');
        $vencimientoformanio2 = numero_letra($vencimientoformanio2);
        $parentescoform2 = $_POST['parentescoform2'];
        if($parentescoform2==1){
            $parentescoform2 = "padre";
        }elseif ($parentescoform2==2) {
            $parentescoform2 = "madre";
        }
        if ($Generoform2 == 1 || strtolower($Generoform2) == "masculino") {
            $el_ellaV2 = "el deudor";
            $enterada2 ="enterado";
            $dela_compareciente2 ="del compareciente";
            $al_la_deudor2 ="al deudor";
            $arrendador2 = "arrendador";
            $senior2 = "del señor";
            $senior_ ="señor";
            $conjunsen2 = "del";
            $al_la2 = "al";
            $duenio2 = "es dueño y actual poseedor";
            $poseedor2 = "poseedor";
            $due2 = "dueño";
            $el_ellav_2 = "él";
            $portador_portadora_v2 = "portador";
           $conjun_el2="el";
            $conocido_conocida2 = "conocido como " . ucwords(strtolower($Conocidoform2)) . ",";
            $apoderado_apoderadav2 = "Apoderado";
        } else if ($Generoform2 == 2 || strtolower($Generoform2) == "femenino") {
            $enterada2 ="enterada";
            $el_ellaV2 = "la deudora";
            $dela_compareciente2 ="de la compareciente";
            $conjunsen2 = "de la";
            $senior_ ="señor";
            $al_la_deudor2 ="a la deudora";
            $arrendador2 = "arrendadora";
            $al_la2 = "a la";
            $senior2 = "la señora";
            $duenio2 = "es dueña y actual poseedora";
            $poseedor2 = "poseedora";
            $due2 = "dueña";
            $el_ellav_2 = "ella";
            $conjun_el2="la";
            $portador_portadora_v2 = "portadora";
            $conocido_conocida2 = "conocida como " . ucwords(strtolower($Conocidoform2)) . ",";
            $apoderado_apoderadav2 = "Apoderada";
        }
        $Nombreform2 = $_POST['Nombreform2'];
        $Duiform2 = $_POST['Duiform2'];
        $Nitform2 = $_POST['Nitform2'];
        $oficioform2 = $_POST['Oficioform2'];
        $fechanacform2 = $_POST['Nacimientoform2'];
        $date = date_create($fechanacform2);
        $edad2 = (date_format($date, 'Y-m-d'));
        $edad2 = CalculaEdad($edad2);
        $edad2 = numero_letra($edad2);
        

        
        $ID_Nacionalidad_FKform2 = $_POST['ID_Nacionalidad_FKform2'];
        $deptoform2 = $_POST['ID_Depto_FKform2'];
        $municform2 = $_POST['ID_Munic_FKform2'];
        $tdocumentoform2 = $_POST['ID_DocIden_FKform2'];
        if ($tdocumentoform2 == 1) {
            $tdocumentoformletra2 = "Documento Único de Identidad";
        } else if ($tdocumentoform2 == 2) {
            $tdocumentoformletra2 = "Pasaporte";
        } else if ($tdocumentoform2 == 3) {
            $tdocumentoformletra2 = "Carnet de residente";
        } else {
            $tdocumentoformletra2 = $tdocumentoform2;
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


/*

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
            $tdocumentoform2letra = "Documento Único de Identidad número $Duiformletra2";
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
*/

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
    $contenido .= "<div><p>

    
En la ciudad de $lugarcontrato, departamento de $deptocontrato, República de El Salvador, a las $horaRecletra horas del $diasrecletra de $mesrecletra del $aniorecletra.- 

Ante mi, $NomNota, $notarioGen, del domicilio de $DomNota, 


comparece $senior $Nombreform, de $edad años de edad, $oficioform, de nacionalidad $ID_Nacionalidad_FKform con domicilio y residencia en $Direccionform del municipio de $municform, departamento de $deptoform, a quien no conozco pero identifico por medio de su Documento Único de Identidad número $Duiformletra, con vencimiento el dia $vencimientoformdia de $vencimientoformmes de $vencimientoformanio y con Numero de Identificación Tributaria $Nitformletra, 

y ME DICE: I) Que es $parentescoform y representante Legal de su $hijo $nombre_menor_migratorio, quien es de $edad_menor años de edad, Estudiante, con domicilio y residencia en
$direccion_menor_migratorio, de la ciudad de $ciudad_menor_migratorio, Departamento de $depto_menor_migratorio.-

II) Que según Certificación de Partida de Nacimiento $del_ninio, que es $el_la número $p_nacimiento_migratorio, folio $folio_migratorio, del tomo $tomo_migratorio, del Libro de Partidas de Nacimiento $libro_migratorio, que la Alcaldía Municipal de la ciudad de $alcaldia_migratorio, llevo en el año $anio_partida_migratorioanio, certificación extendida por $extendida_migratorio, $cargo_migratorio del Registro del Estado Familiar, el día $fecha_exten_migratoriodia de $fecha_exten_migratoriomes del $fecha_exten_migratorioanio, de la que consta que $el_la $menor, nació  en $lugar_nac_migratorio, de la ciudad de $ciudad_menor_migratorio, a las $hora_menor_migratoriohora horas y $hora_menor_migratoriomin minutos del día $fecha_menor_migratoriodia de $fecha_menor_migratoriomes de $fecha_menor_migratorioanio, siendo $hijo $dela_compareciente y $senior2 $Nombreform2.-
III) Que autoriza a su $hijo $nombre_menor_migratorio, de generales antes expresadas, quien es $portador de su Pasaporte Salvadoreño, tipo $t_pasaporte_migratorio, numero $numero_pasaporte_migratorio, expedido por $expedido_por_pasaporte_migratorio, el día $fecha_exp_pasaporte_migratoriodia de $fecha_exp_pasaporte_migratoriomes del $fecha_exp_pasaporte_migratorioanio, con fecha de vencimiento el día $fecha_venci_pasaporte_migratorioodia de $fecha_venci_pasaporte_migratoriomes del $fecha_venci_pasaporte_migratorioanio, para que pueda salir en compañía de su $parentescoform2, $senior_ $Nombreform2, de  $edad2 años de edad,  $oficioform2, de nacionalidad $ID_Nacionalidad_FKform2, con domicilio y residencia en $Direccionform2 del municipio de $municform2, departamento de  $deptoform2, portador de su $tdocumentoformletra2 número $Duiformletra2, con vencimiento al día $vencimientoformdia2 de $vencimientoformmes2 de $vencimientoformanio2, y con Numero de Identificación Tributaria $Nitformletra2; con destino hacia $lugar_destino_migratorio, por un periodo de $tiempo_estimado_migratorio, a partir del día $fecha_viaje_migratoriodia de $fecha_viaje_migratoriomes de $fecha_viaje_migratorioanio, o en cualquier día contemplado dentro del año de vigencia de la presente autorización, por cualquier lugar fronterizo, ya sea terrestre o aéreo, la cual otorga en los términos anteriores, ya que es su voluntad que su $hijo viaje sin limitación alguna, de acuerdo a lo regulado en el Articulo Cuarenta y Cuatro de Ley de Protección Integral de la Niñez y la Adolescencia.- Así se expresó $conjun_el compareciente a quien explique los efectos legales de la presente Acta Notarial que consta de un folio útil; y leído que le hube íntegramente todo lo escrito en un solo acto, sin interrupción, manifiesta su conformidad, ratifica su contenido y firmamos. - DE TODO DOY FE. -

<br>
<br>
<br>

        </p>

        <div style='width:120%%;margin-top:3%;'>
        <table style='border:1px'>
            <tr>
                <td>F._______________________________</td>
                
            </tr>
            <tr>
                <td style='font-size:12px;padding-right:60px;'>" . strtoUpper($Nombreform) . "</td>
            </tr>
        </table>
        
        </div>
</div>
";

   /*
   Que tal y como lo hace constar la Certificación de partida de nacimiento, inscrita al numero $p_nacimiento_migratorio, folio $folio_migratorio, del tomo $tomo_migratorio, que la Alcaldía Municipal de la ciudad de $alcaldia_migratorio, llevo en el año $anio_partida_migratorio, certificación que ha sido extendida por $extendida_migratorio, $cargo_migratorio del Estado Familiar, el día $fecha_exten_migratoriodia de $fecha_exten_migratoriomes del $fecha_exten_migratorioanio, en la cual consta que $ninio $Nombre_hijo_migratorio, nació en la ciudad de $nacido_en_migratorio, a las $hora_nac_migratoriohora horas y $hora_nac_migratoriomin minutos del día $fechanacform_hijodia de $fechanacform_hijomes de $fechanacform_hijoanio, y que es $_el_la_hijo $conjunsen compareciente; y que $conjun_el compareciente es $parentesco_migratorio de $dicho $ninio con Pasaporte $tpasaporte_migratorio, numero del pasaporte Salvadoreño $numero_pasapor_migratorio, expedido por las autoridades de la República de El Salvador, el día $exp_pasa_migratoriodia de $exp_pasa_migratoriomes del $exp_pasa_migratorioanio, con la fecha de vencimiento el día $vence_pasa_migratoriodia de $vence_pasa_migratoriomes del $vence_pasa_migratorioanio.- II) Que $conjun_el compareciente ejerce la autoridad parental sobre $ninio antes mencionado conjuntamente con $Nombreform2.- III) Que por medio de la presente Acta Notarial, concede AUTORIZACION, para que su $hijo $Nombre_hijo_migratorio, de generales antes expresadas y con Pasaporte relacionado, pueda salir del país por cualquier lugar fronterizo, ya sea terrestre o aéreo, acompañado por su $Parentesco2_migratorio, $Nombreform2, de $edad2 años de edad, $oficioform2 de nacionalidad $nacionalidadform2, del domicilio de la ciudad de $municform2, $portador_portadora_c de su $tdocumentoform2letra; con destino hacia $lugar_destino_migratorio, por un periodo de $tiempo_estimado_migratorio, a partir del día $fecha_viaje_migratoriodia de $fecha_viaje_migratoriomes de $fecha_viaje_migratorioanio, todo de acuerdo a lo regulado en el Articulo Cuarenta y Cuatro de Ley de Protección Integral de la Niñez y la Adolescencia.- Así se expreso el compareciente a quien explique los efectos legales de la presente Acta Notarial. Que consta de un folio útil; y leído que le hube íntegramente todo lo escrito en un solo acto, sin interrupción, manifiesta su conformidad, ratifica su contenido y firmamos. - DE TODO DOY FE. -
   */
    $contenido .= "
            </div></body>";
    $contenido .= "</html>";

    // $iddepto1 = departamentoComprobar($deptoform, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso
    // $idmunic1 = municipioComprobar($municform, $conex, $iddepto1); //Comprobar si existe regresa id sino devuelve el id del munic de ingreso
    // $iddepto2 = departamentoComprobar($deptoform2, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso
    // $idmunic2 = municipioComprobar($municform, $conex, $iddepto2); //Comprobar si existe regresa id sino devuelve el id del munic de ingreso
    $ID_Cliente1 = ingresarClientes($Duiform, $Nombreform, $Nitform, $telefonoform, $oficioform, $fechanacform, $deptoform, $municform, $tdocumentoform, $nacionalidadform, $Generoform, $conex); //Ingresar o comprobar el cliente1
   
    $lugarcontrato = departamentoComprobar($lugarcontrato, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso

    $tipo = 5;//Venta de arma
    $respuesta = ingresarContratos($NombreCont, $fechaRec, $horaRec, $Id_UsuarioL,$tipo,$ID_Cliente1,0, $conex);
    $filename = $_SERVER['DOCUMENT_ROOT'] . "/CL/DOCS/CONTRATOS/Permiso_Migratorio/$respuesta.pdf";
    actualizarContratos($respuesta, $filename, $conex);
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
                        <span style=''>Permiso Migratorio</span>
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