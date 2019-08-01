<?php
include $_SERVER['DOCUMENT_ROOT'].'/CL\DEV\UI\BD\conexion.php';//temporal
$cant = $_POST['cantidadv'];
$a=1;
$contenido ="
";
while ($a <= $cant) {
    $contenido .="<script>
    $(document).ready(function() {
        $('#Duiform_cant_cant').attr('class', 'form-control');
        $('#Duiform_cant').attr('pattern', '[0-9]{8}-[0-9]{1}');
        $('#Duiform_cant').attr('placeholder', '########-#');
        $('#Duiform_cant').attr('required', '');
        $('#Duiform_cant').attr('title', 'Formato DUI ########-#');
        $('#Duiform_cant').attr('maxlength', '10');
    $('#tdocumentoform').on('change', function() { //Validacion DUI
        var documento = $(this).val();
        if (documento == '1') {
            $('#Duiform_cant').attr('class', 'form-control');
            $('#Duiform_cant').attr('pattern', '[0-9]{8}-[0-9]{1}');
            $('#Duiform_cant').attr('placeholder', '########-#');
            $('#Duiform_cant').attr('required', '');
            $('#Duiform_cant').attr('title', 'Formato DUI ########-#');
            $('#Duiform_cant').attr('maxlength', '10');
    
        } else {
            $('#Duiform_cant').removeAttr('pattern');
            $('#Duiform_cant').removeAttr('required');
            $('#Duiform_cant').removeAttr('maxlength');
            $('#Duiform_cant').attr('placeholder', '');
        }
    });
    $('#Nitform_cant').attr('class', 'form-control');
    $('#Nitform_cant').attr('pattern', '[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}');
    $('#Nitform_cant').attr('placeholder', '####-#######-###-#');
    $('#Nitform_cant').attr('required', '');
    $('#Nitform_cant').attr('title', 'Formato NIT ####-#######-###-#');
    $('#Nitform_cant').attr('maxlength', '17');


   
});</script>

<div class='card' id='vendedor[]' >
    <h5 align='left' class='card-header'>Vendedor $a</h5>
    <div class='card-body'>
        <div class='form-row row flex-parent'>
            <div class='col-12 mb-3' id='nuevoC1'>
                <div class='d-flex justify-content-center'>
                    <div align='left' class='col-4' hidden>
                        ID
                        <input name='IDform' type='ExpePacRe' class='form-control' placeholder='ID' id='IDform'
                            value='1' disabled>
                    </div>
                    <div align='left' class='col-4'>
                        Genero
                        <select name='Generoform[]' class='form'
                            style='border:2px solid green;border-radius:5px;width:100%;padding:5px;height:60%;'
                            placeholder='Tipo de Documento' id='Generoform[]' value=''>

                            <option value='1'>Masculino</option>
                            <option value='2'>Femenino</option>
                        </select>
                    </div>
                    <div align='left' class='col-4'>
                        Nombre 
                        <input name='Nombreform[]' type='text' class='form'
                            style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                            placeholder='Nombre' id='Nombreform[]' value=''>
                    </div>
                    <div align='left' class='col-4'>
                        Conocido Por:
                        <input name='Conocidoform[]' type='text' class='form'
                            style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                            placeholder='Conocido por' id='Conocidoform[]' value=''>
                    </div>
                </div>
                <div class='form-row align-items-center col-12'>
                    <div align='left' class='col-4'>
                        Tipo de Documento
                        <select name='tdocumentoform[]' class='form'
                            style='border:2px solid green;border-radius:5px;width:100%;padding:5px;height:60%;'
                            placeholder='Tipo de Documento' id='tdocumentoform[]' value=''>

                            <option value='1'>Dui</option>
                            <option value='2'>Pasaporte</option>
                            <option value='3'>Carnet de residente</option>
                        </select>
                    </div>
                    <div align='left' class='col-4'>
                        Numero de Documento
                        <input name='Duiform[]' type='text' class='form-control'
                            style='border:2px solid green;border-radius:5px;width:100%;padding:5px;' placeholder='Dui'
                            id='Duiform_cant'>
                    </div>
                    <div align='left' class='col-4'>
                        Nit
                        <input name='Nitform[]' type='text' class='form-control'
                            style='border:2px solid green;border-radius:5px;width:100%;padding:5px;' placeholder='Nit'
                            id='Nitform_cant' value=''>
                    </div>

                </div>
                <div class='form-row align-items-center col-12'>
                    <div align='left' class='col-4'>
                        Oficio
                        <input name='oficioform[]' type='text' class='form'
                            style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                            placeholder='Oficio' id='oficioform[]' value=''>
                    </div>
                    <div align='left' class='col-4'>
                        Fecha de Nacimiento
                        <input name='fechanacform[]' type='date' class='form'
                            style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                            placeholder='Fecha de Nacimiento' id='fechanacform[]' value=''>
                    </div>
                    <div align='left' class='col-4'>
                        Telefono
                        <input name='telefonoform[]' type='text' class='form'
                            style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                            placeholder='Telefono' id='telefonoform[]' value=''>
                    </div>

                </div>
                <div class='form-row align-items-center col-12'>
                    <div align='left' class='col-4'>
                        Nacionalidad
                        <select name='nacionalidadform[]' class='form'
                            style='border:2px solid green;border-radius:5px;width:100%;padding:5px;height:60%;'
                            placeholder='Tipo de Documento' id='nacionalidadform[]' value=''>

                            <option value='1' select>Salvadoreño</option>
                            <option value='2'>Extranjero</option>
                        </select>
                    </div>
                    <div align='left' class='col-4'>
                        Departamento
                        <input name='deptoform[]' type='text' class='form'
                            style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                            placeholder='Departamento' id='deptoform[]' value=''>
                    </div>
                    <div align='left' class='col-4'>
                        Municipio
                        <input name='municform[]' type='text' class='form'
                            style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                            placeholder='Municipio' id='municform[]' value=''>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>



    ";

$a++;}

echo $contenido."<input type='text' value='$cant' name='cantv' id='cantv'  style='display:none'>";
