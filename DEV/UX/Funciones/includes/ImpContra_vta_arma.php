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
    $HOJAS= numero_letra($_POST['cant_hojas']);
/*-----------------------------Variables Contrato -----------------*/
//
    $Matricula_Arma = $_POST['Matricula_Arma'];
    $Marca_arma = $_POST['Marca_arma'];
    $Tipo_Arma = $_POST['Tipo_Arma'];
    $Serie_arma = $_POST['Serie_arma'];
    $Calibre_arma = $_POST['Calibre_arma'];
    $Modelo_arma = $_POST['Modelo_arma'];
    $pavon_arma = $_POST['pavon_arma'];
    $LargoC_arma = $_POST['LargoC_arma'];
    $Numero_Arma = $_POST['Numero_Arma'];
    $arreglo = str_split($Numero_Arma);
    $Numero_Arma = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $Numero_Arma .= " " . $value;

        } else if ($value == "-") {
            $Numero_Arma .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $Numero_Arma .= " " . $res;
        }
    }


    $Clasificacion_arma = $_POST['Clasificacion_arma'];
    $FechaExpira_arma = $_POST['FechaExpira_arma'];
    $licencia_armas = $_POST['licencia_armas'];

//

    $date = date_create($FechaExpira_arma); //Separando Fecha dada
    $mes = date_format($date, 'n');
    $FechaExpira_arma_mes = "";
    $anio = date_format($date, 'Y');
    $FechaExpira_arma_anio = "";
    $dia = date_format($date, 'j');
    $FechaExpira_arma_dia = "";
    //Convirtiendo los dias anios y meses con su respectiva nomenclatura
    $FechaExpira_arma_dia = numero_letra($dia);
    $FechaExpira_arma_anio = numero_letra($anio);
    $FechaExpira_arma_mes = mes($mes);


      //Convirtiendo marca a letras o numeros
      $arreglo = str_split($licencia_armas);
      
      $licencia_armas = "";
      foreach ($arreglo as $key => $value) {
          if (!is_numeric($value) && $value != "-") {
              $licencia_armas .= " " . $value;
  
          } else if ($value == "-") {
              $licencia_armas .= " gui&oacute;n";
          } else {
              $res = numero_letra($value);
              $licencia_armas .= " " . $res;
          }
      }

    //Convirtiendo marca a letras o numeros
    $arreglo = str_split($Matricula_Arma);
    $Matricula_Arma = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $Matricula_Arma .= " " . $value;

        } else if ($value == "-") {
            $Matricula_Arma .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $Matricula_Arma .= " " . $res;
        }
    }

    //Convirtiendo marca a letras o numeros
    $arreglo = str_split($Serie_arma);
    $Serie_arma = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $Serie_arma .= " " . $value;

        } else if ($value == "-") {
            $Serie_arma .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $Serie_arma .= " " . $res;
        }
    }
    
    //Convirtiendo marca a letras o numeros
    $arreglo = str_split($Calibre_arma);
    $numero = "";
    $res = "";
    foreach ($arreglo as $key => $value) {
        if (is_numeric($value)) {
            $numero .= $value;
        } else {
            $res .= $value;
        }
    }
    $Calibre_arma = numero_letra($numero);
    $Calibre_arma .= $res;

    //Convirtiendo marca a letras o numeros
    $arreglo = str_split($Modelo_arma);
    $Modelo_arma = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $Modelo_arma .= $value;

        } else if ($value == "-") {
            $Modelo_arma .= " gui&oacute;n";
        } else {
            $res = numero_letra($value);
            $Modelo_arma .= " " . $res;
        }
    }

    //Convirtiendo marca a letras o numeros
    $arreglo = str_split($LargoC_arma);
    $numero = "";
    $res = "";
    foreach ($arreglo as $key => $value) {
        if (is_numeric($value)) {
            $numero .= $value;
        } else {
            $res .= $value;
        }
    }
    $LargoC_arma = numero_letra($numero);
    $LargoC_arma .= $res;

    //-----------------------------Variables Notario

    $fechaRec = $_POST['fechaRec'];
    $horaRec = $_POST['horaRec'];
    $NomNota = $_POST['NomNota'];
    $DomNota = $_POST['DomNota'];
    $NitNota = $_POST['NitNota'];
    
    //Convirtiendo marca a letras o numeros
    $arreglo = str_split($NitNota);
    $NitNota = "";
    foreach ($arreglo as $key => $value) {
        if ($value == "-") {
            $NitNota .= " gui&oacute;n";
        }
        else if (!is_numeric($value)) {
            $NitNota .= $value;
        } else {
            $res = numero_letra($value);
            $NitNota .= " " . $res;
        }
    }
    
    $lugarcontrato = $_POST['lugarcontrato'];
    $NombreCont = "Arrendamiento";
    $Id_UsuarioL = $_POST['Id_Usuario'];

    $GenNota = $_POST["GenNota"];
    if ($_POST["GenNota"] == 1) {
        $GenNota = "el suscrito Notario";
        $notarioGen = "notario";
    } else {
        $GenNota = "la suscrita Notaria";
        $notarioGen = "notaria";
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
    $edadcp = (date_format($date, 'Y'));

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
            $arrendador = "arrendador";
            $senior = "del señor";
            $el_ella_seniora = "el señor";
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
            $conjunsen = "de la";
            $arrendador = "arrendadora";
            $al_la = "a la";
            $senior = "de la señora";
            $el_ella_seniora = "la señora";
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
            $senior = "el señor";
            $el_ella_seniora = "el señor";
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
            $senior = "la señora";
            $el_ella_seniora = "la señora";
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
            $el_ella_seniora2 = "el señor";
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
            $el_ella_seniora2 = "la señora";
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
            $el_ella_seniora2 = "el señor";
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
            $el_ella_seniora2 = "la señora";
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
            $conocido_conocidacp = "conocido como  " . ucwords(strtolower($Conocidoformcp)) . ",";
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
            $conocido_conocidacp = "conocida como  " . ucwords(strtolower($Conocidoformcp)) . ",";
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

        $conpodertexto = "actuando en nombre y representación $seniorcp $Nombreformcp, $conocido_conocidacp de $edadcp años de edad, $oficioformcp, del domicilio de la ciudad de $municformcp, departamento de $deptoformcp, con Documento Unico de Identidad número $Duiformcpletra, y con Número de Identificación Tributaria $Nitformcpletra, en mi calidad de $apoderado_apoderadav Especial $de_la_lo_mismo_misma CON PODER";

        $conpodertexto2 = "DOY FE: a) De ser legítima y suficiente la personería con que actúa el primer compareciente, por haber tenido a la vista el Testimonio de Escritura Pública de Poder Especial, otorgado en esta ciudad, a las $horaRecletra horas del día $diasrecletra de $mesrecletra de $aniorecletra, ante los oficios Notariales de $NomNota, por $NomNota a favor del primer compareciente, en el cual se le faculta para otorgar el presente acto; b) Que los otorgantes me manifiestan que reconocen todos los demás conceptos vertidos en el anterior documento que hoy se legaliza; y c) Que son auténticas las firmas que calzan el anterior documento, por haber sido puestas a mi presencia de su puño y letra por los otorgantes.- Así se expresaron $La_Lo_com comparecientes a quienes expliqué los efectos legales de la presente Acta Notarial, que consta de <b>$HOJAS</b> hojas útiles; y leído que les hube íntegramente todo lo escrito en un solo acto, sin interrupción, manifiestan su conformidad, ratifican su contenido y firmamos.- DE TODO DOY FE.- ";

        $conpodertexto3 = "personería que al final de este documento relacionaré";
    } else {
        $conpodertexto2 = " DOY FE: Que son auténticas las firmas que calzan el anterior documento, por haber sido puestas a mi presencia de su puño y letra por $La_Lo_com comparecientes, a quienes expliqué los efectos legales de la presente Acta Notarial, que consta de <b>$HOJAS</b> hojas útiles, y leído que les hube íntegramente lo escrito, en un solo acto sin interrupción, ratifican su contenido y firmamos.- DE TODO DOY FE.-";
    }

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
    $contenido .= "</head>";
    $contenido .= "<body>";
    $contenido .= "<div>
    <p>

    PODER ESPECIAL. En la ciudad de $lugarcontrato, a las $horaRecletra horas y $minutorecletra minutos del día $diasrecletra de $mesrecletra del año $aniorecletra. Ante mí, $NomNota, $notarioGen, del domicilio de la ciudad de " . ucwords(strtolower($DomNota)) . ", con Número de Identificación Tributaria $NitNota.

    COMPARECE: $el_ella_seniora, <B>" . strtoUpper($Nombreform) . "</B>, $conocido_conocida de $edad años de edad, " . ucwords(strtolower($oficioform)) . ", del domicilio de la ciudad de " . ucwords(strtolower($municform)) . ", departamento de " . ucwords(strtolower($deptoform)) . ",  $portador_portadora_v de mi $tdocumentoformletra número $Duiformletra y con Número de Identificación Tributaria $Nitformletra;

    y ME DICE: Que por medio de este instrumento confiere PODER ESPECIAL amplio, bastante y suficiente en cuanto a derecho fuere necesario a favor

    $senior2 <b>" . strtoUpper($Nombreform2) . "</b>, $conocido_conocida2 de $edad2 años de edad, " . ucwords(strtolower($oficioform2)) . ", del domicilio de la ciudad de " . ucwords(strtolower($municform2)) . ", departamento de " . ucwords(strtolower($deptoform2)) . ", $portador_portadora_c de mi $tdocumentoform2letra número $Duiformletra2, y con Número de Identificación Tributaria $Nitformletra2;

    con licencia para portar y hacer uso de arma de fuego número $licencia_armas; para que en su nombre y representación venda al contado el arma de fuego de su propiedad, la cual es de las siguientes características: Matrícula Número: $Matricula_Arma; Marca: $Marca_arma; Tipo: $Tipo_Arma; Serie: $Serie_arma; Calibre: $Calibre_arma; Modelo: $Modelo_arma; Pavón: $pavon_arma; Largo de Cañón: $LargoC_arma; Número de Registro: $Numero_Arma; Clasificación de arma: $Clasificacion_arma; Fecha de expiración: $FechaExpira_arma_dia de $FechaExpira_arma_mes del $FechaExpira_arma_anio; para lo cual la faculta para fijar y recibir el precio de dicha arma y/o cantidades provenientes de la negociación, quedando ampliamente facultado el apoderado para determinar todas las modalidades, cláusulas, pactos, sometimientos y/o condiciones bajo las cuales se celebrará el contrato respectivo para la realización de dicha venta, queda asimismo facultado para firmar la escritura pública de compraventa, así como para hacer la tradición respectiva del dominio del arma antes descrita. Finalmente faculta a su apoderado para sustituir total o parcialmente este poder, pudiendo nombrar uno o más sustitutos, con los que podrán actuar conjunta o separadamente, como asimismo podrán revocar dichos nombramientos; facultades todas que explique al compareciente cerciorándome que las conoce y comprende, y por eso las confiere a sus apoderados.- Así se expresó el compareciente a quien expliqué los efectos legales de este instrumento y leído que le hube todo lo escrito, íntegramente en un solo acto sin interrupción, ratifica su contenido y firmamos.- DOY FE

            </p>



<div style='width:100%%;margin-top:5%;'>
<table style='border:1px'>
            <tr>
                <td style='padding-right:60px;'>F._______________________________</td>
                <td style='padding-right:60px;'>F._______________________________</td>
            </tr>
            <tr>
                <td style='font-size:12px;padding-right:60px;'>" . strtoUpper($Nombreform) . "</td>
                <td style='font-size:12px;padding-right:60px;'>" . strtoUpper($Nombreform2) . "</td>
            </tr>
        </table>
</div>
";

    $contenido .= "
            </div></body>";
    $contenido .= "</html>";

    $iddepto1 = departamentoComprobar($deptoform, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso
    $idmunic1 = municipioComprobar($municform, $conex, $iddepto1); //Comprobar si existe regresa id sino devuelve el id del munic de ingreso
    $iddepto2 = departamentoComprobar($deptoform2, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso
    $idmunic2 = municipioComprobar($municform, $conex, $iddepto2); //Comprobar si existe regresa id sino devuelve el id del munic de ingreso
    $ID_Cliente1 = ingresarClientes($Duiform, $Nombreform, $Nitform, $telefonoform, $oficioform, $fechanacform, $deptoform, $municform, $tdocumentoform, $nacionalidadform, $Generoform, $conex); //Ingresar o comprobar el cliente1
    $ID_Cliente2 = ingresarClientes($Duiform2, $Nombreform2, $Nitform2, $telefonoform2, $oficioform2, $fechanacform2, $deptoform2, $municform2, $tdocumentoform2, $nacionalidadform2, $Generoform2, $conex); //Ingresar o comprobar el cliente2

    $lugarcontrato = departamentoComprobar($lugarcontrato, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso

    $tipo = 4;//Venta de arma
    $respuesta = ingresarContratos($NombreCont, $fechaRec, $horaRec, $Id_UsuarioL,$tipo,$ID_Cliente1,$ID_Cliente2, $conex);
    $filename = $_SERVER['DOCUMENT_ROOT'] . "/CL/DOCS/CONTRATOS/ContratoArma/$respuesta.pdf";
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
                        <span style=''>Poder compraventa de arma de fuego</span>
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
?>