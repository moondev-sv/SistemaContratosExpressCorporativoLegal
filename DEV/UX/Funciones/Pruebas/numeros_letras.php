<?php 
function basico($numero) {
    $valor = array ('cero','uno','dos','tres','cuatro','cinco','seis','siete','ocho',
    'nueve',"guion");
    return $valor[$numero];
    }
function convertir($n) {
switch (true) {
case ( $n >= 0 ) : return basico($n); break;
    }
}


$arreglo = str_split($_POST['numero']);
foreach ($arreglo as $key => $value) {
    if($value=="-"){
   echo "guión ";
    }else{
        $res= convertir($value);
        echo $res." ";
    }
}
?>
<form action="" method="post">
<input type="text" name="numero">
<input type="submit" value="">
</form>