<?php
function mes($numero)
{
    $valor = ['','enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre',
        'octubre', 'noviembre', 'diciembre'];
    return $valor[$numero];
}
echo mes($_POST['numero']);
?>
<form action="" method="post">
    <input type="number" name ="numero"><input type="submit">
</form>