<!--EL FORM ESTÁ GENERAL NO POR CARDS NI MODALS-->
<div id="cantidades_pestania" hidden>
    <form method="POST" target="_blank" class="was-validated" action="/CL/DEV/UX/Funciones/includes/ImpContra_arrendamiento_cant.php">
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

                <div class="card bg-light col-sm-12 mt-2" id="cantidadcomprador_aqui" style='padding:3px;'>
                </div>

             
                <div>
                        <h5 align="left">Datos del contrato:</h5>
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">I) Objetivo del Contrato:</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <div class="col-12 mt-2">
                                            <div class="form-row align-items-center col-12">
                                                <div align="left" class="col-4">
                                                    Naturaleza del inmueble
                                                    <input name="Arre_naturaleza" id="Arre_naturaleza" type="text" class="form-control"
                                                        placeholder=" Naturaleza del inmueble" value="" required>
                                                    <div align="center" class="invalid-feedback">Ingrese una Naturaleza
                                                        del
                                                        inmueble valida
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Area total
                                                    <input name="Arre_areaT" id="Arre_areaT" type="text" class="form-control"
                                                        placeholder="  Area total" value="" required>
                                                    <div align="center" class="invalid-feedback">Area total
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Ubicación Inmueble
                                                    <input name="Arre_Ubi_in" id="Arre_Ubi_in" type="text" class="form-control"
                                                        placeholder="Ubicacon Inmueble" value="" required>
                                                    <div align="center" class="invalid-feedback">Ingrese Ubicación del
                                                        Inmueble
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Ciudad Inmueble
                                                    <input name="Arre_ciu_in" id="Arre_ciu_in" type="text" class="form-control"
                                                        placeholder="Ciudad Inmueble" value="" required>
                                                    <div align="center" class="invalid-feedback">Ingrese ciudad del
                                                        Inmueble
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Departamento Inmueble
                                                    <input name="Arre_Dept_in" id="Arre_Dept_in" type="text" class="form-control"
                                                        placeholder="Departamento inmueble" value="" required>
                                                    <div align="center" class="invalid-feedback">Ingrese un departamento
                                                        para el inmueble
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Matricula
                                                    <input name="Arre_Matri_ins" id="Arre_Matri_ins" type="text" class="form-control"
                                                        placeholder="Matricula" value="" required>
                                                    <div align="center" class="invalid-feedback">Matricula
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Seccion del registro
                                                    <input name="Arre_Regis_Propie" id="Arre_Regis_Propie" type="text" class="form-control"
                                                        placeholder="Seccion del registro" value=""
                                                        required>
                                                    <div align="center" class="invalid-feedback">Seccion del registro
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Zona
                                             
                                                    <select name="Arre_Sec" id="Arre_Sec" class="form-control" required>
                                                        <option value="centro">Centro</option>
                                                        <option value="oriente">Oriente</option>
                                                        <option value="occidente" selected>Occidente</option>
                                                    </select><div align="center" class="invalid-feedback">Seccion de
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Departamento del Registro
                                                    <input name="Arre_Depto_secc" id="Arre_Depto_secc" type="text" class="form-control"
                                                        placeholder="Departamento de" value="" required>
                                                    <div align="center" class="invalid-feedback">Ingrese Departamento de registro
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">II) Entrega del inmueble:</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <div class="col-12 mt-2">
                                            <div class="form-row align-items-center col-12">
                                                <div align="left" class="col-12">
                                                    Servicios Basicos
                                                    <input name="Arre_ServiciosB" id="Arre_ServiciosB" type="text" class="form-control"
                                                        placeholder="Servicios Basicos" value="" required>
                                                    <div align="center" class="invalid-feedback">Servicios Basicos
                                                    </div>
                                                </div>
                                                <div align="left" class="col-12">
                                                    Destino del inmueble
                                                    <input name="Arre_InmuebleDest" id="Arre_InmuebleDest" type="text" class="form-control"
                                                        placeholder="Destinado para" value="" required>
                                                    <div align="center" class="invalid-feedback">Destinado para
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">III) Plazo</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <div class="col-12 mt-2">
                                            <div class="form-row align-items-center col-12">
                                                <div align="left" class="col-4">
                                                    Plazo
                                                    <input name="Arre_PlazoCon" id="Arre_PlazoCon" type="text" class="form-control"
                                                        placeholder="Plazo convenido" value="" required>
                                                    <div align="center" class="invalid-feedback">Plazo convenido
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Fecha de Inicio
                                                    <input name="Arre_FechaIni" type="date" class="form-control"
                                                        placeholder="Destinado para" value="" required>
                                                    <div align="center" class="invalid-feedback">Elija una fecha de
                                                        inicio
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Fecha de vencimiento
                                                    <input name="Arre_FechaHas" type="date" class="form-control"
                                                        placeholder="Destinado para" value="" required>
                                                    <div align="center" class="invalid-feedback">Elija una fecha de
                                                        finalizacion
                                                    </div>
                                                </div>
                                                <div align="left" class="col-12">
                                                    Canones de arreglo y servicios
                                                    <input name="Arre_Canones" id="Arre_Canones" type="text" class="form-control"
                                                        placeholder="Canones de arreglo y servicios" value="" required>
                                                    <div align="center" class="invalid-feedback">Canones de arreglo y
                                                        servicios
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">IV) Precio del arrendamiento</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <div class="col-12 mt-2">
                                            <div class="form-row align-items-center col-12">
                                                
                                                <div align="left" class="col-4">
                                            Precio Arrendamiento (Dolares):
                                            <input name="Arre_PrecioArren" id="Arre_PrecioArren" type="text" class="form-control"
                                            placeholder="Precio Arrendamiento" value="" required>
                                                    <div align="center" class="invalid-feedback">Precio Arrendamiento
                                                (Dolares)
                                            </div>
                                        </div>
                                        <div align="left" class="col-4">
                                        Precio Arrendamiento (Centavos):
                                            <input name="Arre_PrecioArrenc" id="Arre_PrecioArrenc" type="text" class="form-control"
                                            placeholder="Precio Arrendamiento" value="" required>
                                                    <div align="center" class="invalid-feedback">Precio Arrendamiento
                                                (centavos)
                                            </div>
                                        </div>
                                        
                                                <div align="left" class="col-4">
                                                    Cant.(#) Cuotas
                                                    <input name="Arre_CantCuo" id="Arre_CantCuo" type="text" class="form-control"
                                                        placeholder="Cant. Cuotas" value="" required>
                                                    <div align="center" class="invalid-feedback">Cant. Cuotas
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Costo de Cuotas (DOLARES)
                                                    <input name="Arre_CostoCuo" id="Arre_CostoCuo" type="text" class="form-control"
                                                        placeholder="Costo por cada cuota" value="" required>
                                                    <div align="center" class="invalid-feedback">Costo de Cuotas
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Costo de Cuotas (CENTAVOS)
                                                    <input name="Arre_CostoCuoc" id="Arre_CostoCuoc" type="text" class="form-control"
                                                        placeholder="Costo por cada cuota " value="" required>
                                                    <div align="center" class="invalid-feedback">Costo de Cuotas
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Costo * Cuota Mantenimiento (DOLARES)
                                                    <input name="Arre_CostCanMan" id="Arre_CostCanMan" type="text" class="form-control"
                                                        placeholder="Costo Canon Mantenimiento" value="" >
                                                    <div align="center" class="valid-feedback">Puede dejarlo vacio
                                                    </div>
                                                </div>
                                                <div align="left" class="col-6">
                                                    Costo * Cuota Mantenimiento  (CENTAVOS)
                                                    <input name="Arre_CostCanManc" id="Arre_CostCanManc" type="text" class="form-control"
                                                        placeholder="Costo Canon Mantenimiento" value="" >
                                                    <div align="center" class="valid-feedback">Puede dejarlo vacio
                                                    </div>
                                                </div>
                                                <div align="left" class="col-6">
                                                    Fecha de pago de cuotas (dia de cada mes)
                                                    <input name="Arre_dia_pagoCuo" id="Arre_dia_pagoCuo" type="text" class="form-control"
                                                        placeholder="Dia pagar cuotas" value="">
                                                    <div align="center" class="valid-feedback">Puede dejarlo vacio
                                                    </div>
                                                </div>
                                                <div align="left" class="col-12">
                                                    Servicios que incluye
                                                    <input name="Arre_serv_mant" id="Arre_serv_mant" type="text" class="form-control"
                                                        placeholder="Servicios que incluye el mantenimiento" value="" >
                                                    <div align="center" class="valid-feedback">Puede dejarlo vacio
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">V) Deposito:</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <div class="col-12 mt-2">
                                            <div class="form-row align-items-center col-12">
                                                <div align="left" class="col-4">
                                                    Cantidad Deposito (DOLARES)
                                                    <input name="Arre_Cant_Depos" id="Arre_Cant_Depos" type="text" class="form-control"
                                                        placeholder="Cantidad Deposito" value="" required>
                                                    <div align="center" class="invalid-feedback">Cantidad Deposito
                                                    </div>
                                                </div>
                                                <div align="left" class="col-4">
                                                    Cantidad Deposito (CENTAVOS)
                                                    <input name="Arre_Cant_Deposc" id="Arre_Cant_Deposc" type="text" class="form-control"
                                                        placeholder="Cantidad Deposito" value="" required>
                                                    <div align="center" class="invalid-feedback">Cantidad Deposito
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">VII) Intereses en caso de mora:</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <div class="col-12 mt-2">
                                            <div class="form-row align-items-center col-12">
                                                <div align="left" class="col-4">
                                                    Porciento mensual por Mora
                                                    <input name="Arre_porc_mora" id="Arre_porc_mora" type="NUMBER" step='1' class="form-control"
                                                        placeholder="Porciento Mora" value="" required>
                                                    <div align="center" class="invalid-feedback">Porciento mensual por Mora
                                                    </div>
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
                                            <button name="btnGenerarword" type="submit"
                                                class="btn btn-info btn-lg">Generar</button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                        data-target="#metodoimpresion_cant">
                        Generar
                    </button>

                    <button name="btnCanrec" type="reset" class="btn btn-danger btn-lg">Cancelar</button>
                </div>
            </div>
    </form>
</div>