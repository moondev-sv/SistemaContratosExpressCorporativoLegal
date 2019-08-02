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
/*------------------------------------------------------------------Variables Contrato -----------------*/
$Numero_mutuo = $_POST['Numero_mutuo'];  //Numeros
$Libro_mutuo = $_POST['Libro_mutuo'];    //Numeros

$Cant_Recivi_mutuo = $_POST['Cant_Recivi_mutuo'];           //Precio dolares
$Cant_Recivi_mutuo = strtoupper(numero_letra($Cant_Recivi_mutuo));

$Cant_Recivi_mutuo_cent = $_POST['Cant_Recivi_mutuo_cent']; //Precio centavos
$Cant_Recivi_mutuo_cent = strtoupper(numero_letra($Cant_Recivi_mutuo_cent));



$Suma_para_cancel_mutua = $_POST['Suma_para_cancel_mutua'];     //Precio dolares
$Suma_para_cancel_mutua = strtoupper(numero_letra($Suma_para_cancel_mutua));


$Suma_para_cancel_mutua_cent = $_POST['Suma_para_cancel_mutua_cent'];   //Precio centavos
$Suma_para_cancel_mutua_cent = strtoupper(numero_letra($Suma_para_cancel_mutua_cent));


$Suma_para_tramites_mutua = $_POST['Suma_para_tramites_mutua'];     //Precio dolares
$Suma_para_tramites_mutua = strtoupper(numero_letra($Suma_para_tramites_mutua));

$Suma_para_tramites_mutua_cent = $_POST['Suma_para_tramites_mutua_cent'];   //Precio centavos
$Suma_para_tramites_mutua_cent = strtoupper(numero_letra($Suma_para_tramites_mutua_cent));



$plazo_pagar_mutuo = $_POST['plazo_pagar_mutuo']; //Cantidad dias/meses/años
$Fecha_vencimiento_mutuo = $_POST['Fecha_vencimiento_mutuo']; //Fecha
   //sacando mes y dias y año
   $date = date_create($Fecha_vencimiento_mutuo);
   $diasrec = date_format($date, 'j');
   $Fecha_vencimiento_mutuo_dia = numero_letra($diasrec);

   $date = date_create($Fecha_vencimiento_mutuo);
   $mesrec = date_format($date, 'n');
   $Fecha_vencimiento_mutuo_mes = mes($mesrec);

   $date = date_create($Fecha_vencimiento_mutuo);
   $aniorec = date_format($date, 'Y');
   $Fecha_vencimiento_mutuo_anio = numero_letra($aniorec);



$cantidad_cuotas_mensuales_mutuo = $_POST['cantidad_cuotas_mensuales_mutuo'];                //Numero
$cantidad_cuotas_mensuales_mutuo = strtoupper(numero_letra($cantidad_cuotas_mensuales_mutuo));

$costo_cuotas_mensuales_mutuo = $_POST['costo_cuotas_mensuales_mutuo'];                     //Precio dolares
$costo_cuotas_mensuales_mutuo = strtoupper(numero_letra($costo_cuotas_mensuales_mutuo));


$costo_cuotas_mensuales_mutuo_cent = $_POST['costo_cuotas_mensuales_mutuo_cent'];           //Precio centavos
$costo_cuotas_mensuales_mutuo_cent = strtoupper(numero_letra($costo_cuotas_mensuales_mutuo_cent));



$cant_acciones_mutuo = $_POST['cant_acciones_mutuo'];                                       //Numero
$cant_acciones_mutuo = strtoupper(numero_letra($cant_acciones_mutuo));


$costo_acciones_mutuo = $_POST['costo_acciones_mutuo'];                                     //Precio dolares
$costo_acciones_mutuo = strtoupper(numero_letra($costo_acciones_mutuo));



$costo_acciones_mutuo_cent = $_POST['costo_acciones_mutuo_cent'];                           //Precio centavos
$dia_pago_cuota_mutuo = $_POST['dia_pago_cuota_mutuo'];                                    //NUMERO
$dia_pago_cuota_mutuo = strtoupper(numero_letra($dia_pago_cuota_mutuo));
$dia_pago_primer_cuota_mutuo = $_POST['dia_pago_primer_cuota_mutuo'];                       //Fecha
//sacando mes y dias y año
$date = date_create($dia_pago_primer_cuota_mutuo);
$diasrec = date_format($date, 'j');
$dia_pago_primer_cuota_mutuodia = numero_letra($diasre);

$date = date_create($dia_pago_primer_cuota_mutuo);
$mesrec = date_format($date, 'n');
$dia_pago_primer_cuota_mutuomes = mes($mesrec);

$date = date_create($dia_pago_primer_cuota_mutuo);
$aniorec = date_format($date, 'Y');
$dia_pago_primer_cuota_mutuoanio = numero_letra($aniorec);




$Interes_nominal_mutuo = $_POST['Interes_nominal_mutuo'];       //Porciento 0.00
$tasa_interes_mutuo = $_POST['tasa_interes_mutuo'];             //Porciento 0.00

$descuento_prestamo_mutuo = $_POST['descuento_prestamo_mutuo'];               //Precio dolares
$descuento_prestamo_mutuo = strtoupper(numero_letra($descuento_prestamo_mutuo));

$descuento_prestamo_mutuo_cent = $_POST['descuento_prestamo_mutuo_cent'];    //Precio centavos
$descuento_prestamo_mutuo_cent = strtoupper(numero_letra($descuento_prestamo_mutuo_cent));

$valor_acciones_mutuo = $_POST['valor_acciones_mutuo'];                      //Precio dolares
$valor_acciones_mutuo = (numero_letra($valor_acciones_mutuo));

$valor_acciones_mutuo_cent = $_POST['valor_acciones_mutuo_cent'];           //Precio centavos
$valor_acciones_mutuo_cent = (numero_letra($valor_acciones_mutuo_cent));


if($valor_acciones_mutuo!=""){
    $acciones=" y $valor_acciones_mutuo Dólares con $valor_acciones_mutuo_cent Centavos de Dólar de los Estados Unidos de América, en concepto de compra de acciones sobre el monto otorgado.";
}else
{
    $acciones="";
}


$Cantidad_fiadores_mutuo = $_POST['Cantidad_fiadores_mutuo'];  //Select

if ($Cantidad_fiadores_mutuo!=0){
    $i=2;
    $genero=0;
    $texto_deudores="";
    while($i<=($Cantidad_fiadores_mutuo+1))
    {
        $Conocidoform = $_POST['Conocidoform'.$i];
        
        $Generoform = $_POST['Generoform'.$i];
        if (!isset($Conocidoform)){
            $conocido_conocida = "";
        }
        if ($Generoform == 1 || strtolower($Generoform) == "masculino") {
                if (isset($Conocidoform)){
                    $conocido_conocida = "conocido como " . ucwords(strtolower($Conocidoform)) . ",";
                    $genero+=1;
                }
            }else if ($Generoform == 2 || strtolower($Generoform) == "femenino") {
                if (isset($Conocidoform)){
                    $conocido_conocida = "conocida como " . ucwords(strtolower($Conocidoform)) . ",";
                    $genero+=0;
                }
            }
            
        $Nombreform = strtolower($_POST['Nombreform'.$i]);
        $Duiform = $_POST['Duiform'.$i];
        $Nitform = $_POST['Nitform'.$i];
        

        $oficioform = $_POST['oficioform'.$i];
        $fechanacform = $_POST['fechanacform'.$i];
        $date = date_create($fechanacform);
        $edad = (date_format($date, 'Y-m-d'));
        $edad = CalculaEdad($edad);
        $edad = numero_letra($edad);

        
      

        if (isset($_POST['nacionalidadform'.$i])) {
            $nacionalidadform = $_POST['nacionalidadform'.$i];
        } else {
            $nacionalidadform = "1";
        }

        $deptoform = $_POST['deptoform'.$i];
        $municform = $_POST['municform'.$i];
        $tdocumentoform = $_POST['tdocumentoform'.$i];
        if ($tdocumentoform == 1) {
            $tdocumentoformletra = "Documento Único de Identidad";
        } else if ($tdocumentoform == 2) {
            $tdocumentoformletra = "Pasaporte";
        } else if ($tdocumentoform == 3) {
            $tdocumentoformletra = "Carnet de residente";
        } else {
            $tdocumentoformletra = $tdocumentoform[$i];
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
        

        $texto_deudores.="<B>" . strtoUpper($Nombreform) . "</B>, ".$conocido_conocida." de ".$edad." años de edad, " . ucwords(strtolower($oficioform)) . ", del domicilio de la ciudad de " . ucwords(strtolower($municform)) . ", departamento de " . ucwords(strtolower($deptoform)) . ",  ".$portador_portadora_v." de mi ".$tdocumentoformletra." número ".$Duiformletra." y con Número de Identificación Tributaria ".$Nitformletra.";";
        $i++;
    }

}
if($Cantidad_fiadores_mutuo >1){
    if($genero>=1){
        $fiadores_codeudores="FIADORES Y CODEUDORES SOLIDARIOS";
    }
    else {
        $fiadores_codeudores="FIADORAS Y CODEUDORAS SOLIDARIAS";
    }
}
else
{
    if($genero>=1){
        $fiadores_codeudores="FIADOR Y CODEUDOR SOLIDARIO";
    }
    else {
        $fiadores_codeudores="FIADORA Y CODEUDORA SOLIDARIA";
    }
}
//----------------------------------------Modificando valores

   //Convirtiendo Numero_mutuo de numeros a letras
   $arreglo = str_split($Numero_mutuo);
   $Numero_mutuo = "";
   
   foreach ($arreglo as $key => $value) {
       if (!is_numeric($value)) {
           $Numero_mutuo .= " ".$value;
       } else if ($value == "-" || $value== " ") {
           $Numero_mutuo .= " GUI&Oacute;N";
       } else if (is_numeric($value)) {
           $Numero_mutuo .= " ".numero_letra($value);
       }
   }
   $Numero_mutuo= strtoupper($Numero_mutuo);

//Convirtiendo Libro_mutuo de numeros a letras
$arreglo = str_split($Libro_mutuo);
$Libro_mutuo = "";

foreach ($arreglo as $key => $value) {
    if (!is_numeric($value)) {
        $Libro_mutuo .= " ".$value;
    } else if ($value == "-" || $value== " ") {
        $Libro_mutuo .= " GUI&Oacute;N";
    } else if (is_numeric($value)) {
        $Libro_mutuo .= " ".numero_letra($value);
    }
}
$Libro_mutuo= strtoupper($Libro_mutuo);


   //Convirtiendo Suma_para_cancel_mutua de numeros a letras
   $arreglo = str_split($plazo_pagar_mutuo);
   $plazo_pagar_mutuo = "";
   
   foreach ($arreglo as $key => $value) {
       if (!is_numeric($value)) {
           $plazo_pagar_mutuo .= $value;
       } else if ($value == "-" || $value== " ") {
           $plazo_pagar_mutuo .= " GUI&Oacute;N";
       } else if (is_numeric($value)) {
           $numero .= $value;
       }
   }

    $numero = (numero_letra($numero));
$plazo_pagar_mutuo = $numero.$plazo_pagar_mutuo;


 //Convirtiendo Suma_para_cancel_mutua de numeros a letras
 $antes = strstr($Interes_nominal_mutuo, '.', true);
$antes = (numero_letra($antes));


$tasa_interes_mutuo_1 = strstr($tasa_interes_mutuo,'.',true);
$tasa_interes_mutuo_2 = substr(strstr($tasa_interes_mutuo,'.',false),-2);

$tasa_interes_mutuo_1 = (numero_letra($tasa_interes_mutuo_1));
$tasa_interes_mutuo_2 = (numero_letra($tasa_interes_mutuo_2));
 


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
        if ($minutorec == 0) {
            $minutorecletra = "cero";
        } else {
            $minutorecletra = numero_letra($minutorec);
        }
        


    $NomNota = $_POST['NomNota'];
    $DomNota = $_POST['DomNota'];
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
            $el_ellaV = "el deudor";
            $enterada ="enterado";
            $dela_deudora ="del deudor";
            $al_la_deudor ="al deudor";
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
            $enterada ="enterada";
            $el_ellaV = "la deudora";
            $dela_deudora ="de la deudora";
            $conjunsen = "de la";
            $al_la_deudor ="a la deudora";
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
            $el_ellaV = "el deudor";
            $dela_deudora ="del deudor";
            $al_la_deudor ="al deudor";
            $enterada ="enterado";
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
            $el_ellaV = "la deudora";
            $dela_deudora ="del deudora";
            $senior = "la señora";
            $enterada ="enterada";
            $al_la_deudor ="a la deudora";
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

    $HOJAS= numero_letra($_POST['cant_hojas']);
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

    NUMERO $Numero_mutuo LIBRO $Libro_mutuo MUTUO GARANTIZADO CON $fiadores_codeudores.- En la ciudad de $lugarcontrato, a las $horaRecletra horas y $minutorecletra minutos del día $diasrecletra  de $mesrecletra de dos mil diecinueve.- Ante mí, $NomNota, $notarioGen, de este domicilio, comparece,
            
            <B>" . strtoUpper($Nombreform) . "</B>, $conocido_conocida de $edad años de edad, " . ucwords(strtolower($oficioform)) . ", del domicilio de la ciudad de " . ucwords(strtolower($municform)) . ", departamento de " . ucwords(strtolower($deptoform)) . ",  $portador_portadora_v de mi $tdocumentoformletra número $Duiformletra y con Número de Identificación Tributaria $Nitformletra, $conpodertexto quien en el transcurso de este documento me denominaré <b>''".strtoupper($el_ellaV)."''</b>;

            y ME DICE: 
            <B>I) MONTO:</B> Que en este acto recibe en calidad de MUTUO MERCANTIL de la CAJA DE CRÉDITO DE SANTA ANA, SOCIEDAD COOPERATIVA DE RESPONSABILIDAD LIMITADA DE CAPITAL VARIABLE,  del domicilio de SANTA ANA,  con Número de Identificación Tributaria cero doscientos diez- doscientos ochenta mil ciento setenta y seis guión cero cero uno guión dos, que en el curso del presente instrumento se denominará la “Caja”,  la suma de $Cant_Recivi_mutuo DOLARES CON $Cant_Recivi_mutuo_cent CENTAVOS DE DÓLAR DE LOS ESTADOS UNIDOS DE AMÉRICA, cantidad de dinero que en este acto recibe en su totalidad y a su entera satisfacción. 

            <B>II) DESTINO:</B> Queda expresamente convenido que $el_ellaV destinará la suma mutuada, así: $Suma_para_cancel_mutua Dólares con $Suma_para_cancel_mutua_cent Centavos de Dólar de los Estados Unidos de América, para cancelar saldo de su Tarjeta de Crédito en mora, otorgada por esta Caja; y $Suma_para_tramites_mutua Dólares con $Suma_para_tramites_mutua_cent Centavos de Dólar de los Estados Unidos de América, para gastos de trámite del crédito. 
            
            <B>III) PLAZO:</B> ".ucfirst($el_ellaV)." se obliga a pagar la suma mutuada en el plazo de $plazo_pagar_mutuo, contado a partir de esta fecha, día $Fecha_vencimiento_mutuo_dia de $Fecha_vencimiento_mutuo_mes de $Fecha_vencimiento_mutuo_anio. 
            
            <B>IV) ORIGEN DE LOS FONDOS:</B> El presente crédito se otorga con Fondos Propios de la Caja. 
            
            <B>V) FORMA DE PAGO:</B> ".ucfirst($el_ellaV)." se obliga a pagar la suma mutuada por medio de $cantidad_cuotas_mensuales_mutuo cuotas mensuales, fijas, vencidas y sucesivas de $costo_cuotas_mensuales_mutuo DÓLARES CON $costo_cuotas_mensuales_mutuo_cent CENTAVOS DE DÓLAR DE LOS ESTADOS UNIDOS DE AMÉRICA cada una, que comprenden pago de intereses, cuota de seguro de deuda del cero punto sesenta y cinco por ciento mensual sobre saldos de capital, abono a capital y compra de $cant_acciones_mutuo acciones equivalente a $costo_acciones_mutuo Dólares de los Estados Unidos de América; y una cuota final por el saldo de capital, intereses y seguro de deuda pendiente al vencimiento del plazo pactado; pagaderas los días $dia_pago_cuota_mutuo de cada uno de los meses comprendidos dentro del plazo; debiendo pagar la primera cuota el día $dia_pago_primer_cuota_mutuodia de $dia_pago_primer_cuota_mutuomes de $dia_pago_primer_cuota_mutuoanio. Si la fecha de pago a que se refiere este contrato venciere en día feriado o fin de semana, ésta se prorrogará para el siguiente día hábil y la Caja no cobrará cargos por pago extemporáneo. ".ucfirst($el_ellaV)." determinará libremente la compañía aseguradora de su conveniencia, pudiendo sustituirla durante el plazo de este contrato, si conviniera a sus intereses, en este caso, $el_ellaV deberá comunicar a la Caja en el plazo de tres días hábiles la designación de la aseguradora con la que ha contratado la póliza de seguro exigida como condición de este préstamo. 
            
            <B>VI) INTERESES:</b> La suma mutuada devengará el interés nominal del $antes por ciento anual sobre saldos, ajustable, variable y revisable a opción de la Junta Directiva de la Caja, de acuerdo a las fluctuaciones de la tasa de mercado. Se hace constar  que los intereses a que se refiere esta cláusula están calculados en base al año calendario y se aplicarán únicamente por los saldos insolutos. Para información $dela_deudora, la tasa de interés efectiva anualizada de este crédito es del $tasa_interes_mutuo_1 PUNTO $tasa_interes_mutuo_2  por ciento anual. Cualquier modificación a la tasa de interés nominal, será comunicada $al_la_deudor mediante carteleras instaladas el lugares visibles dentro de las oficinas de la Caja, pudiendo además utilizar cualquier otro medio de comunicación masiva por parte de la Caja, lo cual es aceptado en este acto por $el_ellaV. Queda convenido que la Caja no cobrará intereses sobre intereses devengados y no pagados. ".ucfirst($el_ellaV)." se obliga a pagar la nueva cuota que resultare de las modificaciones antes relacionadas sin variar el plazo originalmente convenido. ".ucfirst($el_ellaV)." expresamente conviene que para todos los efectos judiciales o extrajudiciales del presente contrato, las variaciones de la tasa de interés, el pago de primas de seguros y otros conceptos aplicables a este crédito, se probarán plena y fehacientemente con la constancia extendida por el Contador de la Caja con el visto bueno de la Gerente General, lo cual desde ya es aceptado por $el_ellaV.
            
            <B>VII) TASA DE INTERÉS MORATORIA:</B> En caso de mora, sin perjuicio del derecho de la Caja a entablar  acción ejecutiva, la tasa de interés se aumentará en CINCO puntos anuales, adicional al interés pactado o en vigencia más IVA y se calculará sobre saldos de capital en mora, sin que ello signifique prórroga del plazo y sin perjuicio de los demás efectos legales de la mora. El interés moratorio se mantendrá fijo hasta la extinción total del presente crédito, de conformidad a lo establecido en el literal a) y j) del artículo diecinueve de la Ley de Protección al Consumidor. 
            
            <B>VIII) LUGAR E IMPUTACIÓN DE PAGOS.-</B> Todo pago lo hará $el_ellaV en esta ciudad, en las oficinas principales de la Caja, o en el lugar y forma que la Caja autorice y se imputará primero a intereses, primas de seguro, y a capital, si lo hubiere. 
            
            <B>IX) AUTORIZACIONES:</B> ".ucfirst($el_ellaV)." autoriza a la Caja para: a) Verificar el destino del crédito, para tal efecto faculta a la Caja para que ésta pueda efectuar inspecciones en los lugares, tiempo y forma que la Caja estime conveniente a fin de determinar el correcto uso de los fondos; y b) ".ucfirst($el_ellaV)." autoriza a descontar de este préstamo la cantidad de $descuento_prestamo_mutuo Dólares con $descuento_prestamo_mutuo_cent Centavos de Dólar de los Estados Unidos de América, más IVA, sobre el monto otorgado en concepto de comisión por estructuración y análisis del crédito;$acciones
            
            <B>X) CADUCIDAD DEL PLAZO:</B> Se tendrá por vencido el plazo de esta obligación, la cual se volverá exigible inmediatamente y en su totalidad, como si fuera de plazo vencido, en cualquiera de los siguientes casos: a) Por mora en el pago de una o más cuotas de capital e intereses en la forma pactada; b) Por acción judicial iniciada por terceros o por la misma Caja en contra $dela_deudora, por obligaciones distintas al presente préstamo; c) Por incumplimiento por parte $dela_deudora de cualquiera de las condiciones esenciales de este contrato; d) Si $el_ellaV invirtiere parte o la totalidad del préstamo en fines distintos a los estipulados en este contrato; e) Si $el_ellaV fuere calificado con una categoría de riesgo que obligue a la Caja a constituir mayores reservas conforme al instructivo de calificación de riesgo correspondiente;  f) Por la participación $dela_deudora en delitos de lavado de dinero y de activos, narcotráfico o financiamiento del terrorismo o en su caso, cuando $el_ellaV no cumpliere con los requerimientos administrativos necesarios para que la Caja obtenga el pleno conocimiento $dela_deudora o cuando realice operaciones que puedan ser consideradas como sospechosas o irregulares, conforme a la Ley Contra el Lavado de Dinero y de Activos; y g) Por involucramiento $dela_deudora en la comisión de operaciones y/o actos ilícitos, directamente o por medio de terceros, sean éstos personas naturales o jurídicas. 
            
            <B>XI) GARANTÍA:</B> El presente préstamo queda garantizado con la siguiente garantía $fiadores_codeudores. Presente desde el inicio de este instrumento $texto_deudores y ME DICE: Que está $enterada de todas las obligaciones contraídas en este instrumento por $el_ellaV y en consecuencia se constituye $fiadores_codeudores $dela_deudora a favor de la Caja, para responder si fuera necesario por el fiel cumplimiento de todas las obligaciones que por el presente contrato contrae $el_ellaV, sometiéndose a los mismos términos y condiciones en que lo ha hecho $el_ellaV; y b) ORDEN IRREVOCABLE DE DESCUENTO: ".ucfirst($el_ellaV)." deberá firmar Orden Irrevocable de Descuento a favor de la Caja (EN ALGUNOS CASOS ESTE LITERAL NO SE CONSIGNA).  
            
            <B>XII)  HONORARIOS Y GASTOS:</B> Serán por cuenta $dela_deudora todos los gastos y honorarios que genere el otorgamiento del presente instrumento. 
            
            <B>XIII) DESIGNACIÓN NOTARIAL Y DECLARACIÓN JURADA NOTARIAL:</B> a) ".ucfirst($el_ellaV)." declara que ha designado y contratado de manera libre y espontánea, los servicios profesionales del notario autorizante de este instrumento que contiene crédito aprobado por la Caja, y que no ha sido sujeto de imposición directa o indirecta de parte de la Caja para designar al notario que autoriza este instrumento; en consecuencia, declara que de parte de la Caja, sus funcionarios, ejecutivos y/o empleados, no ha tenido ninguna limitación ni dilación directa o indirecta para que libremente haya podido designar al notario de su preferencia, en tal sentido libera y exonera a la Caja y a las personas antes mencionadas de toda responsabilidad derivada del artículo diecinueve literal d) de la Ley de Protección al Consumidor; y b) El suscrito Notario declara bajo juramento que: i) La Caja le ha proporcionado un modelo de contrato, con todas las explicaciones necesarias para otorgar ante sus oficios notariales el contrato correspondiente a éste crédito; y ii) Que de parte de la Caja, sus funcionarios, ejecutivos y/o empleados, no ha tenido ninguna limitación ni dilación directa o indirecta, para el ejercicio de la libertad notarial, en consecuencia libera y exonera a todos ellos de toda responsabilidad. 
            
            <B>XIV) SOMETIMIENTO AL DOMICILIO Y GASTOS:</B> Para todos los efectos de las obligaciones que por este instrumento contraen $el_ellaV y codeudora, se ha convenido que se someten a los Tribunales Judiciales competentes de esta ciudad. Será depositario de los bienes que se le embarguen la Caja o la persona que ésta indique, relevando a quien se nombre de la obligación de rendir fianza y cuentas, siendo de cargo $dela_deudora y codeudora las costas Procesales, aunque conforme a las reglas generales no fueren condenados a ellas, así como los gastos en que la Caja incurriere en el cobro del préstamo concedido, inclusive los gastos personales. Así se expresaron los comparecientes a quienes les expliqué los efectos legales de la presente escritura; y leída que se las hube íntegramente, en un solo acto sin interrupción, manifiestan su conformidad, ratifican su contenido y firmamos. DE TODO DOY FE.- 




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
";

   
    $contenido .= "
            </div></body>";
    $contenido .= "</html>";

    // $iddepto1 = departamentoComprobar($deptoform, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso
    // $idmunic1 = municipioComprobar($municform, $conex, $iddepto1); //Comprobar si existe regresa id sino devuelve el id del munic de ingreso
    //$iddepto2 = departamentoComprobar($deptoform2, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso
    //$idmunic2 = municipioComprobar($municform, $conex, $iddepto2); //Comprobar si existe regresa id sino devuelve el id del munic de ingreso
    
    $ID_Cliente1 = ingresarClientes($Duiform, $Nombreform, $Nitform, $telefonoform, $oficioform, $fechanacform, $deptoform, $municform, $tdocumentoform, $nacionalidadform, $Generoform, $conex); //Ingresar o comprobar el cliente1
     $ID_Cliente2 = "0";
    //$ID_Cliente2 = ingresarClientes($Duiform2, $Nombreform2, $Nitform2, $telefonoform2, $oficioform2, $fechanacform2, $iddepto2, $idmunic2, $tdocumentoform2, $nacionalidadform2, $Generoform2, $conex); //Ingresar o comprobar el cliente2

    $lugarcontrato = departamentoComprobar($lugarcontrato, $conex); //Comprobar si existe regresa id sino devuelve el id del depto de ingreso

    $tipo = 3;//Mutuo
    $respuesta = ingresarContratos($NombreCont, $fechaRec, $horaRec, $Id_UsuarioL,$tipo,$ID_Cliente1,$ID_Cliente2, $conex);
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
    }
    else{
        $Nombreform2 = $_POST['Nombreform2'];
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
                        <img src='logo2.png' height='100%' width='100%'>
                    </div>
                    <div style='margin-top:31%;margin-left:19%;width:100%;text-align:center'>
                        <span style=''>Contrato Mutuo </span>
                    </div>
                    <div style='margin-top:11%;margin-left:19%;width:100%;text-align:center'>
                        <span style=''>Caja de Credito de Santa Ana</span>
                    </div>
                    <div style='margin-top:12%;margin-left:19%;width:100%;text-align:center'>
                        <span style=''>".ucwords(strtolower(utf8_decode($Nombreform)))." </span>
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