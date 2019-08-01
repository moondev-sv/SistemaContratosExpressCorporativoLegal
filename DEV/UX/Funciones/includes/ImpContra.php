<?php
error_reporting(0);

function revisar($contenido)
{
    $visualizador = "<script src='/CL/DEV/UX/Plugins/ckeditor/ckeditor.js'></script>
    <textarea name='' id='ckeditor' class='ckeditor' value='$contenido'></textarea>";
    echo $visualizador;
}

?>
<?php
//Archivo de conexi&oacute;n a la base de datos
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

    //-----------------------------Variables Generales

    $VinALetra = "";
    $GrabaALetra = "";
    $PlacaALetra = "";
    $NumMALetra = "";
    $ttarjetaletra = "";
    $numpolizaletras = "";
    $Nomttarjeta = "";
    $ttarjeta = $_POST['ttarjeta'];
    $PlacaA = $_POST['PlacaA'];
    $MarcaA = $_POST['MarcaA'];
    $ModelA = $_POST['ModelA'];
    $ColoA = $_POST['ColoA'];
    $AnioA = $_POST['AnioA'];
    $anio_carro = rtrim(numero_letra($AnioA));
    $CapaA = $_POST['CapaA'];
    $ClaseA = $_POST['ClaseA'];
    $TraccionA = "";
    $TipoA = $_POST['TipoA'];
    if ($TipoA==""){
        $TIPO="";
    }else{
        $TIPO=" TIPO: " . ucfirst(strtolower($TipoA)).";";
    }
    $DominioA = "";
    $NumMA = $_POST['NumMA'];
    $GrabaA = $_POST['GrabaA'];
    $VinA = $_POST['VinA'];
    //$CalidadA =$_POST['CalidadA'];
    $PrecioA = $_POST['PrecioA'];
    $PrecioAC = $_POST['PrecioAC'];
    $fechaRec = $_POST['fechaRec'];
    $horaRec = $_POST['horaRec'];
    $NomNota = $_POST['NomNota'];
    $DomNota = $_POST['DomNota'];
    $lugarcontrato = $_POST['lugarcontrato'];
    $NombreCont = "Venta de Vehiculo";
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
    $edadcp = (date_format($date, 'Y-m-d'));
        
        $edadcp = (CalculaEdad($edadcp));
  
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
    
      //formateando horas y minutos
    $date = date_create($_POST['hora_cp']);
    $hora_poder1 = date_format($date, 'H');
    $hora_poder1 = numero_letra($hora_poder1);
      
    $date = date_create($_POST['hora_cp']);
    $minutos_poder1 = date_format($date, 'i');
    $minutos_poder1 = numero_letra($minutos_poder1);
           
      //formateando horas y minutos
    $date = date_create($_POST['hora_cp2']);
    $hora_poder2 = date_format($date, 'H');
    $hora_poder2 = numero_letra($hora_poder2);
  
    $date = date_create($_POST['hora_cp2']);
    $minutos_poder2 = date_format($date, 'i');
    $minutos_poder2 = numero_letra($minutos_poder2);
         
                       //sacando mes y dias y año
    $date = date_create($_POST['fecha_cp2']);
    $dia_poder2 = date_format($date, 'j');
    $dia_poder2 = numero_letra($dia_poder2);

    $date = date_create($_POST['fecha_cp2']);
    $mes_poder2 = date_format($date, 'n');
    $mes_poder2 = mes($mes_poder2);

    $date = date_create($_POST['fecha_cp2']);
    $anio_poder2 = date_format($date, 'Y');
    $anio_poder2 = numero_letra($anio_poder2);

    $date = date_create($_POST['fecha_cp']);
    $dia_poder1 = date_format($date, 'j');
    $dia_poder1 = numero_letra($dia_poder1);

    $date = date_create($_POST['fecha_cp2']);
    $mes_poder1 = date_format($date, 'n');
    $mes_poder1 = mes($mes_poder1);

    $date = date_create($_POST['fecha_cp2']);
    $anio_poder1 = date_format($date, 'Y');
    $anio_poder1 = numero_letra($anio_poder1);
  
  
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

   
    $arreglo = str_split($CapaA);
    $i=0;
    $res="";
    $CapaAletra_="";
    foreach ($arreglo as $key => $value) {
    if(is_numeric($value)){
    $res.= $value;
    $i++;
    }
    else if($value=="-"){
    $CapaAletra_ .=" gui&oacute;n";
    $i++;
    }else if($value=="."){
        $i++;
    $CapaAletra_ .= " punto ";
    break;
    }
    else{
        $CapaAletra_ .= $value;
    }
    } 
$arreglo=substr($CapaA, $i);

$arreglo=str_split($arreglo);
    foreach ($arreglo as $key => $value) {
        if(is_numeric($value)){
           
                $res2.= $value;        
           
        
        }
        else if($value=="."){
  
            $CapaAletra2_ .= "";

            }
            else {
            $CapaAletra2_ .= $value;
        }
    }

    $res=numero_letra($res);
    if($res2 == "00"){
        $res2 = "cero cero";
    }
    else{
        $res2=numero_letra($res2);
    }
    
    $CapaAletra = ucfirst($res);
    $CapaAletra .= $CapaAletra_ . $res2 . $CapaAletra2_;
   

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
    $arreglo = str_split(ucfirst($NumMA));
    $NumMAletra = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $NumMAletra .= " " . strtoupper($value);
        } else if ($value == "-") {
            $NumMAletra .= " GUI&Oacute;N";
        } else {
            $res = numero_letra($value);
            $NumMAletra .= " " .strtoupper($res);
        }
    }
    //$NumMAletra = ucfirst($NumMAletra);

    //$NumMAletra = ucsentence($NumMAletra);
    //
    $arreglo = str_split(ucfirst($GrabaA));
    $GrabaAletra = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $GrabaAletra .= " " . strtoupper($value);

        } else if ($value == "-") {
            $GrabaAletra .= " GUI&Oacute;N";
        } else {
            $res = numero_letra($value);
            $GrabaAletra .= " " . strtoupper($res);
        }
    }
   

    //$GrabaAletra=ucsentence($GrabaAletra);
    //
    $arreglo = str_split(ucfirst($VinA));
    $VinAetra = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value) && $value != "-") {
            $VinAetra .= " " . strtoupper($value);

        } else if ($value == "-") {
            $VinAetra .= " GUI&Oacute;N";
        } else {
            $res = numero_letra($value);
            $VinAetra .= " " . strtoupper($res);
        }
    }
    
    //$VinAetra=ucsentence($VinAetra);
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

if ($_POST['traccion']!=""){
    $arreglo = str_split($_POST['traccion']);
    $traccion = "";
    foreach ($arreglo as $key => $value) {
        if (!is_numeric($value)) {
            if($value=="x" || $value=="X"){
                $traccion .= " POR";

            }else{
            $traccion .= " " . strtoupper($value);
        }

        } else if ($value == "-") {
            $traccion .= " gui&oacute;n";
        } else {
            $res = strtoupper(numero_letra($value));
            $traccion .= " " . $res;
        }
    }
    $campo_traccion="; TRACCIÓN: $traccion.";
}
else{
    $campo_traccion =".";
}
   



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
                $ttarjetaletra .= " " . strtoupper($value);

            } else {
                $res = numero_letra($value);
                $ttarjetaletra .= " " . $res;
            }
        }
       
        $Nomttarjeta = "según Tarjeta de Circulaci&oacute;n número $ttarjetaletra,";
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

        //CONVIRTIENDO POLIZA A LETRAS
        $arreglo = str_split($numeropoliza);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $numpolizaletras .= " gui&oacute;n";
            } else if (!is_numeric($value)) {
                $numpolizaletras .= " " . strtoupper($value);

            } else {
                $res = numero_letra($value);
                $numpolizaletras .= " " . $res;
            }
        }
        $Nomttarjeta = "según P&oacute;liza número $numpolizaletras emitida por la Dirección General de Aduanas, el día $dialetra de $mesletra del año $anioletra,";
    }
    else if ($ttarjeta == 3) { //TARJETA CIRCULACION

            //sacando mes y dias y año
            $fecha_poder=$_POST['fecha_poder'];
    $date = date_create($fecha_poder);
    $dia_poder = date_format($date, 'j');
    $dia_poder = numero_letra($dia_poder);

    $date = date_create($fecha_poder);
    $mes_poder = date_format($date, 'n');
    $mes_poder = mes($mes_poder);

    $date = date_create($fecha_poder);
    $anio_poder = date_format($date, 'Y');
    $anio_poder = numero_letra($anio_poder);

    //formateando horas y minutos
    $date = date_create($_POST['hora_poder']);
    $hora_poder = date_format($date, 'H');
    $hora_poder = numero_letra($hora_poder);

    $date = date_create($_POST['hora_poder']);
    $minutos_poder = date_format($date, 'i');
    $minutos_poder = numero_letra($minutos_poder);

         //formateando horas y minutos



        $Nomttarjeta = "según Documento Privado de compraventa de vehiculo, otorgado en la ciudad de ".ucwords(strtolower($_POST['ciudad_poder']))." del departamento de ".ucwords(strtolower($_POST['departamento_poder'])).", a las $hora_poder horas con $minutos_poder minutos del día $dia_poder de $mes_poder de $anio_poder, ante los oficios Notariales de ".ucwords($_POST['oficios_poder']).", a favor del primer compareciente,";
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
            $el_ellaV = "EL VENDEDOR";
            $senior = "del señor";
            $al_la = "al";
            $conjunsen = "del";
            $primer ="primer";
            $comprador ="comprador";
            $duenio = "es dueño y actual poseedor";
            $poseedor = "poseedor";
            $due = "dueño";
            $el_ellav_ = "él";
            $portador_portadora_v = "portador";
            $conocido_conocida = "conocido como " . ucwords(strtolower($Conocidoform)) . ",";
            $apoderado_apoderadav = "Apoderado";
        } else if ($Generoform == 2 || strtolower($Generoform) == "femenino") {
            $el_ellaV = "LA VENDEDORA";
            $conjunsen = "de la";
            $comprador ="compradora";
            $al_la = "a la";
            $senior = "de la señora";
            $duenio = "es dueña y actual poseedora";
            $poseedor = "poseedora";
            $due = "dueña";
            $primer ="primera";
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
        $edad = (CalculaEdad($edad));
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
            $el_ellaV = "EL VENDEDOR";
            $senior = "el señor";
            $conjunsen = "del";
            $primer ="primer";
            $comprador ="comprador";
            $al_la = "al";
            $duenio = "es dueño y actual poseedor";
            $due = "dueño";
            $poseedor = "poseedor";
            $el_ellav_ = "él";
            $conocido_conocida = "conocido como  " . ucwords(strtolower($Conocidoform)) . ",";
            $portador_portadora_v = "portador";
            $apoderado_apoderadav = "Apoderado";
        } else {
            $el_ellaV = "LA VENDEDORA";
            $senior = "la señora";
            $al_la = "a la";
            $primer ="primera";
            $conjunsen = "de la";
            $comprador ="compradora";
            $duenio = "es dueña y actual poseedora";
            $due = "dueña";
            $poseedor = "poseedora";
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
        
        $edad = (CalculaEdad($edad));
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
            $el_ellaC = "EL COMPRADOR";
            $senior2 = "del señor";
            $primer ="primer";
            $al_la2 = "al";
            $due = "dueño";
            $conjunsen2 = "del";
            $comprador2 ="comprador";
            $poseedor = "poseedor";
            $el_ellac_ = "él";
            $apoderado_apoderadac = "Apoderado";
            $portador_portadora_c = "portador";
            $segundo = "segundo";
            $conocido_conocida2 = "conocido como  " . ucwords(strtolower($Conocidoform2)) . ",";

        } else if ($Generoform2 == 2 || strtolower($Generoform2) == "femenino") {
            $el_ellaC = "LA COMPRADORA";
            $senior2 = "de la señora";
            $conjunsen2 = "de la";
            $comprador2 ="compradora";
            $al_la2 = "a la";
            $due = "dueña";
            $primer ="primera";
            $segundo = "segunda";
            $poseedor = "poseedora";
            $el_ellac_ = "ella";
            $apoderado_apoderadac = "Apoderada";
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
            $el_ellaC = "EL COMPRADOR";
            $senior2 = "del señor";
            $al_la2 = "al";
            $due = "dueño";
            $segundo = "segundo";
            $conjunsen2 = "del";
            $comprador2 ="comprador";
            $poseedor = "poseedor";
            $el_ellac_ = "él";
            $portador_portadora_c = "portador";
            $apoderado_apoderadac = "Apoderado";
            $conocido_conocida2 = "conocido como  " . ucwords(strtolower($Conocidoform2)) . ",";

        } else if ($Generoform2 == 2 || strtolower($Generoform2) == "femenino") {
            $el_ellaC = "LA COMPRADORA";
            $senior2 = "de la señora";
            $al_la2 = "a la";
            $due = "dueña";
            $segundo = "segunda";
            $conjunsen2 = "de la";
            $comprador2 ="compradora";
            $poseedor = "poseedora";
            $el_ellac_ = "ella";
            $portador_portadora_c = "portadora";
            $apoderado_apoderadac = "Apoderada";
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
            $el_ellacp = "EL VENDEDOR";
            $seniorcp = "del señor";
            $al_lacp = "al";
            $dueniocp = "soy dueño y actual poseedor";
            $duecp = "dueño";
            $poseedorcp = "poseedor";
            $el_ellacp_ = "él";
            $portador_portadora_cp = "portador";
            $conocido_conocidacp = "conocido como  " . ucwords(strtolower($Conocidoformcp)) . ",";
            $de_la_lo_mismo_misma = "del mismo";
            $satisfaccioncp_auntentica = " en nombre de su representado";
            $satisfaccioncp = " en nombre de mi representado";

            //Estos son los datos del vendedor, y se sobre escriben por que dependeria de si tiene poder o no
            $el_ellaV = "EL VENDEDOR";
            $duenio = "es dueño y actual poseedor";

        } else {
            $el_ellacp = "LA VENDEDORA";
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
            $satisfaccioncp_auntentica = " en nombre de su representada";
            $satisfaccioncp = " en nombre de mi representada";

            //Estos son los datos del vendedor, y se sobre escriben por que dependeria de si tiene poder o no
            $el_ellaV = "LA VENDEDORA";
            $duenio = "es dueña y actual poseedora";
        }
        if ($_POST['Generoformcp2'] == 1 || strtolower($_POST['Generoformcp2']) == "masculino") {
            $el_ellaC = "EL COMPRADOR";
            $senior2 = "del señor";
            $al_la2 = "al";
            $due = "dueño";
            $poseedor = "poseedor";
            $el_ellac_ = "él";
            $portador_portadora_c = "portador";
            $conocido_conocidacp2 = "conocido como  " . ucwords(strtolower($_POST['Conocidoformcp2'])) . ",";
            $el_ellaC = "EL COMPRADOR";
         
            $de_la_lo_mismo_misma2="del mismo";
            

        } else if ($_POST['Generoformcp2'] == 2 || strtolower($_POST['Generoformcp2']) == "femenino") {
            $el_ellaC = "LA COMPRADORA";
            $senior2 = "de la señora";
            $al_la2 = "a la";
            $due = "dueña";
            $poseedor = "poseedora";
            $el_ellac_ = "ella";
            $portador_portadora_c = "portadora";
            $conocido_conocidacp2 = "conocida como  " . ucwords(strtolower($_POST['Conocidoformcp2'])) . ",";
          
            $de_la_lo_mismo_misma2="de la misma";
        }
        if ((str_word_count($_POST['Conocidoformcp'], 0)) < 1){ //Si el campo conocidos no ha ingresado nada se coloca un espacio vacio y por ende no se imprime en el contrato
            $conocido_conocidacp = "";
        }
        if ((str_word_count($_POST['Conocidoformcp2'], 0)) < 1){ //Si el campo conocidos no ha ingresado nada se coloca un espacio vacio y por ende no se imprime en el contrato
            $conocido_conocidacp2 = "";
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


        //-------------
        $fechacp2=$_POST['fechanacformcp2'];
        $date = date_create($fechacp2);
        $edadcp2 = (date_format($date, 'Y-m-d'));
        $edadcp2 = CalculaEdad($edadcp2);
        $edadcp2 = numero_letra($edadcp2);


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

        //---------------
        if ($_POST['tdocumentoformcp2'] == 1) {
            $tdocumentoformcpletr2a = "Documento Único de Identidad";
        } else if ($_POST['tdocumentoformcp2'] == 2) {
            $tdocumentoformcpletra2 = "Pasaporte";
        } else if ($_POST['tdocumentoformcp2'] == 3) {
            $tdocumentoformcpletra2 = "Carnet de residente";
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

        //----------------------
        $Duiformcpletra2 = "";
        $Nitformcpletra2 = "";
        //Convertir DUI a letras
        //
        $arreglo = str_split($_POST['Duiformcp2']);

        foreach ($arreglo as $key => $value) {
            if (!is_numeric($value) && $value != "-") {
                $Duiformcpletra2 .= " " . $value;

            } else if ($value == "-") {
                $Duiformcpletra2 .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Duiformcpletra2 .= " " . $res;
            }
        }
        //Convertir NIT a letras
        $arreglo = str_split($_POST['Nitformcp2']);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Nitformcpletra2 .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Nitformcpletra2 .= " " . $res;
            }
        }


      

       
        if(($_POST['vendedor_cpoder'])==0){
            $conpoder_vendedor="";
            $conpodertexto = " actuando en nombre y representaci&oacute;n de ".strtoupper($Nombreformcp).", $conocido_conocidacp de $edadcp años de edad, $oficioformcp, del domicilio de la ciudad de  " . ucwords(strtolower($municformcp)) . ", departamento de  " . ucwords(strtolower($deptoformcp)) . ", con Documento Único de Identidad número $Duiformcpletra, y con Número de Identificaci&oacute;n Tributaria $Nitformcpletra, en mi calidad de $apoderado_apoderadav ".$_POST['t_poder_1']." $de_la_lo_mismo_misma, ";

            $conpodertexto2 = "DOY FE: a) De ser legítima y suficiente la personería con que actúa $conjunsen $primer compareciente, por haber tenido a la vista el Testimonio de Escritura Pública de Poder ".$_POST['t_poder_1'].", otorgado en la ciudad de ".ucwords(strtolower($_POST['ciudad_cp']))." del departamento de ".ucwords(strtolower($_POST['departamento_cp'])).", a las $hora_poder1 horas con $minutos_poder1 minutos del día $dia_poder1 del $mes_poder1 de $anio_poder1, ante los oficios Notariales de ".$_POST['oficios_cp'].", a favor del primer compareciente, en el cual se le faculta para otorgar el presente acto; b) Que los otorgantes me manifiestan que reconocen todos los demás conceptos vertidos en el anterior documento que hoy se legaliza; y c) Que son auténticas las firmas que calzan el anterior documento, por haber sido puestas a mi presencia de su puño y letra por los otorgantes.- Así se expresaron $La_Lo_com comparecientes a quienes expliqué los efectos legales de la presente Acta Notarial, que consta de <b>$HOJAS</b> hojas útiles; y leído que les hube íntegramente todo lo escrito en un solo acto, sin interrupci&oacute;n, manifiestan su conformidad, ratifican su contenido y firmamos.- DE TODO DOY FE.- ";
            $conpodertexto3 = "personería que al final de este documento relacionaré, ";
            
        }
        else{
            $conpodertexto="";
            $conpodertexto2="";
            $conpodertexto3="";
            $conpoder_vendedor="";
        }
        //-----------------------------------------------------------conpoder_vendedor----------------------------------------------------------
        if(($_POST['comprador_cpoder'])==0){
            $conpodertexto_comprador="";
            $conpodertexto_comprador1 = " actuando en nombre y representaci&oacute;n de ".strtoupper($_POST['Nombreformcp2']).", $conocido_conocidacp2 de $edadcp2 años de edad, ".$_POST['oficioformcp2'].", del domicilio de la ciudad de  " . ucwords(strtolower($_POST['municformcp2'])) . ", departamento de  " . ucwords(strtolower($_POST['deptoformcp2'])) . ", con Documento Único de Identidad número $Duiformcpletra2, y con Número de Identificaci&oacute;n Tributaria $Nitformcpletra2, en mi calidad de $apoderado_apoderadac ".$_POST['t_poder_2']."  $de_la_lo_mismo_misma2, ";

            $conpodertexto2 = "DOY FE: a) De ser legítima y suficiente la personería con que actúa $conjunsen2 $segundo compareciente, por haber tenido a la vista el Testimonio de Escritura Pública de Poder ".$_POST['t_poder_2'].", otorgado en la ciudad de ".ucwords(strtolower($_POST['ciudad_cp2']))." del departamento de ".ucwords(strtolower($_POST['departamento_cp2'])).", a las $hora_poder2 horas con $minutos_poder2 minutos del día $dia_poder2 del $mes_poder2 de $anio_poder2, ante los oficios Notariales de ".$_POST['oficios_cp2'].", a favor del compareciente, en el cual se le faculta para otorgar el presente acto; b) Que los otorgantes me manifiestan que reconocen todos los demás conceptos vertidos en el anterior documento que hoy se legaliza; y c) Que son auténticas las firmas que calzan el anterior documento, por haber sido puestas a mi presencia de su puño y letra por los otorgantes.- Así se expresaron $La_Lo_com2 comparecientes a quienes expliqué los efectos legales de la presente Acta Notarial, que consta de <b>$HOJAS</b> hojas útiles; y leído que les hube íntegramente todo lo escrito en un solo acto, sin interrupci&oacute;n, manifiestan su conformidad, ratifican su contenido y firmamos.- DE TODO DOY FE.- ";
            $conpodertexto_comprador3 = "personería que al final de este documento relacionaré, ";
        }
        else{
            $conpodertexto_comprador="";
            $conpodertexto_comprador1="";
            $conpodertexto_comprador2="";
            $conpodertexto_comprador3="";
        }
    } else {
        $conpodertexto2 = " DOY FE: Que son auténticas las firmas que calzan el anterior documento, por haber sido puestas a mi presencia de su puño y letra por $La_Lo_com comparecientes, a quienes expliqué los efectos legales de la presente Acta Notarial, que consta de <b>$HOJAS</b> hojas útiles, y leído que les hube íntegramente lo escrito, en un solo acto sin interrupci&oacute;n, ratifican su contenido y firmamos.- DE TODO DOY FE.-";
    }
    if($PrecioAC==0){
                
            $DOLARS = strtoupper((numero_letra($PrecioA)))." DOLARES CON CERO CERO CENTAVOS DE DOLAR DE LOS ESTADOS UNIDOS DE AMERICA";
        }
        else if($PrecioAC==00){
            $DOLARS = strtoupper(numero_letra($PrecioA))." DOLARES CON CERO CERO CENTAVOS DE DOLAR DE LOS ESTADOS UNIDOS DE AMERICA";
        }
        else{
            $DOLARS = strtoupper(numero_letra($PrecioA))." DOLARES CON ".(numero_letra($PrecioAC))." CENTAVOS DE DOLAR DE LOS ESTADOS UNIDOS DE AMERICA";
        }
      
    $contenido = "<html>";
    $contenido .= "<head>
            <style>
            html {
                margin: 0cm;
                }
                body {
                margin: 35mm 30mm 35mm 30mm;
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
                    
            </style>";
    $contenido .= "</head>";
    $contenido .= "<body> ";
    $contenido .= "<div><p>

            NOSOTROS: Por una parte, 
            
            <B>" . strtoUpper($Nombreform) . "</B>, $conocido_conocida de $edad años de edad, $oficioform, del domicilio de la ciudad de " . ucwords(strtolower($municform)) . ", departamento de " . ucwords(strtolower($deptoform)) . ",  $portador_portadora_v de mi $tdocumentoformletra número $Duiformletra y con Número de Identificaci&oacute;n Tributaria $Nitformletra, $conpodertexto $conpoder_vendedor quien en el transcurso de este documento me denominaré <b>''$el_ellaV''</b>; 
            
            y por otra parte <b>" . strtoUpper($Nombreform2) . "</b>, $conocido_conocida2 de $edad2 años de edad, $oficioform2, del domicilio de la ciudad de " . ucwords(strtolower($municform2)) . ", departamento de " . ucwords(strtolower($deptoform2)) . ", $portador_portadora_c de mi $tdocumentoform2letra número $Duiformletra2, y con Número de Identificaci&oacute;n Tributaria $Nitformletra2, $conpodertexto_comprador1 quien en el transcurso de este documento me denominaré <b>''$el_ellaC''</b>, 
            
            OTORGAMOS: I)<B> DECLARACIÓN DE DOMINIO:</B> Que por medio de este instrumento celebramos un contrato de compraventa de vehículo, que se regirá conforme a las cláusulas siguientes: Que " . strtolower($el_ellaV) . " $Nomttarjeta $duenio de un vehículo con las características siguientes: PLACAS: " . ucfirst(strtolower($PlacaAletra)) . "; MARCA: " . ucfirst(strtolower($MarcaAletra)) . "; MODELO: " . ucfirst(strtolower($ModelAletra)) . "; COLOR: " . ucfirst(strtolower($ColoA)) . "; AÑO: " . ucfirst(strtolower($anio_carro)) . "; CAPACIDAD: ".ucfirst($CapaAletra)."; CLASE: " . ucfirst(strtolower($ClaseAletra)) . ";$TIPO NÚMERO DE MOTOR: " .($NumMAletra) . "; NÚMERO DE CHASIS GRABADO: " . ($GrabaAletra) . "; NÚMERO DE CHASIS VIN: ".($VinAetra)."$campo_traccion - 
            
            II) <B>PRECIO:</B> Que por el precio de " . $DOLARS . ", que he recibido a mi entera satisfacci&oacute;n$satisfaccioncp de parte $conjunsen2 $comprador2, le vendo a $el_ellac_ libre de gravámenes y de vicios ocultos el vehículo antes descrito, transfiriéndole en consecuencia, la tradici&oacute;n del dominio, posesi&oacute;n, usos, goce y demás derechos reales y personales que ejerce sobre dicho vehículo, quien se obliga a responder del Saneamiento de Ley, entregándoselo materialmente con las llaves y el documento de propiedad pertinente.- 
            
            III) <b>ACEPTACIÓN:</b> Asimismo " . strtolower($el_ellaC) . " acepto la venta y tradici&oacute;n que por medio de este documento se me hace del vehículo antes descrito, con los derechos que se me transfieren con la tradici&oacute;n, además de las llaves y el documento de propiedad aludido, recibiéndolo materialmente.- 
            
            IV) <B>DOMICILIO ESPECIAL:</B> $contratantes para los efectos legales de este instrumento señalamos como domicilio especial el de esta ciudad, a cuyos Tribunales nos sometemos expresamente.- Así nos expresamos, ratificamos su contenido, y firmamos, en la ciudad de $lugarcontrato, a los $diasrecletra días del mes de $mesrecletra del año $aniorecletra.-
        </p>
<br>
<div style='width:120%%;margin-top:3%;'>
<table style='border:1px'>
    <tr>
        <td >F._______________________________</td>
        <td >F._______________________________</td>
    </tr>
    <tr>
        <td style='font-size:12px;padding-right:60px;'>" . strtoUpper($Nombreform) . "</td>
        <td style='font-size:12px;padding-right:60px;'>" . strtoUpper($Nombreform2) . "</td>
    </tr>
</table>

</div>
</div>
";
$Nombreform2=strtoupper($Nombreform2);
    $contenido .= "<br><br><br><br><br><div><p>En la ciudad de $lugarcontrato, a las $horaRecletra horas y $minutorecletra minutos del día $diasrecletra de $mesrecletra del año $aniorecletra. Ante mí, ".strtoupper($NomNota).", $notarioGen, del domicilio de la ciudad de " . ucwords(strtolower($DomNota)) . ", 
    
    comparecen $Los_Las_senio: " . strtoupper($Nombreform) . ", $conocido_conocida de $edad años de edad, $oficioform, del domicilio de " . ucwords(strtolower($municform)) . ", departamento de " . ucwords(strtolower($deptoform)) . ", a quien no conozco pero identifico por medio de su  $tdocumentoformletra número $Duiformletra y con Número de Identificaci&oacute;n Tributaria $Nitformletra,$conpodertexto$conpodertexto3 quien en el transcurso de este documento se denominará como <b>''$el_ellaV''</b>; 
    y " . strtoupper($Nombreform2) . ", $conocido_conocida2 de $edad2 años de edad, $oficioform2, del domicilio de la ciudad de " . ucwords(strtolower($municform2)) . ", departamento de " . ucwords(strtolower($deptoform2)) . ", a quien no conozco pero identifico por medio de su $tdocumentoform2letra número $Duiformletra2, y con Número de Identificaci&oacute;n Tributaria $Nitformletra2,$conpodertexto_comprador1$conpodertexto_comprador2 quien en el transcurso de este documento se denominará <b>''$el_ellaC''</b>; 
    
    y ME DICEN: 
    
    I)<B> DECLARACIÓN DE DOMINIO:</B> Que " . strtolower($el_ellaV) . " $Nomttarjeta $duenio de un vehículo con las características siguientes: PLACAS: " . ucfirst(strtolower($PlacaAletra)) . "; MARCA: " . ucfirst(strtolower($MarcaAletra)) . "; MODELO: " . ucfirst(strtolower($ModelAletra)) . "; COLOR: " . ucfirst(strtolower($ColoA)) . "; AÑO: " . ucfirst(strtolower($anio_carro)) . "; CAPACIDAD: $CapaAletra; CLASE: " . ucfirst(strtolower($ClaseAletra)) . ";$TIPO NÚMERO DE MOTOR: " . ucfirst($NumMAletra) . "; NÚMERO DE CHASIS GRABADO: " . ucfirst($GrabaAletra) . "; NÚMERO DE CHASIS VIN: $VinAetra$campo_traccion -  
    

    II) <B>PRECIO:</B> Que por el precio de <span style='text-transform: uppercase;'>$DOLARS,</span> que ha recibido a su entera satisfacci&oacute;n$satisfaccioncp_auntentica de parte $conjunsen2 $comprador2, le vende a $el_ellac_ libre de gravámenes y de vicios ocultos el vehículo antes descrito, transfiriéndole en consecuencia, la tradicion del dominio, posesi&oacute;n, usos, goce y demás derechos reales y personales que ejerce sobre dicho vehículo, quien se obliga a responder del Saneamiento de Ley, entregándoselo materialmente con las llaves y el documento de propiedad pertinente. 
    
    III)<b> ACEPTACIÓN:</b> Asimismo " . strtolower($el_ellaC) . " acepta la venta y tradici&oacute;n que por medio de este instrumento se le hace del vehículo antes descrito, con los derechos que se le transfieren con la tradici&oacute;n, además de las llaves y el documento de propiedad aludido, recibiéndolo materialmente.- 
    
    IV) <B>DOMICILIO ESPECIAL:</B> $contratantes para los efectos legales de este instrumento señalan como domicilio especial el de esta ciudad, a cuyos Tribunales se someten expresamente.-
Yo, $GenNota, $conpodertexto2

</p>
<br>
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
                    $tipo=1;
                    $respuesta = ingresarContratos($NombreCont, $fechaRec, $horaRec, $Id_UsuarioL,$tipo,$ID_Cliente1,$ID_Cliente2, $conex);
    // echo $respuesta;
    $filename = $_SERVER['DOCUMENT_ROOT'] . "/CL/DOCS/CONTRATOS/ContratoVehiculo/$respuesta.pdf";

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
                        <span style=''>Compraventa de Vehiculo</span>
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