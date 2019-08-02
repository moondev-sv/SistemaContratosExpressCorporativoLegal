<?php
include $_SERVER['DOCUMENT_ROOT'].'/CL\DEV\UI\BD\conexion.php';//temporal
$cant = $_POST['cantidadc'];
$a=1;
$contenido ="";
while ($a <= $cant) {
    $contenido .="
    <script>
    $(document).ready(function() {
                    $('#Duiform2_cant').attr('class', 'form-control');
            $('#Duiform2_cant').attr('pattern', '[0-9]{8}-[0-9]{1}');
            $('#Duiform2_cant').attr('placeholder', '########-#');
            $('#Duiform2_cant').attr('required', '');
            $('#Duiform2_cant').attr('title', 'Formato DUI ########-#');
            $('#Duiform2_cant').attr('maxlength', '10');
    $('#tdocumentoform2').on('change', function() { //Validacion DUI
        var documento = $(this).val();
        if (documento == '1') {
            $('#Duiform2_cant').attr('class', 'form-control');
            $('#Duiform2_cant').attr('pattern', '[0-9]{8}-[0-9]{1}');
            $('#Duiform2_cant').attr('placeholder', '########-#');
            $('#Duiform2_cant').attr('required', '');
            $('#Duiform2_cant').attr('title', 'Formato DUI ########-#');
            $('#Duiform2_cant').attr('maxlength', '10');

        } else {
            $('#Duiform2_cant').removeAttr('pattern');
            $('#Duiform2_cant').removeAttr('required');
            $('#Duiform2_cant').removeAttr('maxlength');
            $('#Duiform2_cant').attr('placeholder', '');
        }
    });

    $('#Nitform2_cant').attr('class', 'form-control');
    $('#Nitform2_cant').attr('pattern', '[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}');
    $('#Nitform2_cant').attr('placeholder', '####-#######-###-#');
    $('#Nitform2_cant').attr('required', '');
    $('#Nitform2_cant').attr('title', 'Formato NIT ####-#######-###-#');
    $('#Nitform2_cant').attr('maxlength', '17');



});</script>

<div class='card' id='comprador[]'>
    <h5 align='left' class='card-header'>Comprador $a:</h5>
    <div class='card-body'>
        <div class='form-row row flex-parent'>
            <div class='form-row align-items-center col-12'>
                <div class='col-12 mb-3' id='nuevoC2'>
                    <div class='d-flex justify-content-center'>
                        <div align='left' class='col-4' hidden>
                            ID
                            <input name='IDform2[]' type='text' class='form-control' placeholder='ID2' id='IDform2[]'
                                value='' disabled>
                        </div>
                        <div align='left' class='col-4'>
                            Genero
                            <select name='Generoform2[]' class='form'
                                style='border:2px solid green;border-radius:5px;width:100%;padding:5px;height:60%;'
                                placeholder='Tipo de Documento' id='Generoform2[]' value=''>

                                <option value='1'>Masculino</option>
                                <option value='2'>Femenino</option>
                            </select>
                        </div>
                        <div align='left' class='col-4'>
                            Nombre
                            <input name='Nombreform2[]' type='text' class='form'
                                style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                                placeholder='Nombre' id='Nombreform2[]' value=''>
                        </div>
                        <div align='left' class='col-4'>
                            Conocido Por:
                            <input name='Conocidoform2[]' type='text' class='form'
                                style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                                placeholder='Conocido por' id='Conocidoform2[]' value=''>
                        </div>
                    </div>

                    <div class='form-row align-items-center col-12'>
                        <div align='left' class='col-4'>
                            Tipo de Documento
                            <select name='tdocumentoform2[]'
                                style='border:2px solid green;border-radius:5px;width:100%;padding:5px;height:60%;'
                                placeholder='Tipo de Documento' id='tdocumentoform2[]' value=''>

                                <option value='1'>Dui</option>
                                <option value='2'>Pasaporte</option>
                                <option value='3'>Carnet de residente</option>
                            </select>
                        </div>
                        <div align='left' class='col-4'>
                            Numero de documento
                            <input name='Duiform2[]' type='text' class='form-control'
                                style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                                placeholder='Documento de identidad' id='Duiform2_cant' value=''>
                        </div>
                        <div align='left' class='col-4'>
                            Nit
                            <input name='Nitform2[]' type='text' class='form-control'
                                style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                                placeholder='Nit' id='Nitform2_cant' value=''>
                        </div>

                    </div>
                    <div class='form-row align-items-center col-12'>
                        <div align='left' class='col-4'>
                            Oficio
                            <input name='oficioform2[]' type='text' class='form'
                                style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                                placeholder='Oficio' id='oficioform2[]' value=''>
                        </div>
                        <div align='left' class='col-4'>
                            Fecha de Nacimiento
                            <input name='fechanacform2[]' type='date' class='form'
                                style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                                placeholder='Fecha de Nacimiento' id='fechanacform2[]' value=''>
                        </div>

                        <div align='left' class='col-4'>
                            Telefono
                            <input name='telefonoform2[]' type='text' class='form'
                                style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                                placeholder='Telefono' id='telefonoform2[]' value=''>
                        </div>



                    </div>
                    <div class='form-row align-items-center col-12'>
                        <div align='left' class='col-4'>
                            Nacionalidad
                            <select name='nacionalidadform2[]'
                                style='border:2px solid green;border-radius:5px;width:100%;padding:5px;height:60%;'
                                placeholder='Tipo de Documento' id='nacionalidadform2[]' value=''>

                                <option value='1'>Salvadoreño</option>
                                <option value='2'>Extranjero</option>
                            </select>
                        </div>

                        <div align='left' class='col-4'>
                            Departamento
                            <input name='deptoform2[]' type='text' class='form'
                                style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                                placeholder='Departamento' id='deptoform2[]' value=''>
                        </div>
                        <div align='left' class='col-4'>
                            Municipio
                            <input name='municform2[]' type='text' class='form'
                                style='border:2px solid green;border-radius:5px;width:100%;padding:5px;'
                                placeholder='Municipio' id='municform2[]' value=''>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";

$a++;}
echo $contenido."<input type='text' value='$cant' name='cantc' id='cantc' style='display:none'>";
