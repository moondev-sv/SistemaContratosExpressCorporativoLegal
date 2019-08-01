
<form action="" method="POST">
<input type="number" name="filasNumber" id="filasNumber" min="0" 
max="10" placeholder="Incerte el numero de filas que quiere añadir dinamicamente" 
style="width:35%;" required>
<input type="submit" name="enviar" value="enviar">
</form>
<?php 
    if (isset($_POST['enviar'])) {
        $filas=$_POST['filasNumber'];
        $resultado="";
        $a=1;
        $resultado = "<table border=1><th>En esta tabla iran las ".$filas." filas</th>";
        while ($a <= $filas) {
            $resultado .="<tr><td>Esta es la fila numero ".$a."<td><tr>";
            $a++;
        }
        $resultado .="</table><br><h1>Se salio ya de las filas</h1>";
        echo $resultado; 
    }
    else {
        echo "No entro";
    }
?>
</table>
