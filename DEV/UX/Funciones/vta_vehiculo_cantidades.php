<!-- PESTAÑA DE RECETA -->
<script src="/CL/DEV/UI/js/jquery-3.3.1.min.js"></script>
<!--EL FORM ESTÁ GENERAL NO POR CARDS NI MODALS-->
<div id="cantidades_pestania" hidden>
    <form method="POST" target="_blank" class="was-validated" action="/CL/DEV/UX/Funciones/includes/ImpContra_cant.php">
        <!-- CONTENIDO DE LA PESTAÑA -->
        <div id="ContenedorPestania">

            <div style="color:black" class="form-row">
                <div class="form-row align-items-center col-12">
                    <div align="left" class="col-4">
                        Lugar del contrato:
                        <input name="lugarcontrato" type="text" class="form-control" placeholder="Lugar del contrato"
                            value="<?php 
                                            //Domicilio Notario desde bd
                                            echo "Santa Ana";
                                            ?>" required>
                        <div align="center" class="invalid-feedback">Ingrese un lugar
                        </div>
                    </div>

                    <div align="left" class="col-4">
                        Fecha:
                        <input name="fechaRec" type="date" class="form-control" placeholder="Fecha" id="fechaRec"
                            value="<?php echo date('Y-m-d');?>" required>
                        <div align="center" class="invalid-feedback">Seleccione una
                            fecha.</div>
                    </div>
                    <div align="left" class="col-4">
                        Hora:
                        <input name="horaRec" type="time" class="form-control" placeholder="Hora" id="horaRec"
                            value="<?php echo date("H:i:m");?>" required>
                        <div align="center" class="invalid-feedback">Ingrese hora
                            (formato 24 hrs).</div>
                    </div>
                </div>
                <div class="card bg-light col-sm-12 mt-2">
                    <h5 align="left" class="card-header">Notario</h5>
                    <div class="card-body">
                        <div class="form-row row flex-parent">
                            <div class="form-row align-items-center col-12">
                                <div align="left" class="col-4">
                                    Nombre Notario:
                                    <input name="NomNota" type="text" class="form-control"
                                        placeholder="Nombre del notario" value="Lic. Colon" required>
                                    <div align="center" class="invalid-feedback">Ingrese un numero nit
                                    </div>
                                </div>
                                <div align="left" class="col-4">
                                    Domicilio Notario:
                                    <input name="DomNota" type="text" class="form-control"
                                        placeholder="Domicilio Notario" value="<?php
                                            //Domicilio Notario desde bd
                                            echo $DomicilioNotario;
                                            ?>" required>
                                    <div align="center" class="invalid-feedback">Ingrese un Domicilio
                                    </div>
                                </div>

                                <div align="left" class="col-4">
                                    Nit Notario:
                                    <input name="NitNota" type="text" class="form-control" placeholder="Nit Notario"
                                        value="<?php 
                                            //Domicilio Notario desde bd
                                            echo $NitNotario;
                                            ?>" required>
                                    <div align="center" class="invalid-feedback">Ingrese un numero nit
                                    </div>
                                </div>
                                <div align='center' class='col-12 mt-2'>
                                    Genero Notario
                                    <select name='GenNota' class="form"
                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;height:60%;"
                                        placeholder='Tipo de Documento' id='Generoform' value=''>

                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="card bg-light col-sm-12 mt-2" id="cantidadvendedor_aqui" style='padding:3px;'>
                
                </div>
                <div id="documento_privado2" class="card bg-light col-sm-12 mt-2" id="cantidadvendedor_aqui" style='padding:3px;' hidden>
                <div  class='display-5' >
                    Documento Privado de Compraventa de Vehiculo
                    <hr>
                    <div class="form-row align-items-center col-12">
                        <div align="left" class="col-4">
                            Ciudad
                            <input name="ciudad_poder" id="ciudad_poder" type="text" class="form-control" placeholder=""
                                value="Santa Ana">
                            <div align="center" class="invalid-feedback">Ingrese una ciudad
                                donde se dio
                                el poder
                            </div>
                        </div>
                        <div align="left" class="col-4">
                            Departamento
                            <input name="departamento_poder" id="departamento_poder" type="text" class="form-control"
                                placeholder="" value="Santa Ana">
                            <div align="center" class="invalid-feedback">Ingrese un
                                departamento
                                donde
                                se dio el poder
                            </div>
                        </div>

                        <div align="left" class="col-4">
                            Fecha
                            <input name="fecha_poder" id="fecha_poder" type="date" class="form-control" placeholder="">
                            <div align="center" class="invalid-feedback">Fecha que se dio el
                                poder
                            </div>
                        </div>
                        <div align="left" class="col-4">
                            Hora
                            <input name="hora_poder" id="hora_poder" type="time" class="form-control" placeholder="">
                            <div align="center" class="invalid-feedback">Hora que se dio el
                                poder
                            </div>
                        </div>
                        <div align="left" class="col-4">
                            Oficios Notariales de
                            <input name="oficios_poder" id="oficios_poder" type="text" class="form-control"
                                placeholder="">
                            <div align="center" class="invalid-feedback">Oficios Notariales
                                de
                            </div>
                        </div>
                    </div>
                </div>
                </div>
               

                <div class="card bg-light col-sm-12 mt-2" id="cantidadcomprador_aqui" style='padding:3px;'>

                </div>
                <div class="card bg-light col-sm-12 mt-2">
                    <h5 align="left" class="card-header">Datos del auto:</h5>
                    <div class="card-body">
                        <div class="form-row row flex-parent">
                            <div class="form-row align-items-center col-12">
                                <div class="col-12 mt-2">
                                    <div class="form-row align-items-center col-12">
                                        <div align="left" class="col-4">
                                            Placas:
                                            <input name="PlacaA" id="PlacaA" type="text" class="form-control"
                                                placeholder="Placa del auto" value="" required>
                                            <div align="center" class="invalid-feedback">Ingrese una Placa
                                            </div>
                                        </div>
                                        <div align="left" class="col-4">
                                            Marca:
                                            <input name="MarcaA" type="text" class="form-control"
                                                placeholder="Marca del Auto" value="" required>
                                            <div align="center" class="invalid-feedback">Ingrese un Domicilio
                                            </div>
                                        </div>
                                        <div align="left" class="col-4">
                                            Modelo:
                                            <input name="ModelA" type="text" class="form-control"
                                                placeholder="Modelo del auto" value="" required>
                                            <div align="center" class="invalid-feedback">Ingrese un Modelo
                                            </div>
                                        </div>
                                        <div align="left" class="col-4">
                                            Color:
                                            <input name="ColoA" type="text" class="form-control"
                                                placeholder="Color del Auto" value="" required>
                                            <div align="center" class="invalid-feedback">Ingrese un Color
                                            </div>
                                        </div>
                                        <div align="left" class="col-4">
                                            Año:
                                            <input name="AnioA" id="AnioA" type="text" class="form-control"
                                                placeholder="Año" value="" required>
                                            <div align="center" class="invalid-feedback">Ingrese un Año del
                                                vehiculo
                                            </div>
                                        </div>

                                        <div align="left" class="col-4">
                                            Capacidad:
                                            <input name="CapaA" id="CapaA" type="text" class="form-control"
                                                placeholder="Capacidad del vehiculo" value="" required>
                                            <div align="center" class="invalid-feedback">Ingrese una capacidad
                                            </div>
                                        </div>
                                        <div align="left" class="col-4">
                                            Clase:
                                            <input name="ClaseA" type="text" class="form-control"
                                                placeholder="Clase del vehiculo" value="" required>
                                            <div align="center" class="invalid-feedback">Ingrese Clase
                                            </div>
                                        </div>
                                        <div align="left" class="col-4">
                                            Tipo:
                                            <input name="TipoA" type="text" class="form-control"
                                                placeholder="Ingrese un tipo de auto" value="">
                                            <div align="center" class="invalid-feedback">Ingrese tipo de auto
                                            </div>
                                        </div>
                                        <div align="left" class="col-4">
                                            N° Motor:
                                            <input name="NumMA" type="text" class="form-control"
                                                placeholder="Numero de motor" value="" required>
                                            <div align="center" class="invalid-feedback">Ingrese un numero del
                                                motor
                                            </div>
                                        </div>
                                        <div align="left" class="col-4">
                                            N° Chasis Grabado:
                                            <input name="GrabaA" type="text" class="form-control"
                                                placeholder="Chasis grabado del auto" value="" required>
                                            <div align="center" class="invalid-feedback">Ingrese el numero
                                                grabado
                                            </div>
                                        </div>
                                        <div align="left" class="col-4">
                                            Vin:
                                            <input name="VinA" type="text" class="form-control" placeholder="VIN"
                                                value="" required>
                                            <div align="center" class="invalid-feedback">Ingrese un numero de
                                                Vin
                                            </div>
                                        </div>
                                        <div align="left" class="col-4">
                                                    Traccion
                                                    <input name="traccion" type="text" class='form-control'
                                                        placeholder="Traccion del vehiculo" value="">
                                                    
                                                    <div align="center" class="valid-feedback">Puede dejarlo vacio si no tiene el campo
                                                    </div>
                                                </div>
                                        <div align="left" class="col-4">
                                            Precio (Dolares):
                                            <input name="PrecioA" id="PrecioA" type="text" class="form-control"
                                                placeholder="Precio del Vehiculo" value="" step="0.1" required>
                                            <div align="center" class="invalid-feedback">Ingrese un precio
                                                (Dolares)
                                            </div>
                                        </div>
                                        <div align="left" class="col-4">
                                            Precio (Centavos):
                                            <input name="PrecioAC" id="PrecioAC" type="text" class="form-control"
                                                placeholder="Precio del Vehiculo" value="" step="0.1" required>
                                            <div align="center" class="invalid-feedback">Ingrese un precio
                                                (centavos)
                                            </div>
                                        </div>
                                        <div align="left" class="col-4">
                                            Tarjeta Circulación / Póliza / Documento Privado
                                            <select name='ttarjetacant' class='form-control'
                                                placeholder='Tipo de Documento' id='ttarjetacant' value='' required>
                                                <option value="">Tarjeta Circulación/Póliza/Documento
                                                    Privado
                                                </option>
                                                <option value="1">Tarjeta de Circulación</option>
                                                <option value="2">Póliza</option>
                                                <option value="3">Documento Privado</option>
                                            </select>
                                            <div align="center" class="invalid-feedback">Ingrese tipo de
                                                documento
                                            </div>
                                            <script>
                                            $("#ttarjetacant")
                                                .change(function() {
                                                    var str = "";
                                                    $("#ttarjetacant option:selected").each(function() {
                                                        str = $("#ttarjetacant").val();

                                                        if (str == 1) {

                                                            $('#poliza2').attr("required",
                                                                "false");
                                                            $('#pemitida').attr("required",
                                                                "false");
                                                            $("#tarjeta2").removeAttr('hidden');
                                                            $('#tarjeta2').attr("required", "");
                                                            $('#tarjeta2').attr("minlength",
                                                                '1');
                                                            $('#poliza2').attr("hidden", true);
                                                            $('#pemitida').attr("hidden", true);


                                                            $("#documento_privado2").attr(
                                                                "hidden",
                                                                true);
                                                            $("#ciudad_poder").attr("required",
                                                                false);
                                                            $("#departamento_poder").attr(
                                                                "required", false);
                                                            $("#fecha_poder").attr("required",
                                                                false);
                                                            $("#hora_poder").attr("required",
                                                                false);
                                                            $("#oficios_poder").attr("required",
                                                                false);
                                                            $("#radiobtn").prop("checked",
                                                                true);
                                                        } else if (str == 2) {
                                                            $('#tarjeta2').attr("required",
                                                                "false");
                                                            $('#poliza2').attr("required", "");
                                                            $('#pemitida').attr("required", "");
                                                            $("#poliza2").removeAttr('hidden');
                                                            $("#pemitida").removeAttr('hidden');
                                                            $('#tarjeta2').attr("hidden", true);

                                                            $("#documento_privado2").attr(
                                                                "hidden",
                                                                true);
                                                            $("#ciudad_poder").attr("required",
                                                                false);
                                                            $("#departamento_poder").attr(
                                                                "required", false);
                                                            $("#fecha_poder").attr("required",
                                                                false);
                                                            $("#hora_poder").attr("required",
                                                                false);
                                                            $("#oficios_poder").attr("required",
                                                                false);
                                                            $("#radiobtn").prop("checked",
                                                                true);
                                                        } else if (str == 3) {
                                                            $('#tarjeta2').attr("required",
                                                                "false");
                                                            $('#poliza2').attr("required",
                                                                "false");
                                                            $('#pemitida').attr("required",
                                                                "false");
                                                            $("#poliza2").attr('hidden', true);
                                                            $("#pemitida").attr('hidden', true);
                                                            $('#tarjeta2').attr("hidden", true);
                                                            $("#radiobtn2").prop("checked",
                                                                true);


                                                            $("#documento_privado2").attr(
                                                                "hidden",
                                                                false);
                                                            $("#ciudad_poder").attr("required",
                                                                true);
                                                            $("#departamento_poder").attr(
                                                                "required", true);
                                                            $("#fecha_poder").attr("required",
                                                                true);
                                                            $("#hora_poder").attr("required",
                                                                true);
                                                            $("#oficios_poder").attr("required",
                                                                true);

                                                        } else {
                                                            $('#permitida2').attr("required",
                                                                "false");
                                                            $('#poliza2').attr("required",
                                                                "false");
                                                            $('#tarjeta2').attr("required",
                                                                "false");
                                                            $('#poliza2').attr("hidden", true);
                                                            $('#tarjeta2').attr("hidden", true);
                                                            $('#pemitida').attr("hidden", true);

                                                            $("#documento_privado2").attr(
                                                                "hidden",
                                                                true);
                                                            $("#ciudad_poder").attr("required",
                                                                false);
                                                            $("#departamento_poder").attr(
                                                                "required", false);
                                                            $("#fecha_poder").attr("required",
                                                                false);
                                                            $("#hora_poder").attr("required",
                                                                false);
                                                            $("#oficios_poder").attr("required",
                                                                false);
                                                            $("#radiobtn").prop("checked",
                                                                true);
                                                        }
                                                    });
                                                })
                                                .trigger("change");
                                            </script>
                                        </div>
                                        <div align="left" class="col-4" id="tarjeta2" name="tarjeta2" hidden>
                                            Numero de tarjeta
                                            <input name="numerotarjeta" type="text" class='form-control'
                                                placeholder=" Numero de tarjeta/Póliza" value="" class="form-control">
                                            <div align="center" class="invalid-feedback">Ingrese un numero
                                                correcto
                                            </div>
                                        </div>
                                        <div align="left" class="col-4" id="poliza2" name="poliza2" hidden>
                                            Póliza
                                            <input name="numeropoliza" type="text" class='form-control'
                                                style="border:2px solid green;border-radius:5px;width:100%;"
                                                placeholder=" Numero de tarjeta/Póliza" value="">
                                            <div align="center" class="invalid-feedback">Ingrese un numero
                                                correcto
                                            </div>
                                        </div>
                                        <div align="left" class="col-4" id="permitida2" name="permitida2" hidden>
                                            Emitida
                                            <input name="polemitida" type="date" class='form-control'
                                                placeholder="Numero de tarjeta/Póliza" value=""
                                                style="border:2px solid green;border-radius:5px;width:100%;">
                                            <div align="center" class="invalid-feedback">Ingrese un numero
                                                correcto
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Buscar Clientes</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...<div align="left" class="form-group">
                                    Ingrese Nombre o apellidos o Nº de expediente o DUI, para buscar el cliente
                                    correspondiente.
                                    <input type="text" name="busqueda" id="busqueda" value=""
                                        placeholder="Nombre o apellido o Nº de Exediente o DUI" maxlength="30"
                                        autocomplete="off" class="form-control border border-primary"
                                        onKeyUp="buscar();" />
                                </div>

                                <div id="resultadoBusqueda">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Buscar Clientes</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...<div align="left" class="form-group">
                                    Ingrese Nombre o apellidos o Nº de expediente o DUI, para buscar el cliente
                                    correspondiente.
                                    <input type="text" name="busqueda2" id="busqueda2" value=""
                                        placeholder="Nombre o apellido o Nº de Exediente o DUI" maxlength="30"
                                        autocomplete="off" class="form-control border border-primary"
                                        onKeyUp="buscar2();" />
                                </div>

                                <div id="resultadoBusqueda2">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="form-group">

                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Hecho Por:</div>
                            </div>
                            <input type="text" class="form-control" id="nommedRec" name="nommedRec"
                                placeholder="Nombre del medico" value="<?php include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UI\BD\conexion.php"; //temporal
                                echo $NombreUsuario;?>" disabled>
                            <input type="hidden" class="form-control" id="Id_Usuario" name="Id_Usuario"
                                placeholder="Nombre del medico" value="<?php include $_SERVER['DOCUMENT_ROOT'] . "/CL\DEV\UI\BD\conexion.php"; //temporal
                                echo $CarnetUsuario;?>">
                        </div>
                    </div>
                </div>



            </div>
            <div class="row">
                    <span clasS="text-dark col-2"> Cantidad de hojas</span> <input type="number" class="form-control col-10"  placeholder="Cantidad hojas" value="2" name="cant_hojas">
                   </div>
            <div id="snackbar">Selecciono SI TIENE Poder</div>
            <div class="form-row mt-3 float-right">
                <div>
                    <!-- Aca mando los valores de los campos de busqueda cliente 1 que resibo por js-->
                    <input type="hidden" id="ExpedienteRecjs" name="ExpedienteRecjs">
                    <input type="hidden" id="GeneroRecjs" name="GeneroRecjs">
                    <input type="hidden" id="NombreRecjs" name="NombreRecjs">
                    <input type="hidden" id="ConocidoRecjs" name="ConocidoRecjs">
                    <input type="hidden" id="DuiRecjs" name="DuiRecjs">
                    <input type="hidden" id="NitRecjs" name="NitRecjs">
                    <input type="hidden" id="TelClijs" name="TelClijs">
                    <input type="hidden" id="OficioRecjs" name="OficioRecjs">
                    <input type="hidden" id="NacimientoRecjs" name="NacimientoRecjs">
                    <input type="hidden" id="ID_Depto_FKRecjs" name="ID_Depto_FKRecjs">
                    <input type="hidden" id="ID_Munic_FKRecjs" name="ID_Munic_FKRecjs">
                    <input type="hidden" id="ID_Nacionalidad_FKRecjs" name="ID_Nacionalidad_FKRecjs" reqired>
                    <input type="hidden" id="ID_DocIden_FKRecjs" name="ID_DocIden_FKRecjs">


                    <!-- Aca mando los valores de los campos de busqueda cliente 2 que resibo por js-->
                    <input type="hidden" id="ExpedienteRecjs2" name="ExpedienteRecjs2">
                    <input type="hidden" id="GeneroRecjs2" name="GeneroRecjs2">
                    <input type="hidden" id="NombreRecjs2" name="NombreRecjs2">
                    <input type="hidden" id="ConocidoRecjs2" name="ConocidoRecjs2">
                    <input type="hidden" id="DuiRecjs2" name="DuiRecjs2">
                    <input type="hidden" id="NitRecjs2" name="NitRecjs2">
                    <input type="hidden" id="TelClijs2" name="TelClijs2">
                    <input type="hidden" id="OficioRecjs2" name="OficioRecjs2">
                    <input type="hidden" id="NacimientoRecjs2" name="NacimientoRecjs2">
                    <input type="hidden" id="ID_Depto_FKRecjs2" name="ID_Depto_FKRecjs2">
                    <input type="hidden" id="ID_Munic_FKRecjs2" name="ID_Munic_FKRecjs2">
                    <input type="hidden" id="ID_Nacionalidad_FKRecjs2" name="ID_Nacionalidad_FKRecjs2">
                    <input type="hidden" id="ID_DocIden_FKRecjs2" name="ID_DocIden_FKRecjs2">


                    <!-- Campos de validacion de formularios-->
                    <input type="hidden" id="CampovalidacionC1" name="CampovalidacionC1">
                    <input type="hidden" id="CampovalidacionC2" name="CampovalidacionC2">
                    <input type="hidden" id="CampoConPoder" name="CampoConPoder">
                    <div class="modal fade" id="metodoimpresion" tabindex="-1" role="dialog"
                        aria-labelledby="metodoimpresion" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="metodoimpresionTitle" style="color:black;">¿Como
                                        quiere imprimir el
                                        contrato?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="color:black;">
                                    <p>Con PDF</p>
                                    <button name="btnGenerar" type="submit" class="btn btn-info btn-lg">Generar</button>
                                    <hr style="background-color:black;border:1px solid black;">
                                    <p>Con WORD<p>
                                            <button name="btnGenerarword" type="submit"
                                                class="btn btn-info btn-lg">Generar</button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="metodoimpresion_cant" tabindex="-1" role="dialog"
                        aria-labelledby="metodoimpresion_cant" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="metodoimpresion_canttitle" style="color:black;">¿Como
                                        quiere imprimir el
                                        contrato?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="color:black;">
                                    <p>Con PDF</p>
                                    <input type="submit" name="btnGenerar" type="submit" value="Generar"
                                        class="btn btn-info btn-lg">
                                    <hr style="background-color:black;border:1px solid black;">
                                    <p>Con WORD<p>
                                            <button name="btnGenerarword" type="submit" class="btn btn-info btn-lg"
                                                DISABLED>Generar</button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="btnGenerar" type="submit" value="Generar"
                                        class="btn btn-info btn-lg">

                    <button name="btnCanrec" type="reset" class="btn btn-danger btn-lg">Cancelar</button>
                </div>
            </div>
    </form>
</div>