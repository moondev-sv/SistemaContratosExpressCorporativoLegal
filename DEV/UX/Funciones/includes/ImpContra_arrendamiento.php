<?php
error_reporting(0);

//Archivo de conexión a la base de datos
include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UI\BD\conexion.php"; //temporal
require_once $_SERVER['DOCUMENT_ROOT'] . "/CL/DEV/UX/Plugins/dompdf/autoload.inc.php";
include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UI/Login/session.php";
include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UX\Funciones\includes/funciones_corporativo.php"; 
include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UX\Funciones\includes\Existen_categorias.php"; //Comprobar categorias
use Dompdf\Dompdf;
ob_start();

if (isset($_POST["btnGenerarARRE"])) {

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
/*-----------------------------Variables Contrato -----------------*/
//
$Arre_naturaleza = $_POST['Arre_naturaleza'];
$Arre_areaT = $_POST['Arre_areaT'];//En que unidades
$Arre_Ubi_in = $_POST['Arre_Ubi_in'];
$Arre_ciu_in = $_POST['Arre_ciu_in'];
$Arre_Dept_in = $_POST['Arre_Dept_in'];
$Arre_Matri_ins = $_POST['Arre_Matri_ins'];
$Arre_Regis_Propie = $_POST['Arre_Regis_Propie'];
$Arre_Sec = $_POST['Arre_Sec'];
$Arre_Depto_secc = $_POST['Arre_Depto_secc'];
//
$Arre_ServiciosB=$_POST['Arre_ServiciosB'];
$Arre_InmuebleDest=$_POST['Arre_InmuebleDest'];
//
$Arre_PlazoCon=$_POST['Arre_PlazoCon'];//Se quedara en meses?
$Arre_FechaIni=$_POST['Arre_FechaIni'];//Fecha
            $date = date_create($Arre_FechaIni); //Separando Fecha dada
            $mes = date_format($date, 'n');
            $Arre_FechaIni_mes = "";
            $anio = date_format($date, 'Y');
            $Arre_FechaIni_anio = "";
            $dia = date_format($date, 'j');
            $Arre_FechaIni_dia = "";
            //Convirtiendo los dias anios y meses con su respectiva nomenclatura
            $Arre_FechaIni_dia = numero_letra($dia);
            $Arre_FechaIni_anio = numero_letra($anio);
            $Arre_FechaIni_mes = mes($mes);

$Arre_FechaHas=$_POST['Arre_FechaHas'];//Fecha
            $date = date_create($Arre_FechaHas); //Separando Fecha dada
            $mes = date_format($date, 'n');
            $Arre_FechaHas_mes = "";
            $anio = date_format($date, 'Y');
            $Arre_FechaHas_anio = "";
            $dia = date_format($date, 'j');
            $Arre_FechaHas_dia = "";
            //Convirtiendo los dias anios y meses con su respectiva nomenclatura
            $Arre_FechaHas_dia = numero_letra($dia);
            $Arre_FechaHas_anio = numero_letra($anio);
            $Arre_FechaHas_mes = mes($mes);

$Arre_Canones=$_POST['Arre_Canones'];
//
$Arre_Actividades=$_POST['Arre_Actividades'];
//
if($_POST['Arre_PrecioArrenc']==0){
                
    $Arre_PrecioArren=(strtoupper(numero_letra($_POST['Arre_PrecioArren']))." DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA");//Precio
}
else if($_POST['Arre_PrecioArrenc']==00){
    $Arre_PrecioArren=(strtoupper(numero_letra($_POST['Arre_PrecioArren']))." DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA");//Precio
}
else{
    $Arre_PrecioArren=(strtoupper(numero_letra($_POST['Arre_PrecioArren']))." DOLARES CON ".(strtoupper(numero_letra($_POST['Arre_PrecioArrenc']))." CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA"));//Precio
}





$Arre_CantCuo=$_POST['Arre_CantCuo'];


if($_POST['Arre_CostoCuoc']==0){
                
    $Arre_CostoCuo=strtoupper(numero_letra($_POST['Arre_CostoCuo']))." DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";
}
else if($_POST['Arre_CostoCuoc']==00){
    $Arre_CostoCuo=strtoupper(numero_letra($_POST['Arre_CostoCuo']))." DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";
    //Precio
}
else{
    $Arre_CostoCuo=(strtoupper(numero_letra($_POST['Arre_CostoCuo']))." DOLARES CON ".(strtoupper(numero_letra($_POST['Arre_CostoCuoc']))." CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA"));//Precio
}



if($_POST['Arre_CostCanManc']==0){
                
    $Arre_CostCanMan=(strtoupper(numero_letra($_POST['Arre_CostCanMan'])))." DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";//Precio
}
else if($_POST['Arre_CostCanManc']==00){
    $Arre_CostCanMan=(strtoupper(numero_letra($_POST['Arre_CostCanMan'])))." DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";//Precio
}
else{
    $Arre_CostCanMan=(strtoupper(numero_letra($_POST['Arre_CostCanMan'])))." DOLARES CON ".(strtoupper(numero_letra($_POST['Arre_CostCanManc'])." CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA"));//Precio
}

$Arre_dia_pagoCuo=$_POST['Arre_dia_pagoCuo'];//Dia de pago
//

if($_POST['Arre_Cant_Deposc']==0){
                
    $Arre_Cant_Depos=strtoupper(numero_letra($_POST['Arre_Cant_Depos']))." DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";//Precio
}
else if($_POST['Arre_Cant_Deposc']==00){
    $Arre_Cant_Depos=strtoupper(numero_letra($_POST['Arre_Cant_Depos']))." DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";//Precio
}
else{
    $Arre_Cant_Depos=strtoupper(numero_letra($_POST['Arre_Cant_Depos']))." DOLARES CON ".(strtoupper(numero_letra($_POST['Arre_Cant_Deposc'])." CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA"));//Precio
}
//
$Arre_porc_mora=$_POST['Arre_porc_mora'];
$Arre_porc_mora=numero_letra($Arre_porc_mora);


   //Convirtiendo marca a letras o numeros
   $arreglo = str_split($Arre_areaT);
   $letra = "";
   $res='';
   foreach ($arreglo as $key => $value) {
       if (!is_numeric($value)) {
           $letra .= $value;
       } else if ($value == "-" || $value== " ") {
           $letra .= " gui&oacute;n";
       } else if (is_numeric($value)) {
           $res .= $value;
       }
   }
   $Arre_areaT="";
   $Arre_areaT.=numero_letra($res);
   $Arre_areaT.=$letra;


    //Convirtiendo marca a letras o numeros
    $arreglo = str_split($Arre_Matri_ins);
    $Arre_Matri_ins = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $Arre_Matri_ins .= $value;

        } else if ($value == "-") {
            $Arre_Matri_ins .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $Arre_Matri_ins .= " " . $res;
        }
    }

     //Convirtiendo marca a letras o numeros
     $arreglo = str_split($Arre_PlazoCon);
     $Arre_PlazoCon = "";
     foreach ($arreglo as $key => $value) {
         if (!is_numeric($value) && $value != "-") {
             $Arre_PlazoCon .= $value;
 
         } else if ($value == "-") {
             $Arre_PlazoCon .= " gui&oacute;n";
         } else {
             $res = numero_letra($value);
             $Arre_PlazoCon .= " " . $res;
         }
     }

     

      //Convirtiendo marca a letras o numeros
      

        $Arre_CantCuo = numero_letra($Arre_CantCuo);


      //Convirtiendo marca a letras o numeros
      $arreglo = str_split($Arre_dia_pagoCuo);
      $Arre_dia_pagoCuo = "";
      $res="";
      foreach ($arreglo as $key => $value) {
          if (!is_numeric($value) && $value != "-") {
              $Arre_dia_pagoCuo .= $value;
  
          } else if ($value == "-") {
              $Arre_dia_pagoCuo .= " gui&oacute;n";
          } else {
              $res .= $value;
              
          }
      }$Arre_dia_pagoCuo .= numero_letra($res);
    //-----------------------------Variables Notario

    $fechaRec = $_POST['fechaRec'];
    $horaRec = $_POST['horaRec'];
    $NomNota = $_POST['NomNota'];
    $DomNota = $_POST['DomNota'];
    $lugarcontrato = $_POST['lugarcontrato'];
    $NombreCont = "Arrendamiento";
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

    //-----------------------------Variables si tiene poder
    $Generoformcp = $_POST['Generoformcp'];
    $Nombreformcp = $_POST['Nombreformcp'];
    $tdocumentoformcp = $_POST['tdocumentoformcp'];
    $Duiformcp = $_POST['Duiformcp'];
    $Nitformcp = $_POST['Nitformcp'];
    $oficioformcp = $_POST['oficioformcp'];
    $fechanacformcp = $_POST['fechanacformcp'];

    if (isset($_POST['nacionalidadformcp'])) {
        $nacionalidadformcp = $_POST['nacionalidadformcp'];
    } else {
        $nacionalidadformcp = "";
    }
    $deptoformcp = $_POST['deptoformcp'];
    $municformcp = $_POST['municformcp'];
    $date = date_create($fechanacformcp);
    $date = (date_format($date, 'Y-m-d'));
    $edadcp = CalculaEdad($date);
        $edadcp = numero_letra($edadcp);
    //sacando mes y dias y año

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
    
  

    if ($TraccionA != "") {
        //Convirtiendo marca a letras o numeros
        $arreglo = str_split($TraccionA);
        $TraccionAletra = "TRACCION: ";
        foreach ($arreglo as $key => $value) {
            if (!is_numeric($value)) {
                $TraccionAletra .= "" . $value;

            } else if ($value == "-") {
                $TraccionAletra .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $TraccionAletra .= " " . $res;
            }
        }
        $tipotracc = $TraccionAletra;
        $TraccionAletra .= ";";
    } else {
        $TraccionAletra = "";
    }

    //Convirtiendo marca a letras o numeros
    $arreglo = str_split($MarcaA);
    $MarcaAletra = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value)) {
            $MarcaAletra .= $value;

        } else if ($value == "-") {
            $MarcaAletra .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $MarcaAletra .= " " . $res;
        }
    }

    //Convirtiendo marca a letras o numeros
    $arreglo = str_split($PlacaA);
    $PlacaAletra = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $PlacaAletra .= $value;

        } else if ($value == "-") {
            $PlacaAletra .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $PlacaAletra .= " " . $res;
        }
    }
    //Convirtiendo marca a letras o numeros
    $arreglo = str_split($ModelA);
    $ModelAletra = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $ModelAletra .= $value;

        } else if ($value == "-") {
            $ModelAletra .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $ModelAletra .= " " . $res;
        }
    }

    //Convirtiendo marca a letras o numeros

    $CapaAletra = numero_letra($CapaA);
    /*
    foreach ($arreglo as $key => $value) {
    if(!is_numeric($value)&&$value!="-"){
    $CapaAletra .=$value;

    }
    else if($value=="-"){
    $CapaAletra .=" gui&oacute;n";
    }else{
    $res= convertir2($value);
    $CapaAletra .= " ".$res;
    }
    } */
    $CapaAletra .= " asientos";
    //Convirtiendo marca a letras o numeros
    $arreglo = str_split($ClaseA);
    $ClaseAletra = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $ClaseAletra .= $value;
        } else if ($value == "-") {
            $ClaseAletra .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $ClaseAletra .= " " . $res;
        }
    }
    //
    $arreglo = str_split($NumMA);
    $NumMAletra = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $NumMAletra .= " " . $value;

        } else if ($value == "-") {
            $NumMAletra .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $NumMAletra .= " " . $res;
        }
    }
    $NumMAletra = ucfirst($NumMAletra);
    //
    $arreglo = str_split($GrabaA);
    $GrabaAletra = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $GrabaAletra .= " " . $value;
        } else if ($value == "-") {
            $GrabaAletra .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $GrabaAletra .= " " . $res;
        }
    }
    //
    $arreglo = str_split($VinA);
    $VinAetra = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $VinAetra .= " " . $value;

        } else if ($value == "-") {
            $VinAetra .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $VinAetra .= " " . $res;
        }
    }
    //
    $arreglo = str_split($DominioA);
    $DominioAletra = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value)) {
            $DominioAletra .= "" . $value;

        } else if ($value == "-") {
            $DominioAletra .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $DominioAletra .= " " . $res;
        }
    }
    $PrecioALetra = numero_letra($PrecioA);
    //Validacion de tarjeta de circulacion o poliza
    if ($ttarjeta == 1) { //TARJETA CIRCULACION
        $numerotarjeta = $_POST['numerotarjeta'];
        //CONVIRTIENDO TARJETA CIRCULACION A LETRAS
        $arreglo = str_split($numerotarjeta);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $ttarjetaletra .= " gui&oacute;n";
            } else
            if (!is_numeric($value)) {
                $ttarjetaletra .= " " . $value;

            } else {
                $res = numero_letra($value);
                $ttarjetaletra .= " " . $res;
            }
        }
        $Nomttarjeta = "según Tarjeta de Circulación con numero $ttarjetaletra";
    } else if ($ttarjeta == 2) { //POLIZA
        $numeropoliza = $_POST['numeropoliza'];
        $polemitida = $_POST['polemitida'];
        $date = date_create($polemitida); //Separando Fecha dada
        $mes = date_format($date, 'n');
        $mesletra = "";
        $anio = date_format($date, 'Y');
        $anioletra = "";
        $dia = date_format($date, 'j');
        $dialetra = "";
        //Convirtiendo los dias anios y meses con su respectiva nomenclatura
        $dialetra = numero_letra($dia);
        $anioletra = numero_letra($anio);
        $mesletra = mes($mes);
        /*
        //CONVIRTIENDO MES A LETRAS
        $arreglo = str_split($mes);
        foreach ($arreglo as $key => $value) {
        if($value=="-"){
        $mesletra .="gui&oacute;n ";
        }else{
        $res= convertir($value);
        $mesletra .= $res." ";
        }
        }

        //CONVIRTIENDO AÑO A LETRAS
        $arreglo = str_split($anio);
        foreach ($arreglo as $key => $value) {
        if($value=="-"){
        $anioletra .="gui&oacute;n ";
        }else{
        $res= convertir($value);
        $anioletra .= $res." ";
        }
        }

        //CONVIRTIENDO DIAS A LETRAS
        $arreglo = str_split($dia);
        foreach ($arreglo as $key => $value) {
        if($value=="-"){
        $dialetra .="gui&oacute;n ";
        }else{
        $res= convertir($value);
        $dialetra .= $res." ";
        }
        }
         */
        //CONVIRTIENDO POLIZA A LETRAS
        $arreglo = str_split($numeropoliza);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $numpolizaletras .= " gui&oacute;n";
            } else if (!is_numeric($value)) {
                $numpolizaletras .= " " . $value;

            } else {
                $res = numero_letra($value);
                $numpolizaletras .= " " . $res;
            }
        }
        $Nomttarjeta = "según Póliza número $numpolizaletras emitida por la Direccion General de Aduanas, el día $dialetra de $mesletra del año $anioletra,";
    } else { //NO SELECCIONO NADA
        $Nomttarjeta = "";
        $ttarjetaletra = "";
    }

    //Si busco el vendedor
    //-----------------------------Datos del VENDEDOR

    if (($_POST['CampovalidacionC1']) == 0) {

        $Conocidoform = $_POST['ConocidoRec'];
        $Generoform = $_POST['GeneroRecjs'];

        if ($Generoform == 1 || strtolower($Generoform) == "masculino") {
            $el_ellaV = "EL ARRENDADOR";
            $arrendador_arrendadora="arrendador";
            $arrendador = "arrendador";
            $senior = "del señor";
            $conjunsen = "del";
            $al_la = "al";
            $duenio = "es dueño y actual poseedor";
            $poseedor = "poseedor";
            $due = "dueño";
            $el_ellav_ = "él";
            $portador_portadora_v = "portador";
            $conocido_conocida = "conocido como " . ucwords(strtolower($Conocidoform)) . ",";
            $apoderado_apoderadav = "Apoderado";
        } else if ($Generoform == 2 || strtolower($Generoform) == "femenino") {
            $el_ellaV = "LA ARRENDADORA";
            $arrendador_arrendadora="arrendadora";
            $conjunsen = "de la";
            $arrendador = "arrendadora";
            $al_la = "a la";
            $senior = "de la señora";
            $duenio = "es dueña y actual poseedora";
            $poseedor = "poseedora";
            $due = "dueña";
            $el_ellav_ = "ella";
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
            $el_ellaV = "EL ARRENDADOR";
            $arrendador_arrendadora="arrendador";
            $senior = "el señor";
            $conjunsen = "del";
            $al_la = "al";
            $duenio = "es dueño y actual poseedor";
            $due = "dueño";
            $poseedor = "poseedor";
            $el_ellav_ = "él";
            $conocido_conocida = "conocido como  " . ucwords(strtolower($Conocidoform)) . ",";
            $portador_portadora_v = "portador";
            $apoderado_apoderadav = "Apoderado";
            $arrendador = "arrendador";
        } else {
            $el_ellaV = "LA ARRENDADORA";
            $arrendador_arrendadora="arrendador";
            $senior = "la señora";
            $al_la = "a la";
            $conjunsen = "de la";
            $duenio = "es dueña y actual poseedora";
            $due = "dueña";
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
            $tdocumentoform2letra = "Documento Único de Identidad";
        } else if ($tdocumentoform2 == 2) {
            $tdocumentoform2letra = "Pasaporte";
        } else if ($tdocumentoform2 == 3) {
            $tdocumentoform2letra = "Carnet de residente";
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

    }

    if ((str_word_count($conocido_conocida, 0)) <= 2) //Si el campo conocidos no ha ingresado nada se coloca un espacio vacio y por ende no se imprime en el contrato
    {
        $conocido_conocida = "";
    }

    if ((str_word_count($conocido_conocida2, 0)) <= 2) //Si el campo conocidos no ha ingresado nada se coloca un espacio vacio y por ende no se imprime en el contrato
    {
        $conocido_conocida2 = "";
    }
   
    $satisfaccioncp = "";
    $conpodertexto = "";
    $conpodertexto2 = "";
    if ($_POST["CampoConPoder"] == 1) {
        $Generoformcp = $_POST['Generoformcp'];
        $Conocidoformcp = $_POST['Conocidoformcp'];
       
        if ($Generoformcp == 1) {
            $el_ellacp = "EL ARRENDANTE";
            $seniorcp = "del señor";
            $al_lacp = "al";
            $dueniocp = "soy dueño y actual poseedor";
            $duecp = "dueño";
            $poseedorcp = "poseedor";
            $el_ellacp_ = "él";
            $portador_portadora_cp = "portador";
            $conocido_conocidacp = "conocido como " . ucwords(strtolower($Conocidoformcp)) . ",";
            $de_la_lo_mismo_misma = "del mismo";
            $satisfaccioncp = " en nombre de mi representado";

            //Estos son los datos del vendedor, y se sobre escriben por que dependeria de si tiene poder o no
            $el_ellaV = "EL ARRENDANTE";
            $duenio = "es dueño y actual poseedor";

        } else {
            $el_ellacp = "LA ARRENDANTE";
            $seniorcp = "de la señora";
            $al_lacp = "a la";
            $dueniocp = "soy dueña y actual poseedora";
            $dueniocp = "es dueña y actual poseedora";
            $poseedorcp = "poseedora";
            $duecp = "dueña";
            $el_ellacp_ = "ella";
            $portador_portadora_cp = "portadora";
            $conocido_conocidacp = "conocida como " . ucwords(strtolower($Conocidoformcp)) . ",";
            $de_la_lo_mismo_misma = "de la misma";
            $satisfaccioncp = " en nombre de mi representada";

            //Estos son los datos del vendedor, y se sobre escriben por que dependeria de si tiene poder o no
            $el_ellaV = "LA ARRENDANTE";
            $duenio = "es dueña y actual poseedora";
        }
        $Nombreformcp = $_POST['Nombreformcp'];

        $Duiformcp = $_POST['Duiformcp'];
        $Nitformcp = $_POST['Nitformcp'];
        if (isset($_POST['telefonoformcp'])) {
            $telefonoformcp = $_POST['telefonoformcp'];
        } else {
            $telefonoformcp = "1";
        }

        $oficioformcp = $_POST['oficioformcp'];
        $fechanacformcp = $_POST['fechanacformcp'];
        $date = date_create($fechanacformcp);
        $edadcp = (date_format($date, 'Y-m-d'));
        $edadcp = CalculaEdad($edadcp);
        $edadcp = numero_letra($edadcp);
        $nacionalidadformcp = $_POST['nacionalidadformcp'];
        $deptoformcp = $_POST['deptoformcp'];
        $municformcp = $_POST['municformcp'];
        $tdocumentoformcp = $_POST['tdocumentoformcp'];
        if ($tdocumentoformcp == 1) {
            $tdocumentoformcpletra = "Documento Único de Identidad";
        } else if ($tdocumentoformcp == 2) {
            $tdocumentoformcpletra = "Pasaporte";
        } else if ($tdocumentoformcp == 3) {
            $tdocumentoformcpletra = "Carnet de residente";
        }
        $Duiformcpletra = "";
        $Nitformcpletra = "";
        //Convertir DUI a letras
        //
        $arreglo = str_split($Duiformcp);

        foreach ($arreglo as $key => $value) {
            if (!is_numeric($value) && $value != "-") {
                $Duiformcpletra .= " " . $value;

            } else if ($value == "-") {
                $Duiformcpletra .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Duiformcpletra .= " " . $res;
            }
        }
        //Convertir NIT a letras
        $arreglo = str_split($Nitformcp);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Nitformcpletra .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Nitformcpletra .= " " . $res;
            }
        }
        
        if ((str_word_count($conocido_conocidacp, 0)) <= 2) //Si el campo conocidos no ha ingresado nada se coloca un espacio vacio y por ende no se imprime en el contrato
        {
            $conocido_conocidacp = "";
        }
        $calidad_cp=$_POST['calidad_cp'];
        $conpodertexto = "actuando en nombre y representación $seniorcp $Nombreformcp, $conocido_conocidacp de $edadcp años de edad, $oficioformcp, del domicilio de la ciudad de $municformcp, departamento de $deptoformcp, con Documento Unico de Identidad número $Duiformcpletra, y con Número de Identificación Tributaria $Nitformcpletra, en mi calidad de $calidad_cp";

        $conpodertexto2 = "DOY FE: a) De ser legítima y suficiente la personería con que actúa el primer compareciente, por haber tenido a la vista el Testimonio de Escritura Pública de Poder Especial, otorgado en esta ciudad, a las $horaRecletra horas del día $diasrecletra de $mesrecletra de $aniorecletra, ante los oficios Notariales de $NomNota, por $NomNota a favor del primer compareciente, en el cual se le faculta para otorgar el presente acto; b) Que los otorgantes me manifiestan que reconocen todos los demás conceptos vertidos en el anterior documento que hoy se legaliza; y c) Que son auténticas las firmas que calzan el anterior documento, por haber sido puestas a mi presencia de su puño y letra por los otorgantes.- Así se expresaron $La_Lo_com comparecientes a quienes expliqué los efectos legales de la presente Acta Notarial, que consta de <b>tres</b> hojas útiles; y leído que les hube íntegramente todo lo escrito en un solo acto, sin interrupción, manifiestan su conformidad, ratifican su contenido y firmamos.- DE TODO DOY FE.- ";

        $conpodertexto3 = "personería que al final de este documento relacionaré";
    } else {
        $conpodertexto2 = " DOY FE: Que son auténticas las firmas que calzan el anterior documento, por haber sido puestas a mi presencia de su puño y letra por $La_Lo_com comparecientes, a quienes expliqué los efectos legales de la presente Acta Notarial, que consta de <b>dos</b> hojas útiles, y leído que les hube íntegramente lo escrito, en un solo acto sin interrupción, ratifican su contenido y firmamos.- DE TODO DOY FE.-";
    }
    $HOJAS= numero_letra($_POST['cant_hojas']);
    $contenido = "<html>";
    $contenido .= "<head>
            <style>
            html {
                margin: 15mm 25mm 30mm 25mm;
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
            if (($_POST['Arre_CostCanMan'])!=""){
                $mantenimiento_arre = ", más la cantidad de $Arre_CostCanMan, en concepto de mantenimiento que incluye el servicio de ".$_POST['Arre_serv_mant'].", ésta cuota estará sujeta a variabilidad, la cual depende de los costos que se generen para brindarla y podrá ser modificada a criterio $conjunsen $arrendador";
            }
            else {
                $mantenimiento_arre="";
            }
            
    $contenido .= "</head>";
    $contenido .= "<body>";
    $contenido .= "<div><p>

            NOSOTROS: Por una parte, <B>" . strtoUpper($Nombreform) . "</B>, $conocido_conocida de $edad años de edad, " . ucwords(strtolower($oficioform)) . ", del domicilio de la ciudad de " . ucwords(strtolower($municform)) . ", departamento de " . ucwords(strtolower($deptoform)) . ",  $portador_portadora_v de mi $tdocumentoformletra número $Duiformletra y con Número de Identificación Tributaria $Nitformletra, $conpodertexto quien en el transcurso de este documento me denominaré <b>''$el_ellaV''</b>;

            y por otra parte <b>" . strtoUpper($Nombreform2) . "</b>, $conocido_conocida2 de $edad2 años de edad, " . ucwords(strtolower($oficioform2)) . ", del domicilio de la ciudad de " . ucwords(strtolower($municform2)) . ", departamento de " . ucwords(strtolower($deptoform2)) . ", $portador_portadora_c de mi $tdocumentoform2letra número $Duiformletra2, y con Número de Identificación Tributaria $Nitformletra2, quien en el transcurso de este documento me denominaré <b>''$el_ellaC''</b>,

            por medio de este instrumento celebramos un CONTRATO DE ARRENDAMIENTO, que en lo sucesivo se denominará “el contrato” que se regirá por las cláusulas siguientes:

            <p><B>I) OBJETO DEL CONTRATO:</B>
            $el_ellaV  $duenio de un inmueble de naturaleza $Arre_naturaleza, con un área total de $Arre_areaT, dicho inmueble se encuentra ubicado en $Arre_Ubi_in, en la ciudad de $Arre_ciu_in del departamento de $Arre_Dept_in, el cual se encuentra inscrito por la matricula número $Arre_Matri_ins del Registro de la Propiedad Raíz e Hipotecas de la $Arre_Regis_Propie sección de $Arre_Sec del departamento de $Arre_Depto_secc.</p>

            <p><B>II) ENTREGA DEL INMUEBLE:</B>
             $el_ellaV, por este acto declara haber entregado en arrendamiento $al_la2 $arrendatario, el inmueble antes indicado el cual cuenta con los servicios básicos de $Arre_ServiciosB, y el cual se encuentra al día con el pago de sus impuestos municipales, y $el_ellaC por su parte declara haberlo recibido a su entera satisfacción. $el_ellaC se obliga a devolver el inmueble en las mismas condiciones de uso y funcionamiento a la terminación del plazo original o de cualquiera de las prórrogas del presente contrato, el inmueble será destinado para $Arre_InmuebleDest, no pudiendo ocuparlo para otros fines. </p>

             <P><B>III) PLAZO:</B>
              El plazo convenido es de $Arre_PlazoCon, a partir del día $Arre_FechaIni_dia de $Arre_FechaIni_mes de $Arre_FechaIni_anio, con vencimiento el día $Arre_FechaHas_dia de $Arre_FechaHas_mes de $Arre_FechaHas_anio. El plazo del presente contrato podrá prorrogarse por períodos iguales, cuando habiéndose vencido el plazo original, las partes no manifestaren por escrito su intención de prorrogarlo por un plazo menor o de darlo por terminado con al menos sesenta días de anticipación al vencimiento del plazo original o de cualquiera de sus prórrogas, siempre y cuando las partes estén de acuerdo con el valor del cánon de arrendamiento y que $el_ellaC cumpla con las obligaciones de este contrato, en especial con la del pago puntual de los cánones de arrendamiento y la de los servicios de $Arre_Canones que correspondieren al inmueble objeto de este contrato. Asimismo $el_ellaV se reserva el derecho de negociar e incrementar anualmente el cánon  de arrendamiento y al finalizar  el plazo original o sus prórrogas tomando en cuenta las condiciones del mercado en este tipo de contratos. Si se fuere a desocupar el inmueble antes de vencer el plazo del contrato o de sus prórrogas se deberá notificar a  $el_ellaV dicha situación con treinta días de anticipación, en cuyo caso $el_ellaC se obliga a pagar  el valor total de los cánones de arrendamiento pendientes de cancelar hasta el vencimiento del plazo original o sus prórrogas, en caso de  no mediar aviso de las partes antes del vencimiento del plazo original o de sus prórrogas, de su intención de renovarse, éste se tendrá por renovado automáticamente, $el_ellaC deberá devolver el inmueble objeto del presente contrato de arrendamiento, en un plazo no mayor a quince días contados a partir del día siguiente al vencimiento del plazo original o de cualquiera de sus prórrogas, desocupándolo completamente y devolviéndolo en el mismo buen estado de conservación que lo recibe, entregando las llaves del mismo $al_la $arrendador.- En caso que, el déposito que más adelante se relaciona no fuere suficiente para cubrir las reparaciones o cubrir las cuentas pendientes, entonces $el_ellaV se abstendrá de recibir el inmueble, mientras $el_ellaC no efectué las reparaciones o pague las cuentas pendientes.- En todo caso la relación del arrendamiento se regirá por el presente contrato hasta el día que $el_ellaV reciba a su entera satisfacción el inmueble objeto del arrendamiento y $el_ellaC haya pagado la totalidad de sus obligaciones, todo lo cual deberá hacerse constar en un acta de entrega.</P>

            
               <P><B>IV) PRECIO DEL ARRENDAMIENTO Y FORMA DE PAGO DE LOS CÁNONES:</B>
                $el_ellaC se compromete a pagar por el arrendamiento la cantidad de $Arre_PrecioArren, que $el_ellaC pagará $al_la $arrendador, en el lugar que éste indique, por medio de $Arre_CantCuo cuotas, mensuales, fijas, anticipadas y sucesivas, cada una de $Arre_CostoCuo, en concepto de cánon de arrendamiento$mantenimiento_arre. Todas las cuotas serán pagadas el día $Arre_dia_pagoCuo de cada uno de los meses comprendidos dentro del plazo original o sus prórrogas. $el_ellaC en esta fecha, paga el valor del primer mes de cánon de arrendamiento y mantenimiento. </P>

                <P><B> V) DÉPOSITO: </B>
                 Con el propósito de garantizar el cumplimiento de las obligaciones de $el_ellaC y/o el pago de daños y perjuicios que se puedan ocasionar por el incumplimiento total o parcial de las obligaciones estipuladas en este instrumento; en este acto $el_ellaV declara que ha recibido de parte de $el_ellaC en concepto de depósito de garantía la cantidad de $Arre_Cant_Depos, el déposito quedará en poder $conjunsen $arrendador por todo el tiempo que el presente contrato este vigente, o sus prórrogas y servirá para cubrir los costos de reparación de desperfectos o daños que pudieren ocasionarse en el inmueble por causa de $el_ellaC de sus dependientes o personas bajo su responsabilidad, la de terceros que contraten, asi como el pago de cuentas pendientes derivadas de los servicios que goza el inmueble.- $el_ellaC, por este medio se compromete a realizar la devolución inmediata del depósito o el saldo que quedaré después de pagar cuentas y reparaciones, una vez se dé por terminado el presente contrato el arrendamiento o cualquiera de sus prórrogas y se haya realizado la devolución del inmueble objeto del presente arrendamiento.</P>

                 <P><B> VI) SERVICIOS A CANCELAR POR $el_ellaC:</B>
                  $el_ellaC será responsable por el pago de consumo por los servicios telefónicos que solicite y utilice bajo las tarifas vigentes que correspondan así como del servicio de internet, también será responsable del pago de consumo mensual de la energía eléctrica y consumo de agua potable, la cual se cobrará de acuerdo a las tarifas vigentes de la compañía de distribución correspondiente.</P>

                  <P><B>VII) INTERESES EN CASO DE MORA:</B>  Cuando $el_ellaC incurra en mora en el pago de una de las cuotas, y otros cargos pendientes, comenzará a reconocer intereses moratorios del $Arre_porc_mora porciento mensual a partir del décimo día de la fecha de pago del cánon del presente contrato, sin perjuicio del derecho que tienen el arrendante de dar por terminado el presente contrato y quedar facultada para reclamar el total de lo adeudado y los cánones que faltaren por pagar del plazo estipulado.-  Durante el tiempo que persista la mora, el arrendante podrá suspender el uso de los servicios descritos en este contrato.</P>

                  <P><B>VIII) MEJORAS:</B>
                   $el_ellaC no podrá hacer ninguna clase de instalaciones, modificaciones, alteraciones o adiciones al inmueble arrendado sin el consentimiento previo y por escrito $conjunsen $el_ellaV,  las instalaciones, mejoras, alteraciones o modificaciones que se autoricen y el equipo que se instalen y por naturaleza no puedan separarse del inmueble sin demerito de este.</P>

                   <P><B>IX) RESPONSABILIDADES ".strtoupper($conjunsen2)." ".strtoupper($arrendatario).":</B>
                     Además de las obligaciones ya consignadas, $el_ellaC se obliga: a) A cuidar y conservar el inmueble arrendado y a devolverlo en el mismo buen estado en que se le entrega; b) A reportar $al_la $arrendador las averías, daños o desperfectos estructurales que advierta en el inmueble arrendado para proceder a la reparación de los mismos de parte $conjunsen $arrendador; c) A desalojar inmediatamente el inmueble arrendado al terminar el contrato por cualquier causa, sin necesidad de autorización judicial, para lo cual desde ya autoriza $al_la $arrendador, en caso necesario cambiar los registros de chapas y desalojar por cuenta $conjunsen2 $arrendatario el inmueble; d) Llevarse al final del arriendo aquellas adiciones desmontables que fueron autorizadas por el arrendante y a entregar en perfectas condiciones el inmueble; e) A pagar todos los impuestos, tasas o contribuciones fiscales y municipales establecidas en leyes o reglamento que graven el inmueble; f) Cumplir las leyes, decretos o reglamentos de las autoridades y a no ocupar o permitir que se ocupe en el inmueble arrendado para usos contrarios al orden público, leyes o buenas costumbres. g) A destinar el inmueble arrendado exclusivamente para el fin que ha sido contratado, h) A pagar por su cuenta los desperfectos que se ocasionen y todas las reparaciones locativas del inmueble arrendado, como lo son el descalabro de paredes, roturas de vidrios, reparación de chapas, grifos, servicios sanitarios, obstrucción de desagües y otros. i) A pagar puntualmente y en forma antes expuesta las mensualidades correspondientes. j) A pagar los servicios de energía eléctrica y de servicio de agua potable, así como la reconexión de tales servicios, en caso de que por su culpa fueran suspendidos y pagar las multas correspondientes. </P>

                     </P><B>X) PROHIBICIONES ".strtoupper($conjunsen2)." ".strtoupper($arrendatario).":</B>
                      ''$el_ellaC'' no podrá: a) Sub arrendar, hacer alteraciones, modificaciones o adiciones en el inmueble arrendado sin permiso escrito $conjunsen $arrendador; y las que se hagan, quedarán en beneficio $conjunsen $arrendador, sin costo alguno para ésta última; b) Almacenar o tener en el inmueble arrendado sustancias explosivas, tóxicas, inflamables o peligrosas o prohibidas, que puedan aumentar el riesgo de incendio o contravengan reglamentos de seguridad y/o las leyes; c) Causar ruidos escandalosos o impropios que afecten a los demás vecinos; y d) Manchar, marcar o romper paredes, ventanas, puertas o cualquier otra parte del inmueble arrendado.</P>

                      <P><B>XI) DAÑOS Y PERDIDAS:</B>
                       El arrendante no tendrá ninguna responsabilidad por daños y pérdidas de bienes muebles propiedad $conjunsen2 $arrendatario, sus familiares, dependientes, agentes y empleados, como consecuencia de fenómenos naturales, robos, fechorías, interrupción de los servicios de energía eléctrica y de voltaje de éstos, pérdidas o daños a la propiedad causados por lluvias, inundaciones o cualquier otra clase de fenómeno natural, ni por roturas de cañerías o tuberías u otros que no pudieran preveerse.</P>

                       <P><B>XII) NOTIFICACION:</B>
                        Toda notificación o aviso relacionado con el presente arrendamiento será informado al arrendatario en el inmueble  arrendado. </P>

                        <P> <B>XIII) TERMINACION DEL CONTRATO:</B>
                         Este contrato terminará en los siguientes casos: a) Por incumplimiento de parte $conjunsen2 $arrendatario a cualquiera de las obligaciones asumidas en este contrato; y b) Por infracción a cualquiera de las prohibiciones en él establecidas. Al ocurrir la terminación del contrato, el arrendante podrá exigir la desocupación y entrega del inmueble arrendado, sin necesidad de diligencia judicial o administrativa alguna, por renunciar al desahucio $el_ellaC y autoriza expresamente $al_la $arrendador a suspender los servicios de que goza el inmueble. Se acuerda además que por ningún caso $el_ellaC podrá dar por terminado unilateralmente el plazo original del presente contrato o sus prórrogas; y si así lo hiciere o desocupare el inmueble antes del vencimiento del plazo original o de sus prórrogas, se obliga a pagar los cánones de arrendamiento pendientes hasta la finalización del plazo como si fuere de plazo vencido.</P>

                        <P><B>XIV) DOMICILIO Y RENUNCIAS:</B> $el_ellaC para todos los efectos de las obligaciones que contrae por medio de este instrumento se somete a la competencia de los tribunales de esta ciudad. En caso de acción judicial, será depositario de los bienes que se embarguen la persona que el arrendante designe, a quien $el_ellaC releva de la obligación de rendir fianza y cuentas, serán  por cuenta del  mismo los honorarios, gastos e impuestos que cause este contrato y las costas procesales y gastos personales de los juicios que en razón del presente contrato se promovieren, aunque conforme las reglas generales no fuere condenado a ellas. Así nos expresamos, y para constancia firmamos el presente contrato en duplicado, en la ciudad de $lugarcontrato, a los $diasrecletra días del mes de $mesrecletra del año $aniorecletra.-</P>


        </p>

        <div style='width:120%%;margin-top:3%;'>
        <table style='border:1px'>
            <tr>
                <td>F._______________________________</td>
                <td>F._______________________________</td>
            </tr>
            <tr>
                <td style='font-size:12px;padding-right:60px;'>" . strtoUpper($Nombreform) . "</td>
                <td style='font-size:12px;padding-right:60px;'>" . strtoUpper($Nombreform2) . "</td>
            </tr>
        </table>
        
        </div>
</div>
";

    $contenido .= "<br><br><br><br><br><br><br><div>
<p>
En la ciudad de $lugarcontrato, a las $horaRecletra horas y $minutorecletra minutos del día $diasrecletra de $mesrecletra del año $aniorecletra. Ante mí, $NomNota, $notarioGen, del domicilio de la ciudad de " . ucwords(strtolower($DomNota)) . ", comparecen $Los_Las_senio: <b>" . strtoupper($Nombreform) . "</b>, $conocido_conocida de $edad años de edad, " . ucwords(strtolower($oficioform)) . ", del domicilio de " . ucwords(strtolower($municform)) . ", departamento de " . ucwords(strtolower($deptoform)) . ", a quien no conozco pero identifico por medio de su  $tdocumentoformletra numero $Duiformletra y con Número de Identificación Tributaria $Nitformletra, $conpodertexto $conpodertexto3 quien en el transcurso de este documento se denominará como <b>''$el_ellaV''</b>; y <b>" . strtoupper($Nombreform2) . "</b>, $conocido_conocida2 de $edad2 años de edad, " . ucwords(strtolower($oficioform2)) . ", del domicilio de la ciudad de " . ucwords(strtolower($municform2)) . ", departamento de " . ucwords(strtolower($deptoform2)) . ", a quien no conozco pero identifico por medio de su $tdocumentoform2letra número $Duiformletra2, y con Número de Identificación Tributaria $Nitformletra2, quien en el transcurso de este documento se denominará <b>''$el_ellaC''</b>;

 y ME DICEN: Que han celebrado contrato de arrendamiento y en consecuencia me presentan el documento que antecede, fechado en esta ciudad, este mismo día, escrito en una hoja de papel simple, cuyas cláusulas son las siguientes:

 <B>I) OBJETO DEL CONTRATO:</B>
 $el_ellaV  $duenio de un inmueble de naturaleza $Arre_naturaleza, con un área total de $Arre_areaT, dicho inmueble se encuentra ubicado en $Arre_Ubi_in, en la ciudad de $Arre_ciu_in del departamento de $Arre_Dept_in, el cual se encuentra inscrito por la matricula número $Arre_Matri_ins del Registro de la Propiedad Raíz e Hipotecas de la $Arre_Regis_Propie sección de $Arre_Sec del departamento de $Arre_Depto_secc.

 <B>II) ENTREGA DEL INMUEBLE:</B>
  $el_ellaV, por este acto declara haber entregado en arrendamiento $al_la2 $arrendatario, el inmueble antes indicado el cual cuenta con los servicios básicos de $Arre_ServiciosB, y el cual se encuentra al día con el pago de sus impuestos municipales, y $el_ellaC por su parte declara haberlo recibido a su entera satisfacción. $el_ellaC se obliga a devolver el inmueble en las mismas condiciones de uso y funcionamiento a la terminación del plazo original o de cualquiera de las prórrogas del presente contrato, el inmueble será destinado para $Arre_InmuebleDest, no pudiendo ocuparlo para otros fines. 

  <B>III) PLAZO:</B>
   El plazo convenido es de $Arre_PlazoCon, a partir del día $Arre_FechaIni_dia de $Arre_FechaIni_mes de $Arre_FechaIni_anio, con vencimiento el día $Arre_FechaHas_dia de $Arre_FechaHas_mes de $Arre_FechaHas_anio. El plazo del presente contrato podrá prorrogarse por períodos iguales, cuando habiéndose vencido el plazo original, las partes no manifestaren por escrito su intención de prorrogarlo por un plazo menor o de darlo por terminado con al menos sesenta días de anticipación al vencimiento del plazo original o de cualquiera de sus prórrogas, siempre y cuando las partes estén de acuerdo con el valor del cánon de arrendamiento y que $el_ellaC cumpla con las obligaciones de este contrato, en especial con la del pago puntual de los cánones de arrendamiento y la de los servicios de $Arre_Canones que correspondieren al inmueble objeto de este contrato. Asimismo $el_ellaV se reserva el derecho de negociar e incrementar anualmente el cánon  de arrendamiento y al finalizar  el plazo original o sus prórrogas tomando en cuenta las condiciones del mercado en este tipo de contratos. Si se fuere a desocupar el inmueble antes de vencer el plazo del contrato o de sus prórrogas se deberá notificar a $el_ellaV dicha situación con treinta días de anticipación, en cuyo caso $el_ellaC se obliga a pagar  el valor total de los cánones de arrendamiento pendientes de cancelar hasta el vencimiento del plazo original o sus prórrogas, en caso de  no mediar aviso de las partes antes del vencimiento del plazo original o de sus prórrogas, de su intención de renovarse, éste se tendrá por renovado automáticamente, $el_ellaC deberá devolver el inmueble objeto del presente contrato de arrendamiento, en un plazo no mayor a quince días contados a partir del día siguiente al vencimiento del plazo original o de cualquiera de sus prórrogas, desocupándolo completamente y devolviéndolo en el mismo buen estado de conservación que lo recibe, entregando las llaves del mismo $al_la $arrendador.- En caso que, el déposito que más adelante se relaciona no fuere suficiente para cubrir las reparaciones o cubrir las cuentas pendientes, entonces $el_ellaV se abstendrá de recibir el inmueble, mientras $el_ellaC no efectué las reparaciones o pague las cuentas pendientes.- En todo caso la relación del arrendamiento se regirá por el presente contrato hasta el día que $el_ellaV reciba a su entera satisfacción el inmueble objeto del arrendamiento y $el_ellaC haya pagado la totalidad de sus obligaciones, todo lo cual deberá hacerse constar en un acta de entrega.

  

   <B>IV) PRECIO DEL ARRENDAMIENTO Y FORMA DE PAGO DE LOS CÁNONES:</B>
   ''$el_ellaC'' se compromete a pagar por el arrendamiento la cantidad de $Arre_PrecioArren, que $el_ellaC pagará $al_la $arrendador, en el lugar que éste indique, por medio de $Arre_CantCuo cuotas, mensuales, fijas, anticipadas y sucesivas, cada una de $Arre_CostoCuo, en concepto de cánon de arrendamiento$mantenimiento_arre. Todas las cuotas serán pagadas el día $Arre_dia_pagoCuo de cada uno de los meses comprendidos dentro del plazo original o sus prórrogas. $el_ellaC en esta fecha, paga el valor del primer mes de cánon de arrendamiento y mantenimiento.

     <B> V) DÉPOSITO: </B>
      Con el propósito de garantizar el cumplimiento de las obligaciones de $el_ellaC y/o el pago de daños y perjuicios que se puedan ocasionar por el incumplimiento total o parcial de las obligaciones estipuladas en este instrumento; en este acto $el_ellaV declara que ha recibido de parte de ''$el_ellaC'' en concepto de depósito de garantía la cantidad de $Arre_Cant_Depos, el déposito quedará en poder $conjunsen $arrendador por todo el tiempo que el presente contrato este vigente, o sus prórrogas y servirá para cubrir los costos de reparación de desperfectos o daños que pudieren ocasionarse en el inmueble por causa de $el_ellaC de sus dependientes o personas bajo su responsabilidad, la de terceros que contraten, asi como el pago de cuentas pendientes derivadas de los servicios que goza el inmueble.- $el_ellaC, por este medio se compromete a realizar la devolución inmediata del depósito o el saldo que quedaré después de pagar cuentas y reparaciones, una vez se dé por terminado el presente contrato el arrendamiento o cualquiera de sus prórrogas y se haya realizado la devolución del inmueble objeto del presente arrendamiento.

      <B> VI) SERVICIOS A CANCELAR POR $el_ellaC:</B>
       $el_ellaC será responsable por el pago de consumo por los servicios telefónicos que solicite y utilice bajo las tarifas vigentes que correspondan así como del servicio de internet, también será responsable del pago de consumo mensual de la energía eléctrica y consumo de agua potable, la cual se cobrará de acuerdo a las tarifas vigentes de la compañía de distribución correspondiente.

       <B>VII) INTERESES EN CASO DE MORA:</B>  Cuando $el_ellaC incurra en mora en el pago de una de las cuotas, y otros cargos pendientes, comenzará a reconocer intereses moratorios del $Arre_porc_mora porciento mensual a partir del décimo día de la fecha de pago del cánon del presente contrato, sin perjuicio del derecho que tienen el arrendante de dar por terminado el presente contrato y quedar facultada para reclamar el total de lo adeudado y los cánones que faltaren por pagar del plazo estipulado.-  Durante el tiempo que persista la mora, el arrendante podrá suspender el uso de los servicios descritos en este contrato.

       <B>VIII) MEJORAS:</B>
        $el_ellaC no podrá hacer ninguna clase de instalaciones, modificaciones, alteraciones o adiciones al inmueble arrendado sin el consentimiento previo y por escrito $el_ellaV,  las instalaciones, mejoras, alteraciones o modificaciones que se autoricen y el equipo que se instalen y por naturaleza no puedan separarse del inmueble sin demerito de este.

        <B>IX) RESPONSABILIDADES ".strtoupper($conjunsen2)." ".strtoupper($arrendatario).":</B>
          Además de las obligaciones ya consignadas, $el_ellaC se obliga: a) A cuidar y conservar el inmueble arrendado y a devolverlo en el mismo buen estado en que se le entrega; b) A reportar $al_la $arrendador las averías, daños o desperfectos estructurales que advierta en el inmueble arrendado para proceder a la reparación de los mismos de parte $conjunsen $arrendador; c) A desalojar inmediatamente el inmueble arrendado al terminar el contrato por cualquier causa, sin necesidad de autorización judicial, para lo cual desde ya autoriza $al_la $arrendador, en caso necesario cambiar los registros de chapas y desalojar por cuenta $conjunsen2 $arrendatario el inmueble; d) Llevarse al final del arriendo aquellas adiciones desmontables que fueron autorizadas por el arrendante y a entregar en perfectas condiciones el inmueble; e) A pagar todos los impuestos, tasas o contribuciones fiscales y municipales establecidas en leyes o reglamento que graven el inmueble; f) Cumplir las leyes, decretos o reglamentos de las autoridades y a no ocupar o permitir que se ocupe en el inmueble arrendado para usos contrarios al orden público, leyes o buenas costumbres. g) A destinar el inmueble arrendado exclusivamente para el fin que ha sido contratado, h) A pagar por su cuenta los desperfectos que se ocasionen y todas las reparaciones locativas del inmueble arrendado, como lo son el descalabro de paredes, roturas de vidrios, reparación de chapas, grifos, servicios sanitarios, obstrucción de desagües y otros. i) A pagar puntualmente y en forma antes expuesta las mensualidades correspondientes. j) A pagar los servicios de energía eléctrica y de servicio de agua potable, así como la reconexión de tales servicios, en caso de que por su culpa fueran suspendidos y pagar las multas correspondientes. 

          <B>X) PROHIBICIONES ".strtoupper($conjunsen2)." ".strtoupper($arrendatario).":</B>
           ''$el_ellaC'' no podrá: a) Sub arrendar, hacer alteraciones, modificaciones o adiciones en el inmueble arrendado sin permiso escrito $conjunsen $arrendador; y las que se hagan, quedarán en beneficio $conjunsen $arrendador, sin costo alguno para ésta última; b) Almacenar o tener en el inmueble arrendado sustancias explosivas, tóxicas, inflamables o peligrosas o prohibidas, que puedan aumentar el riesgo de incendio o contravengan reglamentos de seguridad y/o las leyes; c) Causar ruidos escandalosos o impropios que afecten a los demás vecinos; y d) Manchar, marcar o romper paredes, ventanas, puertas o cualquier otra parte del inmueble arrendado.

           <B>XI) DAÑOS Y PERDIDAS:</B>
           $el_ellaV no tendrá ninguna responsabilidad por daños y pérdidas de bienes muebles propiedad $conjunsen2 $arrendatario, sus familiares, dependientes, agentes y empleados, como consecuencia de fenómenos naturales, robos, fechorías, interrupción de los servicios de energía eléctrica y de voltaje de éstos, pérdidas o daños a la propiedad causados por lluvias, inundaciones o cualquier otra clase de fenómeno natural, ni por roturas de cañerías o tuberías u otros que no pudieran preveerse.

            <B>XII) NOTIFICACION:</B>
             Toda notificación o aviso relacionado con el presente arrendamiento será informado al arrendatario en el inmueble  arrendado. 

             <B>XIII) TERMINACION DEL CONTRATO:</B>
              Este contrato terminará en los siguientes casos: a) Por incumplimiento de parte $conjunsen2 $arrendatario a cualquiera de las obligaciones asumidas en este contrato; y b) Por infracción a cualquiera de las prohibiciones en él establecidas. Al ocurrir la terminación del contrato, el arrendante podrá exigir la desocupación y entrega del inmueble arrendado, sin necesidad de diligencia judicial o administrativa alguna, por renunciar al desahucio $el_ellaC y autoriza expresamente $al_la $arrendador a suspender los servicios de que goza el inmueble. Se acuerda además que por ningún caso $el_ellaC podrá dar por terminado unilateralmente el plazo original del presente contrato o sus prórrogas; y si así lo hiciere o desocupare el inmueble antes del vencimiento del plazo original o de sus prórrogas, se obliga a pagar los cánones de arrendamiento pendientes hasta la finalización del plazo como si fuere de plazo vencido.

             <B>XIV) DOMICILIO Y RENUNCIAS:</B> $el_ellaC para todos los efectos de las obligaciones que contrae por medio de este instrumento se somete a la competencia de los tribunales de esta ciudad. En caso de acción judicial, será depositario de los bienes que se embarguen la persona que el arrendante designe, a quien $el_ellaC releva de la obligación de rendir fianza y cuentas, serán  por cuenta del  mismo los honorarios, gastos e impuestos que cause este contrato y las costas procesales y gastos personales de los juicios que en razón del presente contrato se promovieren, aunque conforme las reglas generales no fuere condenado a ellas. Así se expresaron los otorgantes a quienes expliqué los efectos legales de esta Acta Notarial que consta de $HOJAS hojas; y leído que les he explicado todo lo
             escrito, en un solo acto, sin interrupción, lo ratifican y firmamos. DE TODO DOY FE.
</p>

<div style='width:120%%;margin-top:3%;'>
<table style='border:1px'>
    <tr>
        <td>F._______________________________</td>
        <td>F._______________________________</td>
    </tr>
    <tr>
        <td style='font-size:12px;padding-right:60px;'>" . strtoUpper($Nombreform) . "</td>
        <td style='font-size:12px;padding-right:60px;'>" . strtoUpper($Nombreform2) . "</td>
    </tr>
</table>

</div>
</div>";
    $contenido .= "
            </div></body>";
    $contenido .= "</html>";
    // $iddepto1 = departamentoComprobar($deptoform, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso
    // $idmunic1 = municipioComprobar($municform, $conex, $iddepto1); //Comprobar si existe regresa id sino devuelve el id del munic de ingreso
    // $iddepto2 = departamentoComprobar($deptoform2, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso
    // $idmunic2 = municipioComprobar($municform, $conex, $iddepto2); //Comprobar si existe regresa id sino devuelve el id del munic de ingreso
    $ID_Cliente1 = ingresarClientes($Duiform, $Nombreform, $Nitform, $telefonoform, $oficioform, $fechanacform, $deptoform, $municform, $tdocumentoform, $nacionalidadform, $Generoform, $conex); //Ingresar o comprobar el cliente1
    $ID_Cliente2 = ingresarClientes($Duiform2, $Nombreform2, $Nitform2, $telefonoform2, $oficioform2, $fechanacform2, $deptoform2, $municform2, $tdocumentoform2, $nacionalidadform2, $Generoform2, $conex); //Ingresar o comprobar el cliente2
    $lugarcontrato = departamentoComprobar($lugarcontrato, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso
    $tipo=2;
   
            $respuesta = ingresarContratos($NombreCont, $fechaRec, $horaRec, $Id_UsuarioL,$tipo,$ID_Cliente1,$ID_Cliente2, $conex);  
         
    $filename = $_SERVER['DOCUMENT_ROOT'] . "/CL/DOCS/CONTRATOS/Contratoarrendamiento/$respuesta.pdf";
    actualizarContratos($respuesta, $filename, $conex);
    echo $contenido;

    //Instanciando y usando la clase de Dompdf
    $dompdf = new Dompdf();
    $dompdf->loadHtml(ob_get_clean());
    // Opcional, el uso del tipo de pagina y la alineacion
    $dompdf->setPaper('letter', 'portrait');
    // Renderizar el html de $contenido a PDF
    $dompdf->render();
    $nombre_archivo = 'contratoPPARRE.pdf';
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
                        <span style=''>Arrendamiento de inmueble</span>
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