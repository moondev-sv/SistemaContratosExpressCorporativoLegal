<?php
error_reporting(0);

//Archivo de conexi&oacute;n a la base de datos
include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UX\Funciones\includes/funciones_corporativo.php"; 
include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UI\BD\conexion.php"; //temporal
require_once $_SERVER['DOCUMENT_ROOT'] . "/CL/DEV/UX/Plugins/dompdf/autoload.inc.php";
include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UI/Login/session.php";
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

    //-----------------------------Variables Generales
    $cantidad_v = $_POST['cantv']; //Cantidad de usuarios elejidos
    $cantidad_c = $_POST['cantc']; //Cantidad de usuarios elejidos
    $Nombreform = $_POST['Nombreform'];
    $aniocarro = numero_letra($_POST['AnioA']);
    $i = 0;
    while ($i < $cantidad_v) { // ACA SE OPERAN TODOS LOS VENDEDORES
        $Generoform = $_POST['Generoform'];
        $Conocidoform = $_POST['Conocidoform'];

        if ($Generoform[$i] == 1) {
            $el_ellaV = "EL VENDEDOR";
            $senior = "el señor";
            $conjunsen = "del";
            $al_la = "al";
            $duenio = "soy dueño y actual poseedor";
            $due = "dueño";
            $poseedor = "poseedor";
            $el_ellav_ = "él";
            $conocido_conocida = "conocido como  " . ucwords(strtolower($Conocidoform[$i])) . ",";
            $portador_portadora_v = "portador";
            $apoderado_apoderadav = "Apoderado";
            $he = "he";
            $ami_nuestra = "a mi";
            $le_vendo = "le vendo";
            $denominara = "denominará";
            $le_vende = "le vende";
            $a_favor = "el primer compareciente";
            
        } else {
            $el_ellaV = "LA VENDEDORA";
            $senior = "la señora";
            $al_la = "a la";
            $conjunsen = "de la";
            $duenio = "soy dueña y actual poseedora";
            $due = "dueña";
            $poseedor = "poseedora";
            $el_ellav_ = "ella";
            $portador_portadora_v = "portadora";
            $conocido_conocida = "conocida como  " . ucwords(strtolower($Conocidoform[$i])) . ",";
            $apoderado_apoderadav = "Apoderada";
            $he = "he";
            $ami_nuestra = "a mi";
            $le_vendo = "le vendo";
            $denominara = "denominará";
            $le_vende = "le vende";
            $a_favor = "la primera compareciente";
            
        }

        $Nombreform = $_POST['Nombreform'];
        $Duiform = $_POST['Duiform'];
        $Nitform = $_POST['Nitform'];
        if (isset($_POST['telefonoform'])) {
            $telefonoform = $_POST['telefonoform'];
        } else {
            $telefonoform[$i] = "";
        }
        $oficioform = $_POST['oficioform'];
        $fechanacform = $_POST['fechanacform'];
        $date = date_create($fechanacform[$i]);
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
        if ($tdocumentoform[$i] == 1) {
            $tdocumentoformletra = "Documento Único de Identidad";
        } else if ($tdocumentoform[$i] == 2) {
            $tdocumentoformletra = "Pasaporte";
        } else if ($tdocumentoform[$i] == 3) {
            $tdocumentoformletra = "Carnet de residente";
        }
        $Duiformletra= "";
        $Nitformletra = "";
        //Convertir DUI a letras
        $arreglo = str_split($Duiform[$i]);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Duiformletra .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Duiformletra .= " " . $res;
            }
        }
        //Convertir NIT a letras
        $arreglo = str_split($Nitform[$i]);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Nitformletra .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Nitformletra .= " " . $res;
            }
        }

        if ((str_word_count($conocido_conocida, 0)) <= 2) //Si el campo conocidos no ha ingresado nada se coloca un espacio vacio y por ende no se imprime en el contrato
            {
                $conocido_conocida = "";
            }
            if(($cantidad_v-$i)==1  && $cantidad_v>1)
            {
                $y= "y ";
            }
            else {
                $y="";
            }
        $texto_vendedores .= "
        $y" . strtoUpper($Nombreform[$i]) . ", " . $conocido_conocida . " de " . $edad . " años de edad, ".$oficioform[$i].", del domicilio de la ciudad de " . ucwords(strtolower($municform[$i])) . ", departamento de " . ucwords(strtolower($deptoform[$i])) . ", con $tdocumentoformletra número $Duiformletra y con Número de Identificaci&oacute;n Tributaria $Nitformletra;";
        $i++;
    }
    $i=0;
    $texto_vendedores2 ="";
    
    
    while ($i < $cantidad_v) { // ACA SE OPERAN TODOS LOS VENDEDORES
        $Generoform = $_POST['Generoform'];
        $Conocidoform = $_POST['Conocidoform'];

        if ($Generoform[$i] == 1) {
            $el_ellaV = "EL VENDEDOR";
            $senior = "el señor";
            $conjunsen = "del";
            $al_la = "al";
            $duenio = "soy dueño y actual poseedor";
            $due = "dueño";
            $poseedor = "poseedor";
            $el_ellav_ = "él";
            $conocido_conocida = "conocido como  " . ucwords(strtolower($Conocidoform[$i])) . ",";
            $portador_portadora_v = "portador";
            $apoderado_apoderadav = "Apoderado";
            $he = "he";
            $ami_nuestra = "a mi";
            $le_vendo = "le vendo";
            $denominara = "denominará";
            $le_vende = "le vende";
            $a_favor = "el primer compareciente";
            $ejerzo="ejerzo";
        } else {
            $el_ellaV = "LA VENDEDORA";
            $senior = "la señora";
            $al_la = "a la";
            $conjunsen = "de la";
            $duenio = "soy dueña y actual poseedora";
            $due = "dueña";
            $poseedor = "poseedora";
            $el_ellav_ = "ella";
            $portador_portadora_v = "portadora";
            $conocido_conocida = "conocida como  " . ucwords(strtolower($Conocidoform[$i])) . ",";
            $apoderado_apoderadav = "Apoderada";
            $he = "he";
            $ami_nuestra = "a mi";
            $le_vendo = "le vendo";
            $denominara = "denominará";
            $le_vende = "le vende";
            $a_favor = "la primer compareciente";
            $ejerzo="ejerzo";
        }

        $Nombreform = $_POST['Nombreform'];
        $Duiform = $_POST['Duiform'];
        $Nitform = $_POST['Nitform'];
        if (isset($_POST['telefonoform'])) {
            $telefonoform = $_POST['telefonoform'];
        } else {
            $telefonoform[$i] = "";
        }
        $oficioform = $_POST['oficioform'];
        $fechanacform = $_POST['fechanacform'];
        $date = date_create($fechanacform[$i]);
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
        if ($tdocumentoform[$i] == 1) {
            $tdocumentoformletra = "Documento Único de Identidad";
        } else if ($tdocumentoform[$i] == 2) {
            $tdocumentoformletra = "Pasaporte";
        } else if ($tdocumentoform[$i] == 3) {
            $tdocumentoformletra = "Carnet de residente";
        }
        $Duiformletra = "";
        $Nitformletra = "";
        //Convertir DUI a letras
        $arreglo = str_split($Duiform[$i]);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Duiformletra .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Duiformletra .= " " . $res;
            }
        }
        //Convertir NIT a letras
        $arreglo = str_split($Nitform[$i]);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Nitformletra .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Nitformletra .= " " . $res;
            }
        }

        if ((str_word_count($conocido_conocida, 0)) <= 2) //Si el campo conocidos no ha ingresado nada se coloca un espacio vacio y por ende no se imprime en el contrato
            {
                $conocido_conocida = "";
            }
            if(($cantidad_v-$i)==1  && $cantidad_v>1)
            {
                $y= "y ";
            }
            else {
                $y="";
            }
        $texto_vendedores2 .= "
        $y" . strtoUpper($Nombreform[$i]) . ", " . $conocido_conocida . " de " . $edad . " años de edad, " . $oficioform[$i] . ", del domicilio de la ciudad de " . ucwords(strtolower($municform[$i])) . ", departamento de " . ucwords(strtolower($deptoform[$i])) . ", a quien no conozco pero identifico por medio de su $tdocumentoformletra número $Duiformletra y con Número de Identificaci&oacute;n Tributaria $Nitformletra;";
        $i++;
    }
    //Si son mas de uno los vendedores
    if ($cantidad_v > 1 && $cantidad_v>1) {
        $i = 0;

        while ($i < $cantidad_v) { // ACA SE OPERAN TODOS LOS VENDEDORES
            $verificacion = true;
            foreach ($Generoform as $key => $value) {
                if ($value == 2) {
                    $verificacion = true;
                } else {
                    $verificacion = false;
                    break;
                }
            }

            if ($verificacion == false) {
                $nosdenominaremos_3 = "quienes en el transcurso de este documento se denominarán";
                $nosdenominaremos = "quienes en el transcurso de este documento nos denominaremos ";
                $el_ellaV = "LOS VENDEDORES";
                $senior = "los señores";
                $conjunsen = "de los";
                $al_la = "a los";
                $duenio = "son dueños y actuales poseedores";
                $due = "dueños";
                $poseedor = "poseedores";
                $el_ellav_ = "ellos";
                $apoderado_apoderadav = "Apoderados";
                $he = "hemos";
                $ami_nuestra = "a nuestra";
                $le_vendo = "le vendemos";
                $le_vende = "le venden";
                $denominara = "denominarán";
                $a_favor = "los primeros comparecientes";
                $ejerzo="ejercemos";
            } else {
                $nosdenominaremos_3 = "quienes en el transcurso de este documento se denominarán";
                $nosdenominaremos = "quienes en el transcurso de este documento nos denominaremos ";
                $el_ellaV = "LAS VENDEDORAS";
                $senior = "las señoras";
                $al_la = "a las";
                $conjunsen = "de las";
                $duenio = "son dueñas y actuales poseedoras";
                $due = "dueñas";
                $poseedor = "poseedoras";
                $el_ellav_ = "ellas";
                $apoderado_apoderadav = "Apoderadas";
                $he = "hemos";
                $ami_nuestra = "a nuestra";
                $le_vendo = "le vendemos";
                $denominara = "denominarán";
                $le_vende = "le venden";
                $a_favor = "las primeras comparecientes";
                $ejerzo="ejercemos";
            }
            $i++;
        }
    } else {
        $nosdenominaremos = "quien en el transcurso de este documento me denominaré";
        $nosdenominaremos_3 = "quien en el transcurso de este documento se denominará";
    }


    //------------------------------------------------------------------------------------------------

    $i = 0;
    $texto_compradores = "";
    while ($i < $cantidad_c) { // ACA SE OPERAN TODOS LOS Compradores
        $Generoform2 = $_POST['Generoform2'];
        $Conocidoform2 = $_POST['Conocidoform2'];

        if ($Generoform2[$i] == 1 || strtolower($Generoform2[$i]) == "masculino") {
            $el_ellaC = "EL COMPRADOR";
            $senior2 = "del señor";
            $comprador_compradora = "comprador";
            $al_la2 = "al";
            $due = "dueño";
            $poseedor = "poseedor";
            $el_ellac_ = "él";
            $portador_portadora_c = "portador";
            $conocido_conocida2 = "conocido como  " . ucwords(strtolower($Conocidoform2[$i])) . ",";
            $acepto = "aceptó";
            $me = "me";
            $transfiriendole = "transfiriéndole";
            $denominara2 = "denominará";
        } else if ($Generoform2[$i] == 2 || strtolower($Generoform2[$i]) == "femenino") {
            $el_ellaC = "LA COMPRADORA";
            $senior2 = "de la señora";
            $comprador_compradora = "compradora";
            $al_la2 = "a la";
            $due = "dueña";
            $poseedor = "poseedora";
            $el_ellac_ = "ella";
            $portador_portadora_c = "portadora";
            $conocido_conocida2 = "conocida como  " . ucwords(strtolower($Conocidoform2[$i])) . ",";
            $acepto = "acepta";
            $me = "me";
            $transfiriendole = "transfiriéndole";
            $denominara2 = "denominará";
        }

        $Nombreform2 = $_POST['Nombreform2'];
        $Duiform2 = $_POST['Duiform2'];
        $Nitform2 = $_POST['Nitform2'];
        $telefonoform2 = $_POST['telefonoform2'];
        $oficioform2 = $_POST['oficioform2'];
        $fechanacform2 = $_POST['fechanacform2'];
        $date = date_create($fechanacform2[$i]);
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
        if ($tdocumentoform2[$i] == 1) {
            $tdocumentoform2letra = "Documento Único de Identidad";
        } else if ($tdocumentoform2[$i] == 2) {
            $tdocumentoform2letra = "Pasaporte";
        } else if ($tdocumentoform2[$i] == 3) {
            $tdocumentoform2letra = "Carnet de residente";
        }
        $Duiformletra2 = "";
        $Nitformletra2 = "";

        //Convertir DUI a letras
        $arreglo = str_split($Duiform2[$i]);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Duiformletra2 .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Duiformletra2 .= " " . $res;
            }
        }
        //Convertir NIT a letras
        $arreglo = str_split($Nitform2[$i]);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Nitformletra2 .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Nitformletra2 .= " " . $res;
            }
        }

        if ((str_word_count($conocido_conocida2, 0)) <= 2) //Si el campo conocidos no ha ingresado nada se coloca un espacio vacio y por ende no se imprime en el contrato
            {
                $conocido_conocida2 = "";
            }
            if(($cantidad_c-$i)==1 && $cantidad_c>1)
            {
                $y2= "y ";
            }
            else {
                $y2="";
            }
        $texto_compradores .= ", $y2" . strtoUpper($Nombreform2[$i]) . ", " . $conocido_conocida2 . " de " . $edad2 . " años de edad, " . $oficioform2[$i]. ", del domicilio de la ciudad de " . ucwords(strtolower($municform2[$i])) . ", departamento de " . ucwords(strtolower($deptoform2[$i])) . ", con " . $tdocumentoform2letra . " número " . $Duiformletra2 . " y con Número de Identificaci&oacute;n Tributaria" . $Nitformletra2;

        $i++;
    }

    $i=0;
    $texto_compradores2 ="";
    while ($i < $cantidad_c) { // ACA SE OPERAN TODOS LOS Compradores
        $Generoform2 = $_POST['Generoform2'];
        $Conocidoform2 = $_POST['Conocidoform2'];

        if ($Generoform2[$i] == 1 || strtolower($Generoform2[$i]) == "masculino") {
            $el_ellaC = "EL COMPRADOR";
            $senior2 = "del señor";
            $comprador_compradora = "comprador";
            $al_la2 = "al";
            $due = "dueño";
            $poseedor = "poseedor";
            $el_ellac_ = "él";
            $portador_portadora_c = "portador";
            $conocido_conocida2 = "conocido como  " . ucwords(strtolower($Conocidoform2[$i])) . ",";
            $acepto = "aceptó";
            $me = "me";
            $transfiriendole = "transfiriéndole";
            $denominara2 = "denominará";
        } else if ($Generoform2[$i] == 2 || strtolower($Generoform2[$i]) == "femenino") {
            $el_ellaC = "LA COMPRADORA";
            $senior2 = "de la señora";
            $comprador_compradora = "compradora";
            $al_la2 = "a la";
            $due = "dueña";
            $poseedor = "poseedora";
            $el_ellac_ = "ella";
            $portador_portadora_c = "portadora";
            $conocido_conocida2 = "conocida como  " . ucwords(strtolower($Conocidoform2[$i])) . ",";
            $acepto = "acepta";
            $me = "me";
            $transfiriendole = "transfiriéndole";
            $denominara2 = "denominará";
        }

        $Nombreform2 = $_POST['Nombreform2'];
        $Duiform2 = $_POST['Duiform2'];
        $Nitform2 = $_POST['Nitform2'];
        $telefonoform2 = $_POST['telefonoform2'];
        $oficioform2 = $_POST['oficioform2'];
        $fechanacform2 = $_POST['fechanacform2'];
        $date = date_create($fechanacform2[$i]);
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
        if ($tdocumentoform2[$i] == 1) {
            $tdocumentoform2letra = "Documento Único de Identidad";
        } else if ($tdocumentoform2[$i] == 2) {
            $tdocumentoform2letra = "Pasaporte";
        } else if ($tdocumentoform2[$i] == 3) {
            $tdocumentoform2letra = "Carnet de residente";
        }
        $Duiformletra2 = "";
        $Nitformletra2 = "";

        //Convertir DUI a letras
        $arreglo = str_split($Duiform2[$i]);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Duiformletra2 .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Duiformletra2 .= " " . $res;
            }
        }
        //Convertir NIT a letras
        $arreglo = str_split($Nitform2[$i]);
        foreach ($arreglo as $key => $value) {
            if ($value == "-") {
                $Nitformletra2 .= " gui&oacute;n";
            } else {
                $res = numero_letra($value);
                $Nitformletra2 .= " " . $res;
            }
        }

        if ((str_word_count($conocido_conocida2, 0)) <= 2) //Si el campo conocidos no ha ingresado nada se coloca un espacio vacio y por ende no se imprime en el contrato
            {
                $conocido_conocida2 = "";
            }
            if(($cantidad_c-$i)==1 && $cantidad_c>1)
            {
                $y2= "y ";
            }
            else {
                $y2="";
            }
        $texto_compradores2 .= " $y2" . strtoUpper($Nombreform2[$i]) . ", " . $conocido_conocida2 . " de " . $edad2 . " años de edad, " . $oficioform2[$i] . ", del domicilio de la ciudad de " . ucwords(strtolower($municform2[$i])) . ", departamento de " . ucwords(strtolower($deptoform2[$i])) . ", a quien no conozco pero identifico por medio de su " . $tdocumentoform2letra . " número " . $Duiformletra2 . " y con Número de Identificaci&oacute;n Tributaria" . $Nitformletra2;

        $i++;
    }

    //Si son mas de uno los compradores
    if ($cantidad_c > 1) {
        $i = 0;
        while ($i < $cantidad_c) { // ACA SE OPERAN TODOS LOS VENDEDORES
            $verificacion = true;
            foreach ($Generoform2 as $key => $value) {
                if ($value == 2) {
                    $verificacion = true;
                } else {
                    $verificacion = false;
                    break;
                }
            }

            if ($verificacion == false) {
                $nosdenominaremos2 = "quienes en el transcurso de este documento nos denominaremos";
                $nosdenominaremos3 = "quienes en el transcurso de este documento se denominarán";
                $el_ellaC = "LOS COMPRADORES";
                $senior2 = "de los señores";
                $al_la2 = "a los";
                $due = "dueños";
                $poseedor = "poseedores";
                $el_ellac_ = "ellos";
                $portador_portadora_c = "portador";
                $conocido_conocida2 = "conocido como  " . ucwords(strtolower($Conocidoform2[$i])) . ",";
                $acepto = "aceptamos";
                $me = "nos";
                $transfiriendole = "transfiriéndoles";
                $denominara2 = "denominarán";
            } else {
                $nosdenominaremos3 = "quienes en el transcurso de este documento se denominarán";
                $nosdenominaremos2 = "quienes en el transcurso de este documento nos denominaremos";
                $el_ellaC = "LAS COMPRADORAS";
                $senior2 = "de las señoras";
                $al_la2 = "a las";
                $due = "dueñas";
                $poseedor = "poseedoras";
                $el_ellac_ = "ellas";
                $portador_portadora_c = "portadora";
                $conocido_conocida2 = "conocida como  " . ucwords(strtolower($Conocidoform2[$i])) . ",";
                $acepto = "aceptamos";
                $me = "nos";
                $transfiriendole = "transfiriéndoles";
                $denominara2 = "denominarán";
            }
            $i++;
        }
    } else {
        $nosdenominaremos2 = "quien en el transcurso de este documento me denominaré";
        $nosdenominaremos3 = "quien en el transcurso de este documento se denominará";
    }

    //-------------------------------------------------------------------------------------------------------------------------------------------
    $VinALetra = "";
    $GrabaALetra = "";
    $PlacaALetra = "";
    $NumMALetra = "";
    $ttarjetaletra = "";
    $numpolizaletras = "";
    $Nomttarjeta = "";
    $ttarjeta = $_POST['ttarjetacant'];
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
    $NombreCont = "Venta de Vehiculo con Poder";
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

    //sacando mes y dias y año
    $date = date_create($fechaRec);
    $diasrec = (date_format($date, 'j'));
    $diasrecletra = numero_letra(($diasrec));

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
        $TraccionAletra = "TRACCIÓN: ";
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

    $arreglo = str_split($CapaA);
    $i = 0;
    $res = "";
    $CapaAletra_ = "";
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
    $arreglo = str_split($NumMA);
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
   

    
    //
    $arreglo = str_split($VinA);
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
        $Nomttarjeta = "según Tarjeta de Circulaci&oacute;n con número $ttarjetaletra";
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
    } else if ($ttarjeta == 3) { //TARJETA CIRCULACION

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



        $Nomttarjeta = "según Documento Privado de compraventa de vehiculo, otorgado en la ciudad de " . ucwords(strtolower($_POST['ciudad_poder'])) . " del departamento de " . ucwords(strtolower($_POST['departamento_poder'])) . ", a las $hora_poder horas con $minutos_poder minutos del día $dia_poder de $mes_poder de $anio_poder, ante los oficios Notariales de " . ucwords($_POST['oficios_poder']) . ", $a_favor,";
    } else { //NO SELECCIONO NADA
        $Nomttarjeta = "";
        $ttarjetaletra = "";
    }
    if ($PrecioAC == 0) {
        $DOLARS = (numero_letra($PrecioA)) . " DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";
    } else if ($PrecioAC == 00) {
        $DOLARS = (numero_letra($PrecioA)) . " DOLARES CON CERO CERO CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";
    } else {
        $DOLARS = (numero_letra($PrecioA)) . " DOLARES CON " . (numero_letra($PrecioAC)) . " CENTAVOS DE LOS ESTADOS UNIDOS DE AMERICA";
    }
    $firma_v = "";
    $HOJAS= numero_letra($_POST['cant_hojas']);
    $i = 0;
    while ($i < $cantidad_v) {
        $firma_v .= "
        <div style='display:inline;width:50%;margin-top:40px;'>
        
        <table>
        <tr>
            <td>
                <span style='float:left;'>
                F:______________________________
                </span>
                 <br>
            </td>
        </tr>
        <tr>
            <td>
                <span style='font-size:12px'>
                " . strtoUpper($Nombreform[$i]) . "
                 </span>
                 <br><br><br>
                 
            </td>
        </tr>
        </table>
        </div>
        ";
        $i++;
    }
    $firma_c = "";
    $i = 0;
    while ($i < $cantidad_c) {
        $firma_c .= "
        <div style='display:inline;width:50%;margin-top:40px;'>
        <table>
        <tr>
        <td>
<span style='float:left;'>
 F:______________________________

 </span>
 <br>
 </td>
 </tr>
 <tr>


<td>
<span style='font-size:12px;'>
 " . strtoUpper($Nombreform2[$i]) . "
 </span>
 <br><br><br>


 </td>
 </tr>
 </table>
 </div>

        ";
        $i++;
    }

    $contenido = "<html>";
    $contenido .= "<head>
            <style>
            html {
                margin: 15mm 25mm 25mm 25mm;
                }
                body {
                margin: 15mm 5mm 5mm 5mm;
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

            NOSOTROS: Por una parte,$texto_vendedores $nosdenominaremos <b>''$el_ellaV''</b>; y por otra parte$texto_compradores, $nosdenominaremos2 <b>''$el_ellaC''</b>, OTORGAMOS: 
            
            I)<B> DECLARACIÓN DE DOMINIO:</B> Que por medio de este instrumento celebramos un contrato de compraventa de vehículo, que se regirá conforme a las cláusulas siguientes: Que " . strtolower($el_ellaV) . " $Nomttarjeta, $duenio de un vehículo con las características siguientes: PLACAS: " . ucfirst(strtolower($PlacaAletra)) . "; MARCA: " . ucfirst(strtolower($MarcaAletra)) . "; MODELO: " . ucfirst(strtolower($ModelAletra)) . "; COLOR: " . ucfirst(strtolower($ColoA)) . "; AÑO: ".rtrim(ucfirst(strtolower($anio_carro)))."; CAPACIDAD: $CapaAletra; CLASE: " . ucfirst(strtolower($ClaseAletra)) . ";$TIPO NÚMERO DE MOTOR: " . ucfirst($NumMAletra) . "; NÚMERO DE CHASIS GRABADO: " . ucfirst($GrabaAletra) . "; NÚMERO DE CHASIS VIN: $VinAetra$campo_traccion - 
            
            II) <B>PRECIO:</B> Que por el precio de <span style='text-transform: uppercase;'>" . $DOLARS . ",</span> que $he recibido $ami_nuestra entera satisfacci&oacute;n de parte de ".strtolower($el_ellaC).", $le_vendo a $el_ellac_ libre de gravámenes y de vicios ocultos el vehículo antes descrito, $transfiriendole en consecuencia, la tradicion del dominio, posesi&oacute;n, usos, goce y demás derechos reales y personales que $ejerzo sobre dicho vehículo, quien se obliga a responder del Saneamiento de Ley, entregándoselo materialmente con las llaves y el documento de propiedad pertinente.- 
            
            III) <b>ACEPTACIÓN:</b> Asimismo " . strtolower($el_ellaC) . " $acepto la venta, y tradici&oacute;n que por medio de este documento se $me hace del vehículo antes descrito, con los derechos que se $me transfieren con la tradici&oacute;n, además de las llaves y el documento de propiedad aludido, recibiéndolo materialmente.- 
            
            IV) <B>DOMICILIO ESPECIAL:</B> $contratantes para los efectos legales de este instrumento señalamos como domicilio especial el de esta ciudad, a cuyos Tribunales nos sometemos expresamente.- Así nos expresamos ratificamos su contenido, y firmamos, en la ciudad de $lugarcontrato, a los $diasrecletra días del mes de $mesrecletra del año $aniorecletra.-
        </p>

 
           </div>
         
           <div  style='display:inline-block;margin-top:40px;height:auto;vertical-align:top;'>
           $firma_v
   </div>
        <div  style='display:inline-block;height:auto;vertical-align:top;'>
                $firma_c
        </div>
     


";

    $contenido .= "<br><br><div><p>En la ciudad de $lugarcontrato, a las $horaRecletra horas y $minutorecletra minutos del día $diasrecletra de $mesrecletra del año $aniorecletra. Ante mí, " . strtoupper($NomNota) . ", $notarioGen, del domicilio de la ciudad de " . ucwords(strtolower($DomNota)) . ", comparecen: $texto_vendedores2 $nosdenominaremos_3 <b>''$el_ellaV''</b>; y $texto_compradores2, $nosdenominaremos3 <b>''$el_ellaC''</b>; y ME DICEN: 
    
    I)<B> DECLARACIÓN DE DOMINIO:</B> Que " . strtolower($el_ellaV) . " $Nomttarjeta, $duenio de un vehículo con las características siguientes: PLACAS: " . ucfirst(strtolower($PlacaAletra)) . "; MARCA: " . ucfirst(strtolower($MarcaAletra)) . "; MODELO: " . ucfirst(strtolower($ModelAletra)) . "; COLOR: " . ucfirst(strtolower($ColoA)) . "; AÑO:  ".rtrim(ucfirst(strtolower($anio_carro)))."; CAPACIDAD: $CapaAletra; CLASE: " . ucfirst(strtolower($ClaseAletra)) . ";$TIPO NÚMERO DE MOTOR: " . ucfirst($NumMAletra) . "; NÚMERO DE CHASIS GRABADO: " . ucfirst($GrabaAletra) . "; NÚMERO DE CHASIS VIN: $VinAetra$campo_traccion - 
    
    II) <B>PRECIO:</B> Que por el precio de <span style='text-transform: uppercase;'>$DOLARS,</span> que $he recibido a mi entera satisfacci&oacute;n de parte de $el_ellav_, $le_vende a $el_ellac_ libre de gravámenes y de vicios ocultos el vehículo antes descrito, $transfiriendole en consecuencia, la tradicion del dominio, posesi&oacute;n, usos, goce y demás derechos reales y personales que $ejerzo sobre dicho vehículo, quien se obliga a responder del Saneamiento de Ley, entregándoselo materialmente con las llaves y el documento de propiedad pertinente. 
    
    III)<b> ACEPTACIÓN:</b> Asimismo " . strtolower($el_ellaC) . " acepta la venta y tradici&oacute;n que por medio de este instrumento se le hace del vehículo antes descrito, con los derechos que se le transfieren con la tradici&oacute;n, además de las llaves y el documento de propiedad aludido, recibiéndolo materialmente.- 
    
    IV) <B>DOMICILIO ESPECIAL:</B> $contratantes para los efectos legales de este instrumento señalan como domicilio especial el de esta ciudad, a cuyos Tribunales se someten expresamente.-
Yo, $GenNota, DOY FE: Que son auténticas las firmas que calzan el anterior documento, por haber sido puestas a mi presencia de su puño y letra por $La_Lo_com comparecientes, a quienes expliqué los efectos legales de la presente Acta Notarial, que consta de <b>$HOJAS</b> hojas útiles, y leído que les hube íntegramente lo escrito, en un solo acto sin interrupci&oacute;n, ratifican su contenido y firmamos.- DE TODO DOY FE.-
<br>
<br>
<br>
</p>
</div>
    <div  style='display:inline-block;margin-top:10px;height:auto;vertical-align:top;'>
                $firma_v
        </div>
    <div  style='display:inline-block;height:auto;vertical-align:top;'>
                $firma_c
</div>
";
    $contenido .= "
            </div></body>";
    $contenido .= "</html>";

    $tipo = 1;
    $ID_Cliente1 = 0;$ID_Cliente2=0;
            $respuesta = ingresarContratos($NombreCont, $fechaRec, $horaRec, $Id_UsuarioL,$tipo,$ID_Cliente1,$ID_Cliente2, $conex);  
    
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
} else if (isset($_POST['btnGenerarword'])) {
    header('Location: ImpContraDOCX.php');
    exit;
} else {
    $respuesta = "No se ha ingresado el pdf";
    echo $respuesta;
}
//Por si acaso esto fue lo que corte:

/* <b>".strtoupper($Nombreform2)."</b>, $conocido_conocida2 de $edad2 años de edad, ".ucwords(strtolower($oficioform2)).", del domicilio de la ciudad de ".ucwords(strtolower($municform2)).", departamento de ".ucwords(strtolower($deptoform2)).", a quien no conozco pero identifico por medio de su $tdocumentoform2letra número $Duiformletra2, y con Número de Identificaci&oacute;n Tributaria $Nitformletra2
 */
?>