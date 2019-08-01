<script src="/CL/DEV/UI/js/jquery-3.3.1.min.js"></script>
              <script src="/CL/DEV/UI/js/all.js"></script>
              <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="/CL/DEV/UI/js/popper.min.js"></script>
    <script src="/CL/DEV/UI/js/bootstrap.min.js"></script>
    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/CL/DEV/UX/Plugins/dompdf/autoload.inc.php";
use Dompdf\Dompdf;
if (isset($_GET['enviar'])) {
    $contenido = '<html>';
    $contenido .= '<head>';
    $contenido .= '</head>';
    $contenido .= '<body>';
    $contenido .= '<h1>Ejemplo de lo que hace este DOMPDF</h1>';
    $contenido .= '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati at ut vitae exercitationem perspiciatis iste quidem cum nulla, harum autem voluptatem, atque a dolorum impedit explicabo officiis dolorem natus ipsum.';
    $contenido .= '</p>';
    $contenido .= '</body>';
    $contenido .= '</html>';
    echo $contenido;
    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml(ob_get_clean());
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');
    // Render the HTML as PDF
    $dompdf->render();
    $nombre_archivo = 'comprobante.pdf';
    $pdf = $dompdf->output(); //Obtiene el pdf
    $f;
    $l;
    if (headers_sent($f, $l)) {
        echo $f, '<br/>', $l, '<br/>';
        die('now detect line');
    }
    // Output the generated PDF to Browser
    $dompdf->stream($nombre_archivo, array("Attachment" => 0));
} else {
    echo "No se ha ingresado el boton";
}
?>
                                             <script>
                                               $().ready(function()
                                                    {

                                                    $('#pasar').click(function() { return !($('#origen option:selected').clone()).appendTo('#destino'); });   //Del primer Select multiple pasa al segundo
                                                    $('.quitar').click(function() { return !$('#destino option:selected').remove(); }); // Del segundo Select multiple se quitan los valores

                                                    $('.prescri').click(function() { return !$('#destino option:selected'); }); // Del segundo Select multiple se quitan los valores
                                                    //$('.submit').click(function() { $('#destino option').prop('selected', 'selected'); });
                                                });
                                               </script>
                             <script>
                             $(document).ready(function(){
                                $("#destino").change(function(){
            alert($('select[id=destino]').val());
            $('#valor2').val($(this).val());
	});
                            });

                                </script>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UI\BD\conexion.php"; //temporal
$Querydepto = "SELECT Id_Medic, Nom_Medic, Presentacion  FROM tb_medic ORDER BY Nom_Medic ASC";
$result = mysqli_query($conex, $Querydepto) or die(mysqli_error() . "[" . $Querydepto . "]");
?>
                                                                    <select name="origen[]" id="origen" multiple="" class="form-control" >
                                                                    <option value="">Medicamentos:</option>
                                                                    <?php
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Id_Medic'] . "'>" . $row['Nom_Medic'] . ", " . $row['Presentacion'] . "</option>";
}

?>
                                                                    </select>



                                                                    <input type="button" id="pasar" class="pasar izq btn btn-info btn-sm mx-0 px-0 my-1 py-3" value=" → " style="width: 20%; height: 10%; display: flex;align-items: center;justify-content: center;" >
                                                                    <input type="button" class="quitar der btn btn-danger btn-sm mx-0 px-0 my-1 py-3" value=" ← "  style="width: 20%; height: 10%;; display: flex;align-items: center;justify-content: center;">




                                                                        <label for="destino">Medicamento(s)
                                                                            Recetado(s):</label>
                                                                    <select name="destino[]" id="destino" multiple="multiple"  class="form-control"  required="true">
                                                                                </select>


                                                                    <div  class="form-group col float-right" id="Aqui"> texto aqui </div>


                                                                    <script>
$(document).ready(function(){
	$("select[name=color1]").change(function(){
            alert($('select[name=color1]').val());
            $('input[name=valor1]').val($(this).val());
        });

	$(".ejemplo3").change(function(){
            alert($('select[class=ejemplo3]').val());
            $('.valor3').val($(this).val());
	});
});
</script>
   <a href="?enviar=1">Presioname</a>
Formulario 1
<form name="ejemplo1" action="" method="POST">
    <select name="color1">
   <option value="0">Selecciona una opción</option>
<option value="azul">Azul</option>
<option value="rojo">Rojo</option>
</select>
<input type="text" name="valor1" size="40" value="Aquí saldrá el valor del select cuando cambie">
</form>

Formulario 2
<form name="ejemplo2" action="" method="POST">
    <select name="color2" id="ejemplo2">
   <option value="0">Selecciona una opción</option>
<option value="azul">Azul</option>
<option value="rojo">Rojo</option>
</select>
<input type="text" name="valor2" size="40" id="valor2" value="Aquí saldrá el valor del select cuando cambie">
</form>

Formulario 3
<form name="ejemplo3" action="" method="POST">
    <select name="color3" class="ejemplo3">
   <option value="0">Selecciona una opción</option>
<option value="azul">Azul</option>
<option value="rojo">Rojo</option>
</select>
<input type="text" name="valor3" size="40" class="valor3" value="Aquí saldrá el valor del select cuando cambie">
</form>

