<?php 
error_reporting(0);
function CalculaEdad( $fecha ) {
    list($Y,$m,$d) = explode("-",$fecha);
    return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
}
function unidad($numuero){ 
switch ($numuero) 
{ 
case 9: 
{ 
$numu = "NUEVE"; 
break; 
} 
case 8: 
{ 
$numu = "OCHO"; 
break; 
} 
case 7: 
{ 
$numu = "SIETE"; 
break; 
}	
case 6: 
{ 
$numu = "SEIS"; 
break; 
}	
case 5: 
{ 
$numu = "CINCO"; 
break; 
}	
case 4: 
{ 
$numu = "CUATRO"; 
break; 
}	
case 3: 
{ 
$numu = "TRES"; 
break; 
}	
case 2: 
{ 
$numu = "DOS"; 
break; 
}	
case 1: 
{ 
$numu = "UNO"; 
break; 
}	
case 0: 
{ 
$numu = "CERO"; 
break; 
}	
} 
return $numu;	
} 

function decena($numdero){ 

if ($numdero >= 90 && $numdero <= 99) 
{ 
$numd = "NOVENTA "; 
if ($numdero > 90) 
$numd = $numd."Y ".(unidad($numdero - 90)); 
} 
else if ($numdero >= 80 && $numdero <= 89) 
{ 
$numd = "OCHENTA "; 
if ($numdero > 80) 
$numd = $numd."Y ".(unidad($numdero - 80)); 
} 
else if ($numdero >= 70 && $numdero <= 79) 
{ 
$numd = "SETENTA "; 
if ($numdero > 70) 
$numd = $numd."Y ".(unidad($numdero - 70)); 
} 
else if ($numdero >= 60 && $numdero <= 69) 
{ 
$numd = "SESENTA "; 
if ($numdero > 60) 
$numd = $numd."Y ".(unidad($numdero - 60)); 
} 
else if ($numdero >= 50 && $numdero <= 59) 
{ 
$numd = "CINCUENTA "; 
if ($numdero > 50) 
$numd = $numd."Y ".(unidad($numdero - 50)); 
} 
else if ($numdero >= 40 && $numdero <= 49) 
{ 
$numd = "CUARENTA "; 
if ($numdero > 40) 
$numd = $numd."Y ".(unidad($numdero - 40)); 
} 
else if ($numdero >= 30 && $numdero <= 39) 
{ 
$numd = "TREINTA "; 
if ($numdero > 30) 
$numd = $numd."Y ".(unidad($numdero - 30)); 
} 
else if ($numdero >= 20 && $numdero <= 29) 
{ 
if ($numdero == 20) 
$numd = "VEINTE "; 
else 
$numd = "VEINTI".(unidad($numdero - 20)); 
} 
else if ($numdero >= 10 && $numdero <= 19) 
{ 
switch ($numdero){ 
case 10: 
{ 
$numd = "DIEZ "; 
break; 
} 
case 11: 
{	
$numd = "ONCE "; 
break; 
} 
case 12: 
{ 
$numd = "DOCE "; 
break; 
} 
case 13: 
{ 
$numd = "TRECE "; 
break; 
} 
case 14: 
{ 
$numd = "CATORCE "; 
break; 
} 
case 15: 
{ 
$numd = "QUINCE "; 
break; 
} 
case 16: 
{ 
$numd = "DIECISEIS "; 
break; 
} 
case 17: 
{ 
$numd = "DIECISIETE "; 
break; 
} 
case 18: 
{ 
$numd = "DIECIOCHO "; 
break; 
} 
case 19: 
{ 
$numd = "DIECINUEVE "; 
break; 
} 
}	
} 
else 
$numd = unidad($numdero); 
return $numd; 
} 

function centena($numc){ 
if ($numc >= 100) 
{ 
if ($numc >= 900 && $numc <= 999) 
{ 
$numce = "NOVECIENTOS "; 
if ($numc > 900) 
$numce = $numce.(decena($numc - 900)); 
} 
else if ($numc >= 800 && $numc <= 899) 
{ 
$numce = "OCHOCIENTOS "; 
if ($numc > 800) 
$numce = $numce.(decena($numc - 800)); 
} 
else if ($numc >= 700 && $numc <= 799) 
{ 
$numce = "SETECIENTOS "; 
if ($numc > 700) 
$numce = $numce.(decena($numc - 700)); 
} 
else if ($numc >= 600 && $numc <= 699) 
{ 
$numce = "SEISCIENTOS "; 
if ($numc > 600) 
$numce = $numce.(decena($numc - 600)); 
} 
else if ($numc >= 500 && $numc <= 599) 
{ 
$numce = "QUINIENTOS "; 
if ($numc > 500) 
$numce = $numce.(decena($numc - 500)); 
} 
else if ($numc > 400 && $numc <= 499) 
{ 
$numce = "CUATROCIENTOS "; 
if ($numc > 400) 
$numce = $numce.(decena($numc - 400)); 
} 
else if ($numc >= 300 && $numc <= 399) 
{ 
$numce = "TRESCIENTOS "; 
if ($numc > 300) 
$numce = $numce.(decena($numc - 300)); 
} 
else if ($numc >= 200 && $numc <= 299) 
{ 
$numce = "DOSCIENTOS "; 
if ($numc > 200) 
$numce = $numce.(decena($numc - 200)); 
} 
else if ($numc >= 100 && $numc <= 199) 
{ 
if ($numc == 100) 
$numce = "CIEN "; 
else 
$numce = "CIENTO ".(decena($numc - 100)); 
} 
} 
else 
$numce = decena($numc); 

return $numce;	
} 

function miles($nummero){ 
if ($nummero >= 1000 && $nummero < 2000){ 
$numm = "MIL ".(centena($nummero%1000)); 
} 
if ($nummero >= 2000 && $nummero <10000){ 
$numm = unidad(Floor($nummero/1000))." MIL ".(centena($nummero%1000)); 
} 
if ($nummero < 1000) 
$numm = centena($nummero); 

return $numm; 
} 

function decmiles($numdmero){ 
if ($numdmero == 10000) 
$numde = "DIEZ MIL"; 
if ($numdmero > 10000 && $numdmero <20000){ 
$numde = decena(Floor($numdmero/1000))."MIL ".(centena($numdmero%1000));	
} 
if ($numdmero >= 20000 && $numdmero <100000){ 
$numde = decena(Floor($numdmero/1000))." MIL ".(miles($numdmero%1000));	
}	
if ($numdmero < 10000) 
$numde = miles($numdmero); 

return $numde; 
}	

function cienmiles($numcmero){ 
if ($numcmero == 100000) 
$num_letracm = "CIEN MIL"; 
if ($numcmero >= 100000 && $numcmero <1000000){ 
$num_letracm = centena(Floor($numcmero/1000))." MIL ".(centena($numcmero%1000));	
} 
if ($numcmero < 100000) 
$num_letracm = decmiles($numcmero); 
return $num_letracm; 
}	

function millon($nummiero){ 
if ($nummiero >= 1000000 && $nummiero <2000000){ 
$num_letramm = "UN MILLON ".(cienmiles($nummiero%1000000)); 
} 
if ($nummiero >= 2000000 && $nummiero <10000000){ 
$num_letramm = unidad(Floor($nummiero/1000000))." MILLONES ".(cienmiles($nummiero%1000000)); 
} 
if ($nummiero < 1000000) 
$num_letramm = cienmiles($nummiero); 

return $num_letramm; 
}	

function decmillon($numerodm){ 
if ($numerodm == 10000000) 
$num_letradmm = "DIEZ MILLONES"; 
if ($numerodm > 10000000 && $numerodm <20000000){ 
$num_letradmm = decena(Floor($numerodm/1000000))."MILLONES ".(cienmiles($numerodm%1000000));	
} 
if ($numerodm >= 20000000 && $numerodm <100000000){ 
$num_letradmm = decena(Floor($numerodm/1000000))." MILLONES ".(millon($numerodm%1000000));	
} 
if ($numerodm < 10000000) 
$num_letradmm = millon($numerodm); 

return $num_letradmm; 
} 

function cienmillon($numcmeros){ 
if ($numcmeros == 100000000) 
$num_letracms = "CIEN MILLONES"; 
if ($numcmeros >= 100000000 && $numcmeros <1000000000){ 
$num_letracms = centena(Floor($numcmeros/1000000))." MILLONES ".(millon($numcmeros%1000000));	
} 
if ($numcmeros < 100000000) 
$num_letracms = decmillon($numcmeros); 
return $num_letracms; 
}	

function milmillon($nummierod){ 
if ($nummierod >= 1000000000 && $nummierod <2000000000){ 
$num_letrammd = "MIL ".(cienmillon($nummierod%1000000000)); 
} 
if ($nummierod >= 2000000000 && $nummierod <10000000000){ 
$num_letrammd = unidad(Floor($nummierod/1000000000))." MIL ".(cienmillon($nummierod%1000000000)); 
} 
if ($nummierod < 1000000000) 
$num_letrammd = cienmillon($nummierod); 

return $num_letrammd; 
}	


function DOLARES_CENTAVOS($numero){ 
$num = str_replace(",","",$numero); 
$num = number_format($num,2,'.',''); 
$cents = substr($num,strlen($num)-2,strlen($num)-1); 
$num = (int)$num; 

$numf = milmillon($num); 
$cents = milmillon($cents);

return $numf." DOLARES CON ".$cents." CENTAVOS DE DOLAR DE LOS ESTADOS UNIDOS DE AMERICA"; 
} 



?> 

<?php 

    function basico($numero) {
    $valor = array ('cero','uno','dos','tres','cuatro','cinco','seis','siete','ocho',
    'nueve','diez','once','doce','trece','catorce','quince','diesiseis','diesisiete','dieciocho','diecinueve','diecinueve','veinte','veintiuno','veintidos','veintitres','veinticuatro','veinticinco',
    'veintiséis','veintisiete','veintiocho','veintinueve');
    return $valor[$numero];
    }
   
    function mes($numero) {
        $valor = array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre',
        'Octubre','Noviembre','Diciembre');
        return $valor[$numero -1];
        }
    function basico2($numero) {
        $valor = array ('uno','dos','tres','cuatro','cinco','seis','siete','ocho',
        'nueve','diez','once','doce','trece','catorce','quince','diesiseis','diesisiete','dieciocho','diecinueve','diecinueve','veinte','veintiun','veintidos','veintitres','veinticuatro','veinticinco',
        'veintiséis','veintisiete','veintiocho','veintinueve');
        return $valor[$numero -1];
        }
function decenas($n) {
    $decenas = array (30=>'treinta',40=>'cuarenta',50=>'cincuenta',60=>'sesenta',
    70=>'setenta',80=>'ochenta',90=>'noventa');
    if( $n <= 29) return basico($n);
    $x = $n % 10;
    if ( $x == 0 ) {
    return $decenas[$n];
    } else return $decenas[$n - $x].' y '. basico($x);
    }
    function centenas($n) {
    $cientos = array (100 =>'cien',200 =>'doscientos',300=>'trescientos',
    400=>'cuatrocientos', 500=>'quinientos',600=>'seiscientos',
    700=>'setecientos',800=>'ochocientos', 900 =>'novecientos');
    if( $n >= 100) {
    if ( $n % 100 == 0 ) {
    return $cientos[$n];
    } else {
    $u = (int) substr($n,0,1);
    $d = (int) substr($n,1,2);
    return (($u == 1)?'ciento':$cientos[$u*100]).' '.decenas($d);
    }
    } else return decenas($n);
    }
    function mile($n) {
    if($n > 999) {
    if( $n == 1000) {return 'mil';}
    else {
    $l = strlen($n);
    $c = (int)substr($n,0,$l-3);
    $x = (int)substr($n,-3);
    if($c == 1) {$cadena = 'mil '.centenas($x);}
    else if($x != 0) {$cadena = centenas($c).' mil '.centenas($x);}
    else $cadena = centenas($c). ' mil';
    return $cadena;
    }
    } else return centenas($n);
    }
    function millones($n) {
    if($n == 1000000) {return 'un millón';}
    else {
    $l = strlen($n);
    $c = (int)substr($n,0,$l-6);
    $x = (int)substr($n,-6);
    if($c == 1) {
    $cadena = ' millón ';
    } else {
    $cadena = ' millones ';
    }
    return mile($c).$cadena.(($x > 0)?mile($x):'');
    }
    }
    function convertir2($n) {
    switch (true) {
    case ( $n >= 1 && $n <= 29) : return basico2($n); break;
    case ( $n >= 30 && $n < 100) : return decenas($n); break;
    case ( $n >= 100 && $n < 1000) : return centenas($n); break;
    case ($n >= 1000 && $n <= 999999): return mile($n); break;
    case ($n >= 1000000): return millones($n);
    }
    }
function convertir($n) {
switch (true) {
case ( $n >= 0 ) : return basico($n); break;
    }
}
?>
<?php
//Archivo de conexión a la base de datos
include $_SERVER['DOCUMENT_ROOT']."/CL\DEV\UI\BD\conexion.php";//temporal
require_once $_SERVER['DOCUMENT_ROOT'] . "/CL/DEV/UX/Plugins/dompdf/autoload.inc.php";
include $_SERVER['DOCUMENT_ROOT']."/CL\DEV\UI/Login/session.php";
include $_SERVER['DOCUMENT_ROOT']."/CL\DEV\UX\Funciones\includes\Existen_categorias.php";//Comprobar categorias
use Dompdf\Dompdf;
ob_start();

if(isset($_POST["btnGenerar"])){
    
    //Todas las variables posibles (Lo hago por que hare todo en un solo if y necesitan estar vacias para)
    
    $Nombreform="";
    $edad="";
    $oficioform="";
    $deptoform="";
    $municform="";
    $tdocumentoformletra="";
    $Duiformletra="";
    $Nitformletra="";
    $conpodertexto="";
    $el_ellaV="";
    $Nombreform2="";
    $oficioform2="";
    $municform2="";
    $deptoform2="";
    $tdocumentoform2letra="";
    $Duiformletra2="";
    $Nitformletra2="";
    $el_ellaC="";
    $Nomttarjeta="";
    $ttarjetaletra="";
    $ModelA="";
    $ColoA="";
    $anioletra="";
    $CapaA="";
    $ClaseA="";
    $TraccionA="";
    $TipoA="";
    $DominioA="";
    $NumMALetra="";
    $GrabaALetra="";
    $VinALetra="";
    $CalidadA="";
    $PrecioALetra="";
    $senior="";
    $diasrecletra="";
    $mesrecletra="";
    $aniorecletra="";
    $horaRecletra="";
    $minutorecletra="";
    $diasrecletra="";
    $mesrecletra="";


   //-----------------------------Variables Generales
           
   $VinALetra="";
   $GrabaALetra="";
   $PlacaALetra="";
   $NumMALetra="";
   $ttarjetaletra ="";
   $numpolizaletras ="";
   $Nomttarjeta="";
   $ttarjeta=$_POST['ttarjeta'];
   $PlacaA =$_POST['PlacaA'];
   $MarcaA =$_POST['MarcaA'];
   $ModelA =$_POST['ModelA'];
   $ColoA =$_POST['ColoA'];
   $AnioA =$_POST['AnioA'];
   $date = date_create($AnioA);
   $AnioAnumber= date_format($date, 'Y');
   $anioCarro="";
   $anioletra= convertir2($AnioAnumber);
   $CapaA =$_POST['CapaA'];
   $ClaseA =$_POST['ClaseA'];
   $TraccionA ="";
   $TipoA =$_POST['TipoA'];
   $DominioA ="";
   $NumMA =$_POST['NumMA'];
   $GrabaA =$_POST['GrabaA'];
   $VinA =$_POST['VinA'];
   //$CalidadA =$_POST['CalidadA'];
   $PrecioA =$_POST['PrecioA'];
   $fechaRec=$_POST['fechaRec'];
   $horaRec=$_POST['horaRec'];
   $NomNota=$_POST['NomNota'];
   $DomNota=$_POST['DomNota'];
   $lugarcontrato=$_POST['lugarcontrato'];
   $NombreCont="Poder para Venta de Vehiculo";
   $Id_UsuarioL=$_POST['Id_Usuario'];
   $GenNota=$_POST["GenNota"];
   if ($_POST["GenNota"]==1) {
       $GenNota="el suscrito Notario";
       $notarioGen="notario";
   }
   else{
       $GenNota="la suscrita Notaria";
       $notarioGen="notaria";
   }

   if(($_POST['Generoform'] ==2 || strtolower($_POST['GeneroRecjs']) =="femenino") && ($_POST['Generoform2']==2 ||  strtolower($_POST['GeneroRecjs2']) =="femenino" )){
       $contratantes="Las contratantes";
       $La_Lo_com="las";
       $Los_Las_senio="las señoras";

   }
   else {
       $contratantes="Los contratantes";
       $La_Lo_com="los";
       $Los_Las_senio="los señores";
   }
   
   
  

    //-----------------------------Variables si tiene poder
    $Generoformcp=$_POST['Generoformcp'];
    $Nombreformcp=$_POST['Nombreformcp'];
    $tdocumentoformcp=$_POST['tdocumentoformcp'];
    $Duiformcp=$_POST['Duiformcp'];
    $Nitformcp=$_POST['Nitformcp'];
    $oficioformcp=$_POST['oficioformcp'];
    $fechanacformcp=$_POST['fechanacformcp'];
    
    if(isset($_POST['nacionalidadformcp'])){
        $nacionalidadformcp=$_POST['nacionalidadformcp'];
    }
    else
    {
        $nacionalidadformcp="";
    }
    $deptoformcp=$_POST['deptoformcp'];
    $municformcp=$_POST['municformcp'];
    $date = date_create($fechanacformcp);
    $edadcp=(date_format($date, 'Y')-2019);

    //sacando mes y dias y año
  




   //sacando mes y dias y año
   $date = date_create($fechaRec);
   $diasrec= date_format($date, 'j');
   $diasrecletra= convertir2($diasrec);

   $date=date_create($fechaRec);
   $mesrec= date_format($date, 'n');
   $mesrecletra=mes($mesrec);

   $date=date_create($fechaRec);
   $aniorec= date_format($date, 'Y');
   $aniorecletra= convertir2($aniorec);

   //formateando horas y minutos
   $date=date_create($horaRec);
   $horarec= date_format($date, 'H');
   $horaRecletra= convertir2($horarec);

   
   $date=date_create($horaRec);
   $minutorec= date_format($date, 'i');
   $minutorecletra= convertir2($minutorec);


   if($TraccionA!="")
  {
    //Convirtiendo marca a letras o numeros
    $arreglo = str_split($TraccionA);
    $TraccionAletra="TRACCION: ";
    foreach ($arreglo as $key => $value) {
        if(!is_numeric($value)){
         $TraccionAletra .= "".$value; 
         
          }
                    else if($value=="-"){
                  $TraccionAletra .=" guion"; 
                 }else{
                     $res= convertir($value);
                 $TraccionAletra .= " ".$res;
        }
    }
    $tipotracc=$TraccionAletra;
    $TraccionAletra.=";";
}
else{
    $TraccionAletra="";
}
 
  //Convirtiendo marca a letras o numeros
   $arreglo = str_split($MarcaA);
   $MarcaAletra="";
   foreach ($arreglo as $key => $value) {
       if(!is_numeric($value)){
        $MarcaAletra .= $value; 
        
         }
                   else if($value=="-"){
                 $MarcaAletra .=" guion"; 
                }else{
                    $res= convertir($value);
                $MarcaAletra .= " ".$res;
       }
   }

   //Convirtiendo marca a letras o numeros
 $arreglo = str_split($PlacaA);
 $PlacaAletra="";
 foreach ($arreglo as $key => $value) {
     if(!is_numeric($value)&&$value!="-"){
      $PlacaAletra .=$value; 
      
       }
    else if($value=="-"){
     $PlacaAletra .=" guion"; 
 }else{
$res= convertir($value);
              $PlacaAletra .= " ".$res;
     }
 }
 //Convirtiendo marca a letras o numeros
 $arreglo = str_split($ModelA);
 $ModelAletra="";
 foreach ($arreglo as $key => $value) {
     if(!is_numeric($value)&&$value!="-"){
      $ModelAletra .=$value; 
      
       }
    else if($value=="-"){
     $ModelAletra .=" guion"; 
 }else{
$res= convertir($value);
              $ModelAletra .= " ".$res;
     }
 }


 //Convirtiendo marca a letras o numeros
 
 $CapaAletra=convertir2($CapaA);
 /*
 foreach ($arreglo as $key => $value) {
     if(!is_numeric($value)&&$value!="-"){
      $CapaAletra .=$value; 
      
       }
                 else if($value=="-"){
               $CapaAletra .=" guion"; 
              }else{
                  $res= convertir2($value);
              $CapaAletra .= " ".$res;
     }
 } */
 $CapaAletra .=" asientos";
 
   //Convirtiendo marca a letras o numeros
 $arreglo = str_split($ClaseA);
 $ClaseAletra="";
 foreach ($arreglo as $key => $value) {
     if(!is_numeric($value)&&$value!="-"){
      $ClaseAletra .=$value; 
      
       }
                 else if($value=="-"){
               $ClaseAletra .=" guion"; 
              }else{
                  $res= convertir($value);
              $ClaseAletra .= " ".$res;
     }
 }
 //
 $arreglo = str_split($NumMA);
 $NumMAletra="";
 foreach ($arreglo as $key => $value) {
     if(!is_numeric($value)&&$value!="-"){
      $NumMAletra .=" ".$value; 
      
       }
                 else if($value=="-"){
               $NumMAletra .=" guion"; 
              }else{
                  $res= convertir($value);
              $NumMAletra .= " ".$res;
     }
 }
 $NumMAletra=ucfirst($NumMAletra);
  //
  $arreglo = str_split($GrabaA);
  $GrabaAletra="";
  foreach ($arreglo as $key => $value) {
      if(!is_numeric($value) &&$value!="-"){
       $GrabaAletra .=" ".$value; 
       
        }
                  else if($value=="-"){
                $GrabaAletra .=" guion"; 
               }else{
                   $res= convertir($value);
               $GrabaAletra .= " ".$res;
      }
  }
    //
  $arreglo = str_split($VinA);
  $VinAetra="";
  foreach ($arreglo as $key => $value) {
      if(!is_numeric($value)&&$value!="-"){
       $VinAetra .=" ".$value; 
       
        }
                  else if($value=="-"){
                $VinAetra .=" guion"; 
               }else{
                   $res= convertir($value);
               $VinAetra .= " ".$res;
      }
  }
      //
      $arreglo = str_split($DominioA);
      $DominioAletra="";
      foreach ($arreglo as $key => $value) {
          if(!is_numeric($value)){
           $DominioAletra .="".$value; 
           
            }
                      else if($value=="-"){
                    $DominioAletra .=" guion"; 
                   }else{
                       $res= convertir($value);
                   $DominioAletra.= " ".$res;
          }
      }


         $PrecioALetra= convertir2($PrecioA);
         
        
        


    //Validacion de tarjeta de circulacion o poliza
    if ($ttarjeta==1) { //TARJETA CIRCULACION
       $numerotarjeta = $_POST['numerotarjeta'];
       //CONVIRTIENDO TARJETA CIRCULACION A LETRAS
     
       $arreglo = str_split($numerotarjeta);
       foreach ($arreglo as $key => $value) {
        if($value=="-"){
            $ttarjetaletra .=" guion"; 
        }else
        if(!is_numeric($value)){
            $ttarjetaletra .=" ".$value; 
            
           
           
           }else{
               $res= convertir($value);
               $ttarjetaletra .= " ".$res;
           }
       }
       $Nomttarjeta="según Tarjeta de Circulación con numero $ttarjetaletra";
   }
   else if ($ttarjeta==2) { //POLIZA
       $numeropoliza = $_POST['numeropoliza'];
       $polemitida =  $_POST['polemitida'];
       $date = date_create($polemitida); //Separando Fecha dada
       $mes = date_format($date, 'n');
       $mesletra="";
       $anio= date_format($date, 'Y');
       $anioletra="";
       $dia= date_format($date, 'j');
       $dialetra="";
       //Convirtiendo los dias anios y meses con su respectiva nomenclatura
       $dialetra= convertir2($dia);
       $anioletra= convertir2($anio);
       $mesletra=mes($mes);
       /*
       //CONVIRTIENDO MES A LETRAS
       $arreglo = str_split($mes);
       foreach ($arreglo as $key => $value) {
           if($value=="-"){
       $mesletra .="guion "; 
           }else{
               $res= convertir($value);
               $mesletra .= $res." ";
           }
       }

        //CONVIRTIENDO AÑO A LETRAS
        $arreglo = str_split($anio);
        foreach ($arreglo as $key => $value) {
            if($value=="-"){
        $anioletra .="guion "; 
            }else{
                $res= convertir($value);
                $anioletra .= $res." ";
            }
        }

          //CONVIRTIENDO DIAS A LETRAS
          $arreglo = str_split($dia);
          foreach ($arreglo as $key => $value) {
              if($value=="-"){
          $dialetra .="guion "; 
              }else{
                  $res= convertir($value);
                  $dialetra .= $res." ";
              }
          }
          */
       //CONVIRTIENDO POLIZA A LETRAS
       $arreglo = str_split($numeropoliza);
       foreach ($arreglo as $key => $value) {
        if($value=="-"){
            $numpolizaletras .=" guion"; 
        }
        else if(!is_numeric($value)){
            $numpolizaletras .=" ".$value; 

           }else{
               $res=convertir($value);
               $numpolizaletras .= " ".$res;
           }
       }
       $Nomttarjeta="según Póliza número $numpolizaletras emitida por la Direccion General de Aduanas, el día $dialetra de $mesletra del año $anioletra,";
   }
   else { //NO SELECCIONO NADA
       $Nomttarjeta="";
       $ttarjetaletra="";
   }

    //Si busco el vendedor 
 //-----------------------------Datos del VENDEDOR          
           
            if (($_POST['CampovalidacionC1'])==0) {
                
                $Conocidoform=$_POST['ConocidoRec'];
                $Generoform=$_POST['GeneroRecjs'];
                
                if ($Generoform==1 || strtolower($Generoform)=="masculino") {
                    $el_ellaV="EL VENDEDOR";
                    $senior="del señor";
                    $al_la="al";
                    $duenio="es dueño y actual poseedor";
                    $poseedor="poseedor";
                    $due="dueño";
                    $el_ellav_="él";
                    $portador_portadora_v="portador";
                    $conocido_conocida="conocido como ".ucwords(strtolower($Conocidoform)).",";
                    $apoderado_apoderadav="Apoderado";
                }
                else  if ($Generoform==2 || strtolower($Generoform)=="femenino") {
                    $el_ellaV="LA VENDEDORA";
                    $conjunsen="de la";
                    $al_la="a la";
                    $senior="de la señora";
                    $duenio="es dueña y actual poseedora";
                    $poseedor="poseedora";
                    $due="dueña";
                    $el_ellav_="ella";
                    $portador_portadora_v="portadora";
                    $conocido_conocida="conocida como ".ucwords(strtolower($Conocidoform)).",";
                    $apoderado_apoderadav="Apoderada";
                }
                $Nombreform=$_POST['NombreRecjs'];
                $Duiform=$_POST['DuiRecjs'];
                $Nitform=$_POST['NitRecjs'];
                if (isset($_POST['TelClijs'])){
                    $telefonoform=$_POST['TelClijs'];
                }
                else {
                    $telefonoform="";
                }
               
                $oficioform=$_POST['OficioRecjs'];
                $fechanacform=$_POST['NacimientoRecjs'];
                $date = date_create($fechanacform);
            $edad=(date_format($date, 'Y-m-d'));
            $edad=CalculaEdad($edad)+1;
            $edad=convertir2($edad);
                 
                 if(isset($_POST['ID_Nacionalidad_FKRecjs'])){
                    $nacionalidadform=$_POST['ID_Nacionalidad_FKRecjs'];
                 }
                 else
                 {
                    $nacionalidadform="1";
                 }
                
                
                $deptoform=$_POST['ID_Depto_FKRecjs'];
                $municform=$_POST['ID_Munic_FKRecjs'];
                $tdocumentoform=$_POST['ID_DocIden_FKRec'];
                if ($tdocumentoform==1) {
                    $tdocumentoformletra="Documento Único de Identidad";
                }
                else if($tdocumentoform==2){
                    $tdocumentoformletra="Pasaporte";
                }
                
                else if($tdocumentoform==3){
                    $tdocumentoformletra="Carnet de residente";
                }
                else{
                    $tdocumentoformletra=$tdocumentoform;
                }
                $Duiformletra="";
                $Nitformletra="";
                //Convertir DUI a letras
                $arreglo = str_split($Duiform);
                    foreach ($arreglo as $key => $value) {
                        if($value=="-"){
                    $Duiformletra .=" guion"; 
                        }else{
                            $res= convertir($value);
                            $Duiformletra .= " ".$res;
                        }
                    }
                //Convertir NIT a letras
                $arreglo = str_split($Nitform);
                foreach ($arreglo as $key => $value) {
                    if($value=="-"){
                $Nitformletra .=" guion"; 
                    }else{
                        $res= convertir($value);
                        $Nitformletra .= " ".$res;
                    }
                }
    


            }
            else {
                //-----------------------------------Datos del vendedor
        //Si el usuario ingreso el nuevo cliente 1 entonces se reciben las variables que añadio
        //Si ingreso los dos clientes se viene aca
            $Generoform=$_POST['Generoform'];
            $Conocidoform=$_POST['Conocidoform'];
            if ($Generoform==1) {
                $el_ellaV="EL VENDEDOR";
                $senior="el señor";
                $conjunsen="del";
                $al_la="al";
                $duenio="es dueño y actual poseedor";
                $due="dueño";
                $poseedor="poseedor";
                $el_ellav_="él";
                $conocido_conocida="conocido como  ".ucwords(strtolower($Conocidoform)).",";
                $portador_portadora_v="portador";
                $apoderado_apoderadav="Apoderado";
            }
            else {
                $el_ellaV="LA VENDEDORA";
                $senior="la señora";
                $al_la="a la";
                $conjunsen="de la";
                $duenio="es dueña y actual poseedora";
                $due="dueña";
                $poseedor="poseedora";
                $el_ellav_="ella";
                $portador_portadora_v="portadora";
                $conocido_conocida="conocida como  ".ucwords(strtolower($Conocidoform)).",";
                $apoderado_apoderadav="Apoderada";
            }
            $Nombreform=$_POST['Nombreform'];
            $Duiform=$_POST['Duiform'];
            $Nitform=$_POST['Nitform'];
            if(isset($_POST['telefonoform'])){
                $telefonoform=$_POST['telefonoform'];
            }
            else
            {
                $telefonoform="";
            }
            $oficioform=$_POST['oficioform'];
            $fechanacform=$_POST['fechanacform'];
            $date = date_create($fechanacform);
            $edad=(date_format($date, 'Y-m-d'));
           
            $edad=CalculaEdad($edad)+1;
            
            $edad= convertir2($edad);
             if(isset($_POST['nacionalidadform'])){
                $nacionalidadform=$_POST['nacionalidadform'];
            }
            else
            {
                $nacionalidadform="1";
            }
            
            $deptoform=$_POST['deptoform'];
            $municform=$_POST['municform'];
            $tdocumentoform=$_POST['tdocumentoform'];
            if ($tdocumentoform==1) {
                $tdocumentoformletra="Documento Único de Identidad";
            }
            else if($tdocumentoform==2){
                $tdocumentoformletra="Pasaporte";
            }
            
            else if($tdocumentoform==3){
                $tdocumentoformletra="Carnet de residente";
            }
            $Duiformletra="";
            $Nitformletra="";
            //Convertir DUI a letras
            $arreglo = str_split($Duiform);
                foreach ($arreglo as $key => $value) {
                    if($value=="-"){
                $Duiformletra .=" guion"; 
                    }else{
                        $res= convertir($value);
                        $Duiformletra .= " ".$res;
                    }
                }
            //Convertir NIT a letras
            $arreglo = str_split($Nitform);
            foreach ($arreglo as $key => $value) {
                if($value=="-"){
            $Nitformletra .=" guion"; 
                }else{
                    $res= convertir($value);
                    $Nitformletra .=" ".$res;
                }
            }
            }
           




         
if (($_POST['CampovalidacionC2'])==0) {
    //-----------------------------Datos del Comprador          
            //Si el usuario ingreso el nuevo cliente 2 entonces se reciben las variables que añadio
            $Generoform2=$_POST['GeneroRecjs2'];
            $Conocidoform2=$_POST['ConocidoRec2'];
            
            if ($Generoform2==1 || strtolower($Generoform2)=="masculino") {
                $el_ellaC="EL COMPRADOR";
                $senior2="del señor";
                $al_la2="al";
                $due="dueño";
                $poseedor="poseedor";
                $el_ellac_="él";
                $portador_portadora_c="portador";
                $conocido_conocida2="conocido como  ".ucwords(strtolower($Conocidoform2)).",";
               

            }
            else if ($Generoform2==2 || strtolower($Generoform2)=="femenino"){
                $el_ellaC="LA COMPRADORA";
                $senior2="de la señora";
                $al_la2="a la";
                $due="dueña";
                $poseedor="poseedora";
                $el_ellac_="ella";
                $portador_portadora_c="portadora";
                $conocido_conocida2="conocida como  ".ucwords(strtolower($Conocidoform2)).",";
               
            }
            $Nombreform2=$_POST['NombreRecjs2'];
            $Duiform2=$_POST['DuiRecjs2'];
            $Nitform2=$_POST['NitRecjs2'];
            $telefonoform2=$_POST['TelClijs2'];
            $oficioform2=$_POST['OficioRecjs2'];
            $fechanacform2=$_POST['NacimientoRecjs2'];

             $date = date_create($fechanacform2);
            $edad2=(date_format($date, 'Y-m-d'));
           
            $edad2=CalculaEdad($edad2)+1;
            $edad2= convertir2($edad2);
            if(isset($_POST['ID_Nacionalidad_FKRecjs2'])){
                $nacionalidadform2=$_POST['ID_Nacionalidad_FKRecjs2'];
            }
            else
            {
                $nacionalidadform2="1";
            }
            
            $deptoform2=$_POST['ID_Depto_FKRecjs2'];
            $municform2=$_POST['ID_Munic_FKRecjs2'];
            $tdocumentoform2=$_POST['ID_DocIden_FKRecjs2'];
            if ($tdocumentoform2==1) {
                $tdocumentoform2letra="Documento Único de Identidad";
            }
            else if($tdocumentoform2==2){
                $tdocumentoform2letra="Pasaporte";
            }
            
            else if($tdocumentoform2==3){
                $tdocumentoform2letra="Carnet de residente";
            }else{
                $tdocumentoform2letra=$tdocumentoform2;
            }
            $Duiformletra2= "";
            $Nitformletra2= "";
           
             //Convertir DUI a letras
            $arreglo = str_split($Duiform2);
                foreach ($arreglo as $key => $value) {
                    if($value=="-"){
                $Duiformletra2 .=" guion"; 
                    }else{
                        $res= convertir($value);
                        $Duiformletra2 .= " ".$res;
                    }
                }
            //Convertir NIT a letras
            $arreglo = str_split($Nitform2);
            foreach ($arreglo as $key => $value) {
                if($value=="-"){
            $Nitformletra2 .=" guion"; 
                }else{
                    $res= convertir($value);
                    $Nitformletra2 .= " ".$res;
                }
            }
}
else{

            //-----------------------------Datos del Comprador          
            //Si el usuario ingreso el nuevo cliente 2 entonces se reciben las variables que añadio
            $Generoform2=$_POST['Generoform2'];
            $Conocidoform2=$_POST['Conocidoform2'];
            if ($Generoform2==1 || strtolower($Generoform2)=="masculino") {
                $el_ellaC="EL COMPRADOR";
                $senior2="del señor";
                $al_la2="al";
                $due="dueño";
                $poseedor="poseedor";
                $el_ellac_="él";
                $portador_portadora_c="portador";
                $conocido_conocida2="conocido como  ".ucwords(strtolower($Conocidoform2)).",";

            }
            else if ($Generoform2==2 || strtolower($Generoform2)=="femenino"){
                $el_ellaC="LA COMPRADORA";
                $senior2="de la señora";
                $al_la2="a la";
                $due="dueña";
                $poseedor="poseedora";
                $el_ellac_="ella";
                $portador_portadora_c="portadora";
                $conocido_conocida2="conocida como  ".ucwords(strtolower($Conocidoform2)).",";
            }
            $Nombreform2=$_POST['Nombreform2'];
            $Duiform2=$_POST['Duiform2'];
            $Nitform2=$_POST['Nitform2'];
            $telefonoform2=$_POST['telefonoform2'];
            $oficioform2=$_POST['oficioform2'];
            $fechanacform2=$_POST['fechanacform2'];
            $date = date_create($fechanacform2);
            $edad2=(date_format($date, 'Y-m-d'));
           
            $edad2=CalculaEdad($edad2)+1;
            $edad2= convertir2($edad2);
            
            if(isset($_POST['nacionalidadform2'])){
                $nacionalidadform2=$_POST['nacionalidadform2'];
            }
            else
            {
                $nacionalidadform2="1";
            }
            
            $deptoform2=$_POST['deptoform2'];
            $municform2=$_POST['municform2'];
            $tdocumentoform2=$_POST['tdocumentoform2'];
            if ($tdocumentoform2==1) {
                $tdocumentoform2letra="Documento Único de Identidad";
            }
            else if($tdocumentoform2==2){
                $tdocumentoform2letra="Pasaporte";
            }
            
            else if($tdocumentoform2==3){
                $tdocumentoform2letra="Carnet de residente";
            }
            $Duiformletra2= "";
            $Nitformletra2= "";
           
             //Convertir DUI a letras
            $arreglo = str_split($Duiform2);
                foreach ($arreglo as $key => $value) {
                    if($value=="-"){
                $Duiformletra2 .=" guion"; 
                    }else{
                        $res= convertir($value);
                        $Duiformletra2 .= " ".$res;
                    }
                }
            //Convertir NIT a letras
            $arreglo = str_split($Nitform2);
            foreach ($arreglo as $key => $value) {
                if($value=="-"){
            $Nitformletra2 .=" guion"; 
                }else{
                    $res= convertir($value);
                    $Nitformletra2 .= " ".$res;
                }
            }
        
        }
        
      
        if((str_word_count($conocido_conocida, 0))<=2) //Si el campo conocidos no ha ingresado nada se coloca un espacio vacio y por ende no se imprime en el contrato
        {
            $conocido_conocida= "";
        }
        
        if((str_word_count($conocido_conocida2, 0))<=2) //Si el campo conocidos no ha ingresado nada se coloca un espacio vacio y por ende no se imprime en el contrato
        {
            $conocido_conocida2= "";
        }

    $satisfaccioncp="";
    $conpodertexto="";
    $conpodertexto2="";
    if($_POST["CampoConPoder"]==1){
        $Generoformcp=$_POST['Generoformcp'];
        $Conocidoformcp=$_POST['Conocidoformcp'];
        
        if ($Generoformcp==1) {
            $el_ellacp="EL VENDEDOR";
            $seniorcp="del señor";
            $al_lacp="al";
            $dueniocp="soy dueño y actual poseedor";
            $duecp="dueño";
            $poseedorcp="poseedor";
            $el_ellacp_="él";
            $portador_portadora_cp="portador";
            $conocido_conocidacp="conocido como  ".ucwords(strtolower($Conocidoformcp)).",";
            $de_la_lo_mismo_misma = "del mismo";
            $satisfaccioncp= " en nombre de mi representado";

            //Estos son los datos del vendedor, y se sobre escriben por que dependeria de si tiene poder o no
            $el_ellaV="EL VENDEDOR";
            $duenio="es dueño y actual poseedor";
            
            
        }
        else {
            $el_ellacp="LA VENDEDORA";
            $seniorcp="de la señora";
            $al_lacp="a la";
            $dueniocp="soy dueña y actual poseedora";
            $dueniocp="es dueña y actual poseedora";
            $poseedorcp="poseedora";
            $duecp="dueña";
            $el_ellacp_="ella";
            $portador_portadora_cp="portadora";
            $conocido_conocidacp="conocida como  ".ucwords(strtolower($Conocidoformcp)).",";
            $de_la_lo_mismo_misma = "de la misma";
            $satisfaccioncp= " en nombre de mi representada";

 //Estos son los datos del vendedor, y se sobre escriben por que dependeria de si tiene poder o no
            $el_ellaV="LA VENDEDORA";
            $duenio="es dueña y actual poseedora";
        }
        $Nombreformcp=$_POST['Nombreformcp'];
     
        $Duiformcp=$_POST['Duiformcp'];
        $Nitformcp=$_POST['Nitformcp'];
        if (isset($_POST['telefonoformcp'])){
            $telefonoformcp=$_POST['telefonoformcp'];
        }
        else {
            $telefonoformcp="1";
        }
        
        $oficioformcp=$_POST['oficioformcp'];
        $fechanacformcp=$_POST['fechanacformcp'];
  
         $date = date_create($fechanacformcp);
         $edadcp=(date_format($date, 'Y-m-d'));
        
         $edadcp=CalculaEdad($edadcp)+1;
         $edadcp= convertir2($edadcp);
        $nacionalidadformcp=$_POST['nacionalidadformcp'];
        $deptoformcp=$_POST['deptoformcp'];
        $municformcp=$_POST['municformcp'];
        $tdocumentoformcp=$_POST['tdocumentoformcp'];
        if ($tdocumentoformcp==1) {
            $tdocumentoformcpletra="Documento Único de Identidad";
        }
        else if($tdocumentoformcp==2){
            $tdocumentoformcpletra="Pasaporte";
        }
        
        else if($tdocumentoformcp==3){
            $tdocumentoformcpletra="Carnet de residente";
        }
        $Duiformcpletra="";
        $Nitformcpletra="";
        //Convertir DUI a letras
        //
 $arreglo = str_split($Duiformcp);
 
 foreach ($arreglo as $key => $value) {
     if(!is_numeric($value)&&$value!="-"){
      $Duiformcpletra .=" ".$value; 
      
       }
                 else if($value=="-"){
               $Duiformcpletra .=" guion"; 
              }else{
                  $res= convertir($value);
              $Duiformcpletra .= " ".$res;
     }
 }
        //Convertir NIT a letras
        $arreglo = str_split($Nitformcp);
        foreach ($arreglo as $key => $value) {
            if($value=="-"){
        $Nitformcpletra .=" guion"; 
            }else{
                $res= convertir($value);
                $Nitformcpletra .= " ".$res;
            }
        }

        $conpodertexto = "actuando en nombre y representación $seniorcp $Nombreformcp, $conocido_conocidacp de $edadcp años de edad, $oficioformcp, del domicilio de la ciudad de $municformcp, departamento de $deptoformcp, con Documento Unico de Identidad número $Duiformcpletra, y con Número de Identificación Tributaria $Nitformcpletra, en mi calidad de $apoderado_apoderadav Especial $de_la_lo_mismo_misma,";

        $conpodertexto2  = "DOY FE: a) De ser legítima y suficiente la personería con que actúa el primer compareciente, por haber tenido a la vista el Testimonio de Escritura Pública de Poder Especial, otorgado en esta ciudad, a las $horaRecletra horas del día $diasrecletra de $mesrecletra de $aniorecletra, ante los oficios Notariales de $NomNota, por $NomNota a favor del primer compareciente, en el cual se le faculta para otorgar el presente acto; b) Que los otorgantes me manifiestan que reconocen todos los demás conceptos vertidos en el anterior documento que hoy se legaliza; y c) Que son auténticas las firmas que calzan el anterior documento, por haber sido puestas a mi presencia de su puño y letra por los otorgantes.- Así se expresaron $La_Lo_com comparecientes a quienes expliqué los efectos legales de la presente Acta Notarial, que consta de <b>tres</b> hojas útiles; y leído que les hube íntegramente todo lo escrito en un solo acto, sin interrupción, manifiestan su conformidad, ratifican su contenido y firmamos.- DE TODO DOY FE.- ";
        
        $conpodertexto3 = "personería que al final de este documento relacionaré";
    }
    else{
        $conpodertexto2=" DOY FE: Que son auténticas las firmas que calzan el anterior documento, por haber sido puestas a mi presencia de su puño y letra por $La_Lo_com comparecientes, a quienes expliqué los efectos legales de la presente Acta Notarial, que consta de <b>dos</b> hojas útiles, y leído que les hube íntegramente lo escrito, en un solo acto sin interrupción, ratifican su contenido y firmamos.- DE TODO DOY FE.-";
    }


        $DOLARS = DOLARES_CENTAVOS($PrecioA);
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
        
            NOSOTROS: Por una parte, <B>".strtoUpper($Nombreform)."</B>, $conocido_conocida de $edad años de edad, ".ucwords(strtolower($oficioform)).", del domicilio de la ciudad de ".ucwords(strtolower($municform)).", departamento de ".ucwords(strtolower($deptoform)).",  $portador_portadora_v de mi $tdocumentoformletra número $Duiformletra y con Número de Identificación Tributaria $Nitformletra, $conpodertexto quien en el transcurso de este documento me denominaré <b>''$el_ellaV''</b>; y por otra parte <b>".strtoUpper($Nombreform2)."</b>, $conocido_conocida2 de $edad2 años de edad, ".ucwords(strtolower($oficioform2)).", del domicilio de la ciudad de ".ucwords(strtolower($municform2)).", departamento de ".ucwords(strtolower($deptoform2)).", $portador_portadora_c de mi $tdocumentoform2letra número $Duiformletra2, y con Número de Identificación Tributaria $Nitformletra2, quien en el transcurso de este documento me denominaré <b>''$el_ellaC''</b>, OTORGAMOS: I)<B> DECLARACIÓN DE DOMINIO:</B> Que por medio de este instrumento celebramos un contrato de compraventa de vehículo, que se regirá conforme a las cláusulas siguientes: Que ".strtolower($el_ellaV)." $Nomttarjeta $duenio de un vehículo con las características siguientes: PLACAS: ".ucfirst(strtolower($PlacaAletra))."; MARCA: ".ucfirst(strtolower($MarcaAletra))."; MODELO: ".ucfirst(strtolower($ModelAletra))."; COLOR: ".ucfirst(strtolower($ColoA))."; AÑO: ".ucfirst(strtolower($anioletra))."; CAPACIDAD: ".ucfirst(strtolower($CapaAletra))."; CLASE: ".ucfirst(strtolower($ClaseAletra))."; TIPO: ".ucfirst(strtolower($TipoA))."; NUMERO DE MOTOR: ".ucfirst($NumMAletra)."; NUMERO DE CHASIS GRABADO: ".ucfirst(strtolower($GrabaAletra))."; NUMERO DE CHASIS VIN: ".ucfirst(strtolower($VinAetra)).". - II) <B>PRECIO:</B> Que por el precio de <span style='text-transform: uppercase;'>".$DOLARS.",</span> que he recibido a mi entera satisfacción$satisfaccioncp de parte $senior2 $Nombreform2, le vendo a $el_ellac_ libre de gravámenes y de vicios ocultos el vehículo antes descrito, transfiriéndole en consecuencia, la tradicion del dominio, posesión, usos, goce y demás derechos reales y personales que ejerce sobre dicho vehículo, quien se obliga a responder del Saneamiento de Ley, entregándoselo materialmente con las llaves y el documento de propiedad pertinente.- III) <b>ACEPTACIÓN:</b> Asimismo ".strtolower($el_ellaC)." acepto la venta, y tradición que por medio de este documento se me hace del vehículo antes descrito, con los derechos que se me transfieren con la tradición, además de las llaves y el documento de propiedad aludido, recibiéndolo materialmente.- IV) <B>DOMICILIO ESPECIAL:</B> $contratantes para los efectos legales de este instrumento señalamos como domicilio especial el de esta ciudad, a cuyos Tribunales nos sometemos expresamente.- Así nos expresamos, ratificamos su contenido, y firmamos, en la ciudad de $lugarcontrato, a los $diasrecletra días del mes de $mesrecletra del año $aniorecletra.-
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
 ".strtoUpper($Nombreform)."
 </span>
 <span style='float:left;font-size:12px;'>
 ".strtoUpper($Nombreform2)."
 </span>
</div>
</div>
";

$contenido .= "<br><br><br><br><br><br><br><div><p>la ciudad de $lugarcontrato, a las $horaRecletra horas y $minutorecletra minutos del día $diasrecletra de $mesrecletra del año $aniorecletra. Ante mí, $NomNota, $notarioGen, del domicilio de la ciudad de ".ucwords(strtolower($DomNota)).", comparecen $Los_Las_senio: <b>".strtoupper($Nombreform)."</b>, $conocido_conocida de $edad años de edad, ".ucwords(strtolower($oficioform)).", del domicilio de ".ucwords(strtolower($municform)).", departamento de ".ucwords(strtolower($deptoform)).", a quien no conozco pero identifico por medio de su  $tdocumentoformletra numero $Duiformletra y con Número de Identificación Tributaria $Nitformletra, $conpodertexto, $conpodertexto3, quien en el transcurso de este documento se denominará como <b>''$el_ellaV''</b>; y <b>".strtoupper($Nombreform2)."</b>, $conocido_conocida2 de $edad2 años de edad, ".ucwords(strtolower($oficioform2)).", del domicilio de la ciudad de ".ucwords(strtolower($municform2)).", departamento de ".ucwords(strtolower($deptoform2)).", a quien no conozco pero identifico por medio de su $tdocumentoform2letra número $Duiformletra2, y con Número de Identificación Tributaria $Nitformletra2, quien en el transcurso de este documento se denominará <b>''$el_ellaC''</b>; y ME DICEN: I)<B> DECLARACIÓN DE DOMINIO:</B> Que ".strtolower($el_ellaV)." $Nomttarjeta $duenio de un vehículo de las caracteristicas siguientes: PLACAS: ".ucfirst(strtolower($PlacaAletra))."; MARCA: ".ucfirst(strtolower($MarcaAletra))."; MODELO: ".ucfirst(strtolower($ModelAletra))."; COLOR: ".ucfirst(strtolower($ColoA))."; AÑO: ".ucfirst(strtolower($anioletra))."; CAPACIDAD: ".ucfirst(strtolower($CapaAletra))."; CLASE: ".ucfirst(strtolower($ClaseAletra))."; TIPO: ".ucfirst(strtolower($TipoA))."; NUMERO DE MOTOR: ".ucfirst(strtolower($NumMAletra))."; NUMERO DE CHASIS GRABADO: ".ucfirst(strtolower($GrabaAletra))."; NUMERO DE CHASIS VIN: ".ucfirst(strtolower($VinAetra)).". - II) <B>PRECIO:</B> Que por el precio de <span style='text-transform: uppercase;'>$DOLARS,</span> que he recibido a mi entera satisfacción$satisfaccioncp de parte $senior2 $Nombreform2, le vende a $el_ellac_ libre de gravámenes y de vicios ocultos el vehículo antes descrito, transfiriéndole en consecuencia, la tradicion del dominio, posesión, usos, goce y demás derechos reales y personales que ejerce sobre dicho vehículo, quien se obliga a responder del Saneamiento de Ley, entregándoselo materialmente con las llaves y el documento de propiedad pertinente. III)<b> ACEPTACIÓN:</b> Asimismo ".strtolower($el_ellaC)." acepta la venta y tradición que por medio de este instrumento se le hace del vehículo antes descrito, con los derechos que se le transfieren con la tradición, además de las llaves y el documento de propiedad aludido, recibiéndolo materialmente.- IV) <B>DOMICILIO ESPECIAL:</B> $contratantes para los efectos legales de este instrumento señalan como domicilio especial el de esta ciudad, a cuyos Tribunales se someten expresamente.-
Yo, $GenNota, $conpodertexto2

</p>
           
          
<div style='width:100%%;margin-top:10%;'>
<span style='float:left;'>
 F:______________________________
 
 </span>
 <span style='float:left;margin-left:15%;'>
 F:______________________________

 </span><br>
</div>
<div style='width:100%;text-size:1em;'>
<span style='width:55%;float:left;font-size:12px;'>
".strtoUpper($Nombreform)."
 </span>
 <span style='float:left;font-size:12px;'>
 ".strtoUpper($Nombreform2)."
 </span>
</div>
</div>";
            $contenido .= "
            </div></body>";
            $contenido .= "</html>"; 

            
            $iddepto1 =  departamentoComprobar($deptoform,$conex);//Comprobar si existe regresa id sino devuelve el id del depto de ingreso
            $idmunic1 = municipioComprobar($municform,$conex,$iddepto1);//Comprobar si existe regresa id sino devuelve el id del munic de ingreso
          $iddepto2= departamentoComprobar($deptoform2,$conex);//Comprobar si existe regresa id sino devuelve el id del depto de ingreso
          $idmunic2 = municipioComprobar($municform,$conex,$iddepto2);//Comprobar si existe regresa id sino devuelve el id del munic de ingreso
          $ID_Cliente1= ingresarClientes($Duiform,$Nombreform,$Nitform,$telefonoform,$oficioform,$fechanacform,$iddepto1,$idmunic1,$tdocumentoform,$nacionalidadform,$Generoform,$conex);//Ingresar o comprobar el cliente1
          
          $ID_Cliente2= ingresarClientes($Duiform2,$Nombreform2,$Nitform2,$telefonoform2,$oficioform2,$fechanacform2,$iddepto2,$idmunic2,$tdocumentoform2,$nacionalidadform2,$Generoform2,$conex);//Ingresar o comprobar el cliente2


          $lugarcontrato =  departamentoComprobar($lugarcontrato,$conex);//Comprobar si existe regresa id sino devuelve el id del depto de ingreso
       
          $respuesta = ingresarContratos($NombreCont,$fechaRec,$horaRec,$ID_Cliente1,$Id_UsuarioL,$lugarcontrato,'101',$ID_Cliente2,$PlacaA,$MarcaA,$ModelAletra,$ColoA,$AnioAnumber,$CapaA,$ClaseA,"",$TipoA,"",$NumMA,$GrabaA,$VinA,"",$PrecioA,"1",$ttarjeta,$numerotarjeta,$conex);
         // echo $respuesta;
         $filename = $_SERVER['DOCUMENT_ROOT'] . "/CL/DOCS/CONTRATOS/ContratoVehiculo$respuesta.pdf";
    
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
    if (headers_sent($f, $l)) {//Si encontro algun espacio en blanco no va a imprimir el pdf, ya que tiene que estar vacio el php a la hora de incluir el plugin
        echo $f, '<br/>', $l, '<br/>';
        die("Ahora detecta una linea en blanco  $f, '<br/>', $l, '<br/>");
    }
   
file_put_contents($filename, $pdf);
    // Sacar el pdf generado al navegador para que pueda visualizarlo
    $dompdf->stream($nombre_archivo, array("Attachment" => 0));
   

}
else if(isset($_POST['btnGenerarword'])){
    header('Location: ImpContraDOCX.php');
exit;
}
 
else {
    $respuesta ="No se ha ingresado el pdf";
    echo $respuesta;
}
?>