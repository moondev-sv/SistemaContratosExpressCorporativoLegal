<script src="/CL/DEV/UI/js/jquery-3.3.1.min.js"></script>
<script src="/CL/DEV/UI/js/all.js"></script>
<script src="/CL/DEV/UI/js/popper.min.js"></script>
<script src="/CL/DEV/UI/js/bootstrap.min.js"></script>
<!-- PESTAÑA DE RECETA -->
<script src="/CL/DEV/UI/js/jquery-3.3.1.min.js"></script>

<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {
        bottom: 0;
        opacity: 0;
    }

    to {
        bottom: 30px;
        opacity: 1;
    }
}

@keyframes fadein {
    from {
        bottom: 0;
        opacity: 0;
    }

    to {
        bottom: 30px;
        opacity: 1;
    }
}

@-webkit-keyframes fadeout {
    from {
        bottom: 30px;
        opacity: 1;
    }

    to {
        bottom: 0;
        opacity: 0;
    }
}

@keyframes fadeout {
    from {
        bottom: 30px;
        opacity: 1;
    }

    to {
        bottom: 0;
        opacity: 0;
    }
}
</style>



<script>
function funcionMostrarB(
        valor) { //Funcion para seleccionar el id que eligio el usuario y mostrar los resultados de la consulta
    var ident = valor;
    var x = document.getElementById("snackbar");
    x.innerHTML = "Selecciononado";
    x.className = "show";
    setTimeout(function() {
        x.className = x.className.replace("show", "");
    }, 2000);
    var urlenombre = "/CL/DEV/UX/funciones/includes/nombreP.php";
    $.post(urlenombre, {
        valorBusqueda: ident
    }, function(datos) { //Redireccion
        $("#aqui").html(datos); //Mensaje devuelto por la consulta
        //----------------Recibo datos de la consulta js y los guardo aca-----------------
        $("#ExpedienteRecjs").val($("#ExpedienteRec").val());
        $("#GeneroRecjs").val($("#GeneroRec").val());
        $("#GeneroRec").keyup(function() {
            $("#GeneroRecjs").val($("#GeneroRec").val());
        });
        $("#NombreRecjs").val($("#NombreRec").val());
        $("#NombreRec").keyup(function() {
            $("#NombreRecjs").val($("#NombreRec").val());
        });
        $("#ConocidoRecjs").val($("#ConocidoRec").val());
        $("#ConocidoRec").keyup(function() {
            $("#ConocidoRecjs").val($("#ConocidoRec").val());
        });
        $("#DuiRecjs").val($("#DuiRec").val());
        $("#DuiRec").keyup(function() {
            $("#DuiRecjs").val($("#DuiRec").val());
        });
        $("#NitRecjs").val($("#NitRec").val());
        $("#NitRec").keyup(function() {
            $("#NitRecjs").val($("#NitRec").val());
        });
        $("#TelClijs").val($("#TelCli").val());
        $("#TelCli").keyup(function() {
            $("#TelClijs").val($("#TelCli").val());
        });
        $("#OficioRecjs").val($("#OficioRec").val());
        $("#OficioRec").keyup(function() {
            $("#OficioRecjs").val($("#OficioRec").val());
        });
        $("#NacimientoRecjs").val($("#NacimientoRec").val());
        $("#NacimientoRec").keyup(function() {
            $("#NacimientoRecjs").val($("#NacimientoRec").val());
        });
        $("#ID_Depto_FKRecjs").val($("#ID_Depto_FKRec").val());
        $("#ID_Depto_FKRec").keyup(function() {
            $("#ID_Depto_FKRecjs").val($("#ID_Depto_FKRec").val());
        });
        $("#ID_Munic_FKRecjs").val($("#ID_Munic_FKRec").val());
        $("#ID_Munic_FKRec").keyup(function() {
            $("#ID_Munic_FKRecjs").val($("#ID_Munic_FKRec").val());
        });
        $("#ID_Nacionalidad_FKRecjs").val($("#ID_Nacionalidad_FKRec").val());
        $("#ID_Nacionalidad_FKRec").keyup(function() {
            $("#ID_Nacionalidad_FKRecjs").val($("#ID_Nacionalidad_FKRec").val());
        });
        $("#ID_DocIden_FKRecjs").val($("#ID_DocIden_FKRec").val());
        $("#ID_DocIden_FKRec").keyup(function() {
            $("#ID_DocIden_FKRecjs").val($("#ID_DocIden_FKRec").val());
        });

    });
}

function funcionMostrarB2(
    valor) { //Funcion para seleccionar el id que eligio el usuario y mostrar los resultados de la consulta
    var ident = valor;
    var x = document.getElementById("snackbar");
    x.innerHTML = "Selecciononado";
    x.className = "show";
    setTimeout(function() {
        x.className = x.className.replace("show", "");
    }, 2000);

    $.post("/CL/DEV/UX/funciones/includes/nombreP2.php", {
        valorBusqueda: ident
    }, function(datos) { //Redireccion
        $("#aqui2").html(datos); //Mensaje devuelto por la consulta


        //----------------Recibo datos de la consulta js y los guardo aca-----------------
        $("#ExpedienteRecjs2").val($("#ExpedienteRec2").val());
        $("#ExpedienteRecjs2").keydown(function() {
            $("#ExpedienteRecjs2").val($("#ExpedienteRec2").val());
        });

        $("#GeneroRecjs2").val($("#GeneroRec2").val());
        $("#GeneroRec2").keyup(function() {
            $("#GeneroRecjs2").val($("#GeneroRec2").val());
        });
        $("#NombreRecjs2").val($("#NombreRec2").val());
        $("#NombreRec2").keyup(function() {
            $("#NombreRecjs2").val($("#NombreRec2").val());
        });
        $("#ConocidoRecjs2").val($("#ConocidoRec2").val());
        $("#ConocidoRec2").keyup(function() {
            $("#ConocidoRecjs2").val($("#ConocidoRec2").val());
        });
        $("#DuiRecjs2").val($("#DuiRec2").val());
        $("#DuiRec2").keyup(function() {
            $("#DuiRecjs2").val($("#DuiRec2").val());
        });
        $("#NitRecjs2").val($("#NitRec2").val());
        $("#NitRec2").keyup(function() {
            $("#NitRecjs2").val($("#NitRec2").val());
        });
        $("#TelClijs2").val($("#TelCli2").val());
        $("#TelCli2").keyup(function() {
            $("#TelClijs2").val($("#TelCli2").val());
        });
        $("#OficioRecjs2").val($("#OficioRec2").val());
        $("#OficioRec2").keyup(function() {
            $("#OficioRecjs2").val($("#OficioRec2").val());
        });
        $("#NacimientoRecjs2").val($("#NacimientoRec2").val());
        $("#NacimientoRec2").keyup(function() {
            $("#NacimientoRecjs2").val($("#NacimientoRec2").val());
        });
        $("#ID_Depto_FKRecjs2").val($("#ID_Depto_FKRec2").val());
        $("#ID_Depto_FKRec2").keyup(function() {
            $("#ID_Depto_FKRecjs2").val($("#ID_Depto_FKRec2").val());
        });
        $("#ID_Munic_FKRecjs2").val($("#ID_Munic_FKRec2").val());
        $("#ID_Munic_FKRec2").keyup(function() {
            $("#ID_Munic_FKRecjs2").val($("#ID_Munic_FKRec2").val());
        });
        $("#ID_Nacionalidad_FKRecjs2").val($("#ID_Nacionalidad_FKRec2").val());
        $("#ID_Nacionalidad_FKRec2").keyup(function() {
            $("#ID_Nacionalidad_FKRecjs2").val($("#ID_Nacionalidad_FKRec2").val());
        });
        $("#ID_DocIden_FKRecjs2").val($("#ID_DocIden_FKRec2").val());
        $("#ID_DocIden_FKRec2").keyup(function() {
            $("#ID_DocIden_FKRecjs2").val($("#ID_DocIden_FKRec2").val());
        });

    });
}
$(document).ready(function() {



    // Enviamos la variable de javascript a archivo.php
    $("#aniadircontrato").click(function() {
        // Esta es la variable que vamos a pasar
        $("#cantidades_pestania").attr("hidden", false);
        var cantidadv = $("#cantvendedores").val();
        var cantidadc = $("#cantcompradores").val();
        $.post("/CL/DEV/UX/Funciones/includes/cantidad_vendedores_js.php", {
            "cantidadv": cantidadv
        }, function(canitidaddevuelta) { //Redireccion
            $("#cantidadvendedor_aqui").html(
                canitidaddevuelta); //Mensaje devuelto por la consulta

        });

        $.post("/CL/DEV/UX/Funciones/includes/cantidad_compradores_js.php", {
            "cantidadc": cantidadc
        }, function(canitidaddevuelta) { //Redireccion
            $("#cantidadcomprador_aqui").html(
                canitidaddevuelta); //Mensaje devuelto por la consulta

        });
    });


    //$('#AnioA').on('keydown', function() {
    //    $('#AnioA').attr("pattern", '[0-9]{4}');
    //   $('#AnioA').attr("placeholder", "####");
    //   $('#AnioA').attr("required", "");
    //   $('#AnioA').attr("title", "Formato año ####");
    //   $('#AnioA').attr("maxlength", "4");
    //});
    // $('#CapaA').on('keydown', function() {
    //    $('#CapaA').attr("pattern", '[0-9]{1,3}');
    //    $('#CapaA').attr("placeholder", "###");
    //    $('#CapaA').attr("required", "");
    //    $('#CapaA').attr("title", "Ingrese desde 1 a 3 digitos");
    //    $('#CapaA').attr("maxlength", "3");
    //    $('#CapaA').attr("minlength", "1");
    //});
    $('#PrecioA').on('keydown', function() {
        $('#PrecioA').attr("pattern", "^\\$?(([1-9](\\d*|\\d{0,2}(,\\d{3})*))|0)(\\.\\d{1,2})?$");
        $('#PrecioA').attr("step", "0.1");
        $('#PrecioA').attr("required", "");
        $('#PrecioA').attr("maxlength", "9999999999");
        $('#PrecioA').attr("minlength", "1");
    });

    $('#tdocumentoform').on('change', function() { //Validacion DUI
        var documento = $(this).val();
        if (documento == "1") {
            $('#Duiform').attr("class", 'form-control');
            $('#Duiform').attr("pattern", '[0-9]{8}-[0-9]{1}');
            $('#Duiform').attr("placeholder", "########-#");
            $('#Duiform').attr("required", "");
            $('#Duiform').attr("title", "Formato DUI ########-#");
            $('#Duiform').attr("maxlength", "10");

        } else {
            $('#Duiform').removeAttr("pattern");
            $('#Duiform').removeAttr("required");
            $('#Duiform').removeAttr("maxlength");
            $('#Duiform').attr("placeholder", "");
        }
    });
     $('#t_persona').on('change', function() { //Validacion DUI
        var documento = $(this).val();
        if (documento == "1") {
            $('#BCliente1').removeAttr("disabled");
            $('#persona_juridica').attr("hidden","true");
          
            $('#nuevoC1').attr("hidden","true");
        }
        if (documento == "2") {
            $('#BCliente1').attr("disabled","true");
            $('#persona_juridica').removeAttr("hidden");
        }
    });
    $('#sabados').on('change', function() { //Validacion DUI
        var documento = $(this).val();
        if (documento == "1") {
            $('#sabado_campos').attr("hidden","true");    
        }
        if (documento == "2") {
            $('#sabado_campos').removeAttr("hidden");   
        }
    });
    $('#personas_depe').on('change', function() { //Validacion DUI
        var documento = $(this).val();
        var a = 1;
        if (documento == 0) {
         
         $("#dependientes1").attr("hidden","true");
         $("#dependientes2").attr("hidden","true");  
         $("#dependientes3").attr("hidden","true");  
         $("#dependientes4").attr("hidden","true");  
         $("#dependientes5").attr("hidden","true");  

     }
        if (documento == 1) {
         
            $("#dependientes1").removeAttr("hidden");
            $("#dependientes2").attr("hidden","true");  
            $("#dependientes3").attr("hidden","true");  
            $("#dependientes4").attr("hidden","true");  
            $("#dependientes5").attr("hidden","true");  

        }
        if (documento == 2) {
            $("#dependientes1").removeAttr("hidden");
            $("#dependientes2").removeAttr("hidden");  
            $("#dependientes3").attr("hidden","true");  
            $("#dependientes4").attr("hidden","true");  
            $("#dependientes5").attr("hidden","true");  
        }
        if (documento == 3) {
            $("#dependientes1").removeAttr("hidden");
            $("#dependientes2").removeAttr("hidden");  
            $("#dependientes3").removeAttr("hidden");   
            $("#dependientes4").attr("hidden","true");  
            $("#dependientes5").attr("hidden","true");  
        }
        if (documento == 4) {
            $("#dependientes1").removeAttr("hidden");
            $("#dependientes2").removeAttr("hidden");  
            $("#dependientes3").removeAttr("hidden"); 
            $("#dependientes4").removeAttr("hidden");   
            $("#dependientes5").attr("hidden","true");  
        }
        if (documento == 5) {
            $("#dependientes1").removeAttr("hidden");
            $("#dependientes2").removeAttr("hidden");  
            $("#dependientes3").removeAttr("hidden"); 
            $("#dependientes4").removeAttr("hidden");   
            $("#dependientes5").removeAttr("hidden"); 
        }
    });
    $('#tdocumentoform2').on('change', function() { //Validacion DUI
        var documento = $(this).val();
        if (documento == "1") {
            $('#Duiform2').attr("class", 'form-control');
            $('#Duiform2').attr("pattern", '[0-9]{8}-[0-9]{1}');
            $('#Duiform2').attr("placeholder", "########-#");
            $('#Duiform2').attr("required", "true");
            $('#Duiform2').attr("title", "Formato DUI ########-#");
            $('#Duiform2').attr("maxlength", "10");
            $('#Lugar_carnet_migratorio').attr("hidden",'true');
            $('#dia_carnet_migratorio').attr("hidden",'true');
            $('#dia_vence_carnet_migratorio').attr("hidden",'true');
        }
        else if (documento == "3") {
            $('#Duiform2').attr("class", 'form-control');
            $('#Duiform2').attr("placeholder", "Carnet");
            $('#Duiform2').attr("required", "true");
            $('#Lugar_carnet_migratorio').removeAttr("hidden");
            $('#dia_carnet_migratorio').removeAttr("hidden");
            $('#dia_vence_carnet_migratorio').removeAttr("hidden");
           

        } else {
            $('#Lugar_carnet_migratorio').attr("hidden",'true');
            $('#dia_carnet_migratorio').attr("hidden",'true');
            $('#dia_vence_carnet_migratorio').attr("hidden",'true');
            $('#Duiform2').removeAttr("pattern");
            $('#Duiform2').removeAttr("maxlength");
            $('#Duiform2').attr("placeholder", "Pasaporte");
        }
    });


    $("#resultadoBusqueda").html('<p>Haga una busqueda</p>'); //Campo donde se mete el valor a buscar

    var validacionC1 = 1; //1 PARA AÑADIDO, 0 PARA BUSCADO
    var validacionC2 = 1; //1 PARA AÑADIDO, 0 PARA BUSCADO

    //**-------------------------------Cliente1-------------------  */
    $("#ACliente1").click(function() { //Esconde los campos cuando añade un nuevo cliente
        $('#aqui').attr("hidden", true);
        $("#nuevoC1").removeAttr('hidden');
        validacionC1 = 1;
        $("#CampovalidacionC1").val(validacionC1);

        $('#Duiform').attr("class", 'form-control');
        $('#Duiform').attr("pattern", '[0-9]{8}-[0-9]{1}');
        $('#Duiform').attr("placeholder", "########-#");
        $('#Duiform').attr("required", "");
        $('#Duiform').attr("title", "Formato DUI ########-#");
        $('#Duiform').attr("maxlength", "10");

        $('#Nitform').attr("class", 'form-control');
        $('#Nitform').attr("pattern", '[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}');
        $('#Nitform').attr("placeholder", "####-#######-###-#");
        $('#Nitform').attr("required", "");
        $('#Nitform').attr("title", "Formato NIT ####-#######-###-#");
        $('#Nitform').attr("maxlength", "17");



    });
    $("#BCliente1").click(function() { //Esconde los campos cuando busca un cliente
        $('#aqui').attr("hidden", false);
        $('#nuevoC1').attr("hidden", true);
        validacionC1 = 0;
        $("#CampovalidacionC1").val(validacionC1);
        $('#Nitform').removeAttr("required");
        $('#Duiform').removeAttr("required");

    });

    //**-------------------------------Cliente2-------------------  */
    $("#ACliente2").click(function() { //Esconde los campos cuando añade un nuevo cliente
        $('#aqui2').attr("hidden", true);
        $("#nuevoC2").removeAttr('hidden');
        validacionC2 = 1;
        $("#CampovalidacionC2").val(validacionC2);

        $('#Duiform2').attr("class", 'form-control');
        $('#Duiform2').attr("pattern", '[0-9]{8}-[0-9]{1}');
        $('#Duiform2').attr("placeholder", "########-#");
        $('#Duiform2').attr("required", "");
        $('#Duiform2').attr("title", "Formato DUI ########-#");
        $('#Duiform2').attr("maxlength", "10");

        $('#Nitform2').attr("class", 'form-control');
        $('#Nitform2').attr("pattern", '[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}');
        $('#Nitform2').attr("placeholder", "####-#######-###-#");
        $('#Nitform2').attr("required", "");
        $('#Nitform2').attr("title", "Formato NIT ####-#######-###-#");
        $('#Nitform2').attr("maxlength", "17");

    });
    $("#BCliente2").click(function() { //Esconde los campos cuando busca un cliente
        $('#aqui2').attr("hidden", false);
        $('#nuevoC2').attr("hidden", true);
        validacionC2 = 0;

        $("#CampovalidacionC2").val(validacionC2);
        $('#Nitform2').removeAttr("required");
        $('#Duiform2').removeAttr("required");
    });
    

    $("#inlineRadio1").click(function() { //Muestra los campos cuando pone con poder
        $('#ContenedorPestania').attr("hidden", false);
        var banderacpoder = 1;
        var x = document.getElementById("snackbar");
        x.innerHTML = "Selecciono Con Poder";
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 2000);
        $("#CampoConPoder").val(banderacpoder);
        $("#cantidades_pestania").attr("hidden", true);
        $('#candidades').attr("hidden", true);
        $('#vendedor').attr("hidden", false);
        $('#comprador').attr("hidden", false);
        $('#cpoder').attr("hidden", false);

        $('#Duiformcp').attr("class", 'form-control');
        $('#Duiformcp').attr("pattern", '[0-9]{8}-[0-9]{1}');
        $('#Duiformcp').attr("placeholder", "########-#");
        $('#Duiformcp').attr("required", "");
        $('#Duiformcp').attr("title", "Formato DUI ########-#");
        $('#Duiformcp').attr("maxlength", "10");

        $('#Nitformcp').attr("class", 'form-control');
        $('#Nitformcp').attr("pattern", '[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}');
        $('#Nitformcp').attr("placeholder", "####-#######-###-#");
        $('#Nitformcp').attr("required", "");
        $('#Nitformcp').attr("title", "Formato NIT ####-#######-###-#");
        $('#Nitformcp').attr("maxlength", "17");
    });

    $("#inlineRadio2").click(function() { //Esconde los campos cuando pone sin poder
        $('#ContenedorPestania').attr("hidden", false);
        $("#cantidades_pestania").attr("hidden", true);
        var banderacpoder = 0;
        var x = document.getElementById("snackbar");
        x.innerHTML = "Selecciono Sin Poder";
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 2000);
        $('#candidades').attr("hidden", true);
        $('#vendedor').attr("hidden", false);
        $('#comprador').attr("hidden", false);
        $('#cpoder').attr("hidden", true);

        $("#CampoConPoder").val(banderacpoder);
        $('#Nitformcp').removeAttr("required");
        $('#Duiformcp').removeAttr("required");
    });

    $("#inlineRadio3").click(function() { //Esconde los campos cuando pone sin poder
        var banderacpoder = 2;
        var x = document.getElementById("snackbar");
        x.innerHTML = "Selecciono con # cantidad vendedores/compradores";
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 2000);
        $("#cantidades_pestania").attr("hidden", true);
        $('#candidades').attr("hidden", false);
        $('#ContenedorPestania').attr("hidden", true);

        $('#vendedor').attr("hidden", true);
        $('#comprador').attr("hidden", true);
        $('#cpoder').attr("hidden", true);

        $("#CampoConPoder").val(banderacpoder);
        $('#Nitformcp').removeAttr("required");
        $('#Duiformcp').removeAttr("required");
    });
});


// Enviamos la variable de javascript a archivo.php
$("#enviar").click(function() {
    // Esta es la variable que vamos a pasar
    var miVariableJS = $("#nommedRec").val();

    $.post("/CL/DEV/UX/Funciones/includes/testPOST.php", {
        "texto": miVariableJS
    });
});

function buscar() { //Funcion que hace la busqueda por Jquery a la base de datos
    var textoBusqueda = $("input#busqueda").val();
    var respuesta = $('[name=btncerrar]');

    if (textoBusqueda != "") {
        $.post("/CL/DEV/UX/funciones/includes/busquedaP.php", {
            valorBusqueda: textoBusqueda
        }, function(mensaje) { //Redireccion
            $("#resultadoBusqueda").html(mensaje); //Mensaje devuelto por la consulta

        });


    } else {
        $("#resultadoBusqueda").html(
            '<p>Haga una bussqueda</p>'); //Si no ha ingresado datos en el campo se muestra un mensaje de ingreso
    };
};

function buscar2() { //Funciono que hace la busqueda por Jquery a la base de datos
    var textoBusqueda = $("input#busqueda2").val();
    var respuesta = $('[name=btncerrar]');

    if (textoBusqueda != "") {
        $.post("/CL/DEV/UX/funciones/includes/busquedaP2.php", {
            valorBusqueda: textoBusqueda
        }, function(mensaje) { //Redireccion
            $("#resultadoBusqueda2").html(mensaje); //Mensaje devuelto por la consulta

        });
    } else {
        $("#resultadoBusqueda2").html(
            '<p>Haga una bussqueda</p>'); //Si no ha ingresado datos en el campo se muestra un mensaje de ingreso
    };
};

function validarFormatoFecha(campo) {
    var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
    if ((campo.match(RegExPattern)) && (campo != '')) {
        return true;
    } else {
        return false;
    }
}
</script>


<style type="text/css">
/* Hide the browser's default radio button */
input[type="radio"]:checked,
label {
    opacity: 0.9 !important;
    margin-right: 65px;
    animation-duration: 1s;
    z-index: 0;
}

input[type="radio"],
label {

    margin-right: 65px;
    animation-duration: 1s;
}

.form-control::-webkit-input-placeholder {
    color: brown;
}

/* WebKit, Blink, Edge */
.form-control:-moz-placeholder {
    color: brown;
}

/* Mozilla Firefox 4 to 18 */
.form-control::-moz-placeholder {
    color: brown;
}

/* Mozilla Firefox 19+ */
.form-control:-ms-input-placeholder {
    color: brown;
}

/* Internet Explorer 10-11 */
.form-control::-ms-input-placeholder {
    color: brown;
}

/* Microsoft Edge */
</style>
<!--EL FORM ESTÁ GENERAL NO POR CARDS NI MODALS-->
<div class="col-12">
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h4 align="center" class="display-4 mt-3" style="color:black;">Contrato: <span
                    class="display-5">Trabajo</span>
            </h4>
            <br>
            <form method="POST" target="_blank" class="was-validated"
                action="/CL/DEV/UX/Funciones/includes/impContra_trabajo.php">
                <!-- CONTENIDO DE LA PESTAÑA -->
                <div id="ContenedorPestania">
                    <div style="color:black" class="form-row">
                        <div class="form-row align-items-center col-12">
                            <div align="left" class="col-4">
                                Lugar del contrato:
                                <input name="lugarcontrato" type="text" class="form-control"
                                    placeholder="Lugar del contrato" value="<?php 
                                            //Domicilio Notario desde bd
                                            echo "Santa Ana";
                                            ?>" required>
                                <div align="center" class="invalid-feedback">Ingrese un lugar
                                </div>
                            </div>
                            <div align="left" class="col-4">
                               Departamento del contrato:
                                <input name="deptocontrato" type="text" class="form-control"
                                    placeholder="Departamento del contrato" value="<?php 
                                            //Domicilio Notario desde bd
                                            echo "Santa Ana";
                                            ?>" required>
                                <div align="center" class="invalid-feedback">Ingrese un lugar
                                </div>
                            </div>
                            <div align="left" class="col-4">
                                Fecha:
                                <input name="fechaRec" type="date" class="form-control" placeholder="Fecha"
                                    id="fechaRec" value="<?php echo date('Y-m-d');?>" required>
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
                                                placeholder="Nombre del notario" value="Jose Armando Gonzalez Linares"
                                                required>
                                            <div align="center" class="invalid-feedback">Ingrese un nombre del notario
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
                                            <input name="NitNota" type="text" class="form-control"
                                                placeholder="Nit Notario" value="<?php 
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
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Patron(a)</h5>
                            <div class="card-body">
                                Tipo de persona
                                <select name="t_persona" id="t_persona" class="form-control">
                                    <option value="1">Persona Natural</option>
                                    <option value="2">Persona Juridica</option>
                                </select>
                                <div class="form-row row flex-parent" id="persona_natural">
                                    <div class="form-row align-items-center col-12">
                                        <div class="col-12 mt-2">
                                            <button type="button" class="btn btn-primary col-5 mb-3" data-toggle="modal"
                                                data-target="#exampleModal" id="BCliente1">
                                                Buscar Clientes
                                            </button>
                                            <button type="button" class="btn btn-primary mb-3 col-5" id="ACliente1">
                                                Añadir Cliente
                                            </button>
                                            
                                        </div>
                                        <div class="col-12 mb-3" id="aqui">
                                        </div>
                                        <div class="col-12 mb-3" id="nuevoC1" hidden>
                                            <div class='d-flex justify-content-center'>
                                                <div align='left' class='col-4' hidden>
                                                    ID
                                                    <input name='IDform' type='ExpePacRe' class='form-control'
                                                        placeholder='ID' id='IDform' value='1' disabled>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Genero
                                                    <select name='Generoform' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;height:60%;"
                                                        placeholder='Tipo de Documento' id='Generoform' value=''>
                                                        <option value="1">Masculino</option>
                                                        <option value="2">Femenino</option>
                                                    </select>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Nombre
                                                    <input name='Nombreform' type='text' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Nombre' id='Nombreform' value=''>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Conocido Por:
                                                    <input name='Conocidoform' type='text' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Conocido por' id='Conocidoform' value=''>
                                                </div>
                                            </div>
                                            <div class='form-row align-items-center col-12'>
                                                <div align='left' class='col-4'>
                                                    Tipo de Documento
                                                    <select name='tdocumentoform' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;height:60%;"
                                                        placeholder='Tipo de Documento' id='tdocumentoform' value=''>

                                                        <option value="1">Dui</option>
                                                        <option value="2">Pasaporte</option>
                                                        <option value="3">Carnet de residente</option>
                                                    </select>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Numero de Documento
                                                    <input name='Duiform' type="text" class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Dui' id='Duiform'>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Nit
                                                    <input name='Nitform' type='text' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Nit' id='Nitform' value=''>
                                                </div>
                                            </div>
                                            <div class='form-row align-items-center col-12'>
                                                <div align='left' class='col-4'>
                                                    Oficio
                                                    <input name='oficioform' type='text' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Oficio' id='oficioform' value=''>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Fecha de Nacimiento
                                                    <input name='fechanacform' type='date' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Fecha de Nacimiento' id='fechanacform' value=''>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Telefono
                                                    <input name='telefonoform' type='text' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Telefono' id='telefonoform' value=''>
                                                </div>
                                            </div>
                                            <div class='form-row align-items-center col-12'>
                                                <div align='left' class='col-4'>
                                                    Nacionalidad
                                                    <input name='nacionalidadform' type='text' class="form-control"
                                                        
                                                        placeholder='Nac' id='nacionalidadform' value=''>

                                                </div>
                                                <div align='left' class='col-4'>
                                                    Departamento
                                                    <input name='deptoform' type='text' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Departamento' id='deptoform' value=''>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Municipio
                                                    <input name='municform' type='text' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Municipio' id='municform' value=''>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row row flex-parent" id="persona_juridica" hidden>
                                    <div class='form-row align-items-center col-12'>
                                                <div align='left' class='col-8'>
                                                    Nombre de la sociendad
                                                    <input name='c_nom_soci' type='text' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Nombre' id='Nombreform' value=''>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Abreviatura de la sociedad
                                                    <input name='c_abrevi_soci' type='text' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Nombre' id='Nombreform' value=''>
                                                </div>
                                                
                                    </div>
                                    <div class='form-row align-items-center col-12'>
                                             <div align='left' class='col-4'>
                                                    Ciudad
                                                    <input name='c_ciudad_soci' type='text' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Nombre' id='Nombreform' value=''>
                                             </div>
                                             <div align='left' class='col-4'>
                                                    Departamento
                                                    <input name='c_depa_soci' type='text' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Nombre' id='Nombreform' value=''>
                                             </div>
                                             <div align='left' class='col-4'>
                                                    Nit
                                                    <input name='c_nit_soci' type='text' class="form"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;"
                                                        placeholder='Nombre' id='Nombreform' value=''>
                                             </div>
                                    </div>
                                    </div>
                                   
                                </div>
                            </div>
                        
                        <div class="card bg-light col-sm-12 mt-2" id="comprador">
                            <h5 align="left" class="card-header">Trabajador:</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <div class="col-12 mt-2">
                                            <button type="button" class="btn btn-primary mb-3 col-5" data-toggle="modal"
                                                data-target="#exampleModal2" id="BCliente2">
                                                Buscar Clientes
                                            </button>
                                            <button type="button" class="btn btn-primary mb-3 col-5" id="ACliente2">
                                                Añadir Cliente
                                            </button>
                                        </div>
                                        <div class="col-12 mb-3" id="aqui2">
                                        </div>
                                        <div class="col-12 mb-3" id="nuevoC2" hidden>
                                            <div class='d-flex justify-content-center'>
                                                <div align='left' class='col-4' hidden>
                                                    ID
                                                    <input name='IDform2' type='text' class="form-control"
                                                        placeholder='ID2' id='IDform2' value='' disabled>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Genero
                                                    <select name='Generoform2' class="form-control"
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;height:60%;"
                                                        placeholder='Tipo de Documento' id='Generoform2' value=''>
                                                        <option value="1">Masculino</option>
                                                        <option value="2">Femenino</option>
                                                    </select>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Nombre
                                                    <input name='Nombreform2' type='text' class="form-control"
                                                        
                                                        placeholder='Nombre' id='Nombreform2' value=''>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Conocido Por:
                                                    <input name='Conocidoform2' type='text' class="form-control"
                                                        
                                                        placeholder='Conocido por' id='Conocidoform2' value=''>
                                                </div>
                                            </div>
                                            <div class='form-row align-items-center col-12'>
                                                <div align='left' class='col-4'>
                                                    Tipo de Documento
                                                    <select name='tdocumentoform2'
                                                        style="border:2px solid green;border-radius:5px;width:100%;padding:5px;height:60%;"
                                                        placeholder='Tipo de Documento' id='tdocumentoform2' value=''>
                                                        <option value="1">Dui</option>
                                                        <option value="2">Pasaporte</option>
                                                        <option value="3">Carnet de residente</option>
                                                    </select>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Numero de documento
                                                    <input name='Duiform2' type='text' class="form-control"
                                                        
                                                        placeholder='Documento de identidad' id='Duiform2' value=''>
                                                </div>
                                                <div align='left' class='col-4' id='Lugar_carnet_migratorio' hidden>
                                                   Lugar donde se extendio el Carnet
                                                    <input name='Lugar_carnet_migratorio' type='text' class="form-control"
                                                        
                                                        placeholder='San Salvador'  value=''>
                                                </div>
                                                <div align='left' class='col-4' id='dia_carnet_migratorio' hidden>
                                                    Dia que se extendio el Carnet
                                                    <input name='dia_carnet_migratorio' type='date' class="form-control"
                                                        
                                                        placeholder='Documento de identidad'  value=''>
                                                </div>
                                                <div align='left' class='col-4' id='dia_vence_carnet_migratorio' hidden>
                                                    Dia que vence el carnet
                                                    <input name='dia_vence_carnet_migratorio' type='date' class="form-control"
                                                        
                                                        placeholder='Documento de identidad'  value=''>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Fecha de Nacimiento
                                                    <input name='fechanacform2' type='date' class="form-control"
                                                        
                                                        placeholder='Fecha de Nacimiento' id='fechanacform2' value=''>
                                                </div>

                                            </div>
                                            <div class='form-row align-items-center col-12'>

                                                <div align='left' class='col-4'>
                                                    Municipio
                                                    <input name='municform2' type='text' class="form-control"
                                                        
                                                        placeholder='Municipio' id='municform2' value=''>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Departamento
                                                    <input name='deptoform2' type='text' class="form-control"
                                                        
                                                        placeholder='Departamento' id='deptoform2' value=''>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Nacionalidad
                                                    <input name='nacionalidadform2' type='text' class="form-control"
                                                        
                                                        placeholder='Salvadoreñ@, Guatemaltec@, Nicaraguense' id='nacionalidadform2' value=''>
                                                </div>
                                            </div>
                                            <div class='form-row align-items-center col-12'>
                                                <div align='left' class='col-4'>
                                                    Oficio
                                                    <input name='oficioform2' type='text' class="form-control"
                                                        
                                                        placeholder='Oficio' id='oficioform2' value=''>
                                                </div>

                                                <div align='left' class='col-4'>
                                                    Nit
                                                    <input name='Nitform2' type='text' class="form-control"
                                                        
                                                        placeholder='Nit' id='Nitform2' value=''>
                                                </div>
                                                <div align='left' class='col-4'>
                                                    Telefono
                                                    <input name='telefonoform2' type='text' class="form-control"
                                                        
                                                        placeholder='Telefono' id='telefonoform2' value=''>
                                                </div>
                                            </div>
                                            <div class='form-row align-items-center col-12'>
 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Datos Generales del contrato</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <div align='left' class='col-4'>
                                            Clase de trabajo
                                            <input name='c_clase_trabajo' type='text' class="form-control"
                                                placeholder='' id='c_clase_trabajo' value='' required>
                                        </div>
                                        <div align='left' class='col-4'>
                                            Tiempo de servicio
                                            <input name='c_t_servicio' type='text' class="form-control"
                                                placeholder='' id='c_t_servicio' value='' required>
                                        </div>
                                        <div align='left' class='col-4'>
                                            A partir de
                                            <input name='c_apartir' type='date' class="form-control"
                                                placeholder='' id='c_apartir' value='' required>
                                        </div>
                                        <div align='left' class='col-6'>
                                            Lugar prestacion de servicios
                                            <input name='c_lugar_servicios' type='text' class="form-control"
                                                placeholder='' id='c_lugar_servicios' value='' required>
                                        </div>
                                        <div align='left' class='col-6'>
                                            Direccion prestacion de servicios
                                            <input name='c_direccion_servicios' type='text' class="form-control"
                                                placeholder='' id='c_direccion_servicios' value='' required>
                                        </div>
                                        <div align='left' class='col-4'>
                                            Ciudad de
                                            <input name='c_ciudad_prestacion' type='text' class="form-control"
                                                placeholder='' id='c_ciudad_prestacion' value=''
                                                required>
                                        </div>
                                        <div align='left' class='col-4'>
                                            Departamento de
                                            <input name='c_departamento_prestacion' type='text' class="form-control"
                                                placeholder='' id='c_departamento_prestacion' value='' required>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">IV) Horario</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="col-12 mb-3" id="nuevoC1">
                                        <div class='d-flex justify-content-center'>
                                        <div align='left' class='col-4'>
                                            Dias de trabajo
                                            <input name='c_d_trabajo' type='text' class="form-control"
                                                placeholder='P. ej Lunes a Viernes ' id='c_d_trabajo' value='' required>
                                        </div>
                                        <div align='left' class='col-4'>
                                            Horas de trabajo (Desde)
                                            <input name='c_h_trabajo_desde' type='time' class="form-control"
                                                placeholder='P. ej 06:00' id='c_h_trabajo_desde' value='' required>
                                        </div>
                                        <div align='left' class='col-4'>
                                            Horas de trabajo (Hasta)
                                            <input name='c_h_trabajo_hasta' type='time' class="form-control"
                                                placeholder='P. ej 16:00' id='c_h_trabajo_hasta' value='' required>
                                        </div>
                                        </div>
                                        <hr style="border:1px solid black">
                                    </div>
                                    <div align='left' class='col-4'>
                                            Sabados?
                                            <select name="sabados" id="sabados" class="form-control">
                                                <option value="1">No</option>
                                                <option value="2">Si</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-3" id="sabado_campos" hidden>
                                        <div class='d-flex justify-content-center'>
                                     
                                        <div align='left' class='col-6'>
                                            Hora de trabajo (Desde)
                                            <input name='c_h_trabajo_desde_sabado' type='time' class="form-control"
                                                placeholder='P. ej 06:00' id='c_h_trabajo_desde_sabado' value='' >
                                        </div>
                                        <div align='left' class='col-6'>
                                            Hora de trabajo (Hasta)
                                            <input name='c_h_trabajo_hasta_sabado' type='time' class="form-control"
                                                placeholder='P. ej 16:00' id='c_h_trabajo_hasta_sabado' value='' >
                                        </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">V) Salario</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="col-12 mb-3">
                                        <div class='d-flex justify-content-center'>
                                            <div align='left' class='col-4'>
                                               Salario (DOLARES)
                                                <input name='c_salario_dolares' type='NUMBER' class="form-control"
                                                    placeholder='' id='c_salario_dolares' value='' required>
                                            </div>
                                            <div align='left' class='col-4'>
                                               Salario (CENTAVOS)
                                                <input name='c_salario_centavos' type='NUMBER' class="form-control"
                                                    placeholder='' id='c_salario_centavos' value='' required>
                                            </div>
                                            <div align='left' class='col-4'>
                                               Numero Cuotas
                                                <input name='c_num_cuo' type='number' class="form-control"
                                                    placeholder='P. Ej 1 Cuota' id='c_num_cuo' value=''
                                                    required>
                                            </div>
                                            
                                        </div>
                                        <div class='d-flex justify-content-center'>
                                        <div align='left' class='col-4 mt-1'>
                                               Cantidad de dinero x Cuota  (DOLARES)
                                                <input name='c_cant_dinero_d' type='number' class="form-control"
                                                    placeholder='' id='c_cant_dinero_d' value=''
                                                    required>
                                            </div>
                                            <div align='left' class='col-4 mt-1'>
                                               Cantidad de dinero x Cuota  (CENTAVOS)
                                                <input name='c_cant_dinero_c' type='number' class="form-control"
                                                    placeholder='' id='c_cant_dinero_c' value=''
                                                    required>
                                            </div>
                                            <div align='left' class='col-4 mt-1'>
                                               Forma de pago
                                                <input name='c_f_pago' type='text' class="form-control"
                                                    placeholder='Quinenal, Mensual' id='c_f_pago' value=''
                                                    required>
                                            </div>
                                        </div>
                                        <div class='d-flex justify-content-center'>
                                        <div align='left' class='col-8 mt-1'>
                                               Lugar donde se efectua el pago
                                                <input name='c_lugar_pago' type='text' class="form-control"
                                                    placeholder='' id='c_lugar_pago' value=''
                                                    required>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">VI) Herramientas y materiales</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="col-12 mb-3">
                                        <div class='d-flex justify-content-center'>
                                            <div align='left' class='col-12'>
                                               Materiales que Administra el patrono
                                                <input name='c_materiales' type='text' class="form-control"
                                                    placeholder='' id='c_salario_dolares' value='' required>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">VII) Personas que dependen del trabajador</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="col-12 mb-3">
                                        <div class='d-flex justify-content-center'>
                                            <div align='left' class='col-12'>
                                               Cantidad de personas que dependen
                                               <select name="personas_depe" id="personas_depe" class="form-control">
                                               <option value="0">0</option> 
                                               <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div id="dependientes1" hidden>
                                           <span> Persona 1</span>
                                            <hr>
                                            <div class='d-flex justify-content-center'>
                                                <div align='left' class='col-4'>Nombre
                                                    <input name='c_nombre[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' >
                                                </div>
                                                <div align='left' class='col-4'> Edad 
                                                <input name='edad[]' type='number' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div>
                                                <div align='left' class='col-4'> Profesion 
                                                    <input name='profesion[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div>
                                            </div>
                                            <div class='d-flex justify-content-center'> 
                                                <div align='left' class='col-4'>Parentezco 
                                                    <input name='parentezco[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div> 
                                            </div>
                                        </div>
                                        <hr>
                                        <div id="dependientes2" hidden>
                                        Persona 2
                                        <hr>
                                            <div class='d-flex justify-content-center'>
                                                <div align='left' class='col-4'>Nombre
                                                    <input name='c_nombre[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' >
                                                </div>
                                                <div align='left' class='col-4'> Edad 
                                                <input name='edad[]' type='number' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div>
                                                <div align='left' class='col-4'> Profesion 
                                                    <input name='profesion[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div>
                                            </div>
                                            <div class='d-flex justify-content-center'> 
                                                <div align='left' class='col-4'>Parentezco 
                                                    <input name='parentezco[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div> 
                                            </div>
                                        </div>
                                        <hr>
                                        <div id="dependientes3" hidden>
                                        Persona 3
                                        <hr>
                                            <div class='d-flex justify-content-center'>
                                                <div align='left' class='col-4'>Nombre
                                                    <input name='c_nombre[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' >
                                                </div>
                                                <div align='left' class='col-4'> Edad 
                                                <input name='edad[]' type='number' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div>
                                                <div align='left' class='col-4'> Profesion 
                                                    <input name='profesion[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div>
                                            </div>
                                            <div class='d-flex justify-content-center'> 
                                                <div align='left' class='col-4'>Parentezco 
                                                    <input name='parentezco[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div> 
                                            </div>
                                        </div>
                                        <hr>
                                        <div id="dependientes4" hidden>
                                        Persona 4
                                        <hr>
                                            <div class='d-flex justify-content-center'>
                                                <div align='left' class='col-4'>Nombre
                                                    <input name='c_nombre[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' >
                                                </div>
                                                <div align='left' class='col-4'> Edad 
                                                <input name='edad[]' type='number' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div>
                                                <div align='left' class='col-4'> Profesion 
                                                    <input name='profesion[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div>
                                            </div>
                                            <div class='d-flex justify-content-center'> 
                                                <div align='left' class='col-4'>Parentezco 
                                                    <input name='parentezco[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div> 
                                            </div>
                                        </div>
                                        <hr>
                                        <div id="dependientes5" hidden>
                                        Persona 5
                                        <hr>
                                            <div class='d-flex justify-content-center'>
                                                <div align='left' class='col-4'>Nombre
                                                    <input name='c_nombre[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' >
                                                </div>
                                                <div align='left' class='col-4'> Edad 
                                                <input name='edad[]' type='number' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div>
                                                <div align='left' class='col-4'> Profesion 
                                                    <input name='profesion[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' > 
                                                </div>
                                            </div>
                                            <div class='d-flex justify-content-center'> 
                                                <div align='left' class='col-4'>Parentezco 
                                                    <input name='parentezco[]' type='text' class='form-control' placeholder='' id='c_nombre[]' value='' > 
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
                                            Ingrese Nombre o apellidos o Nº de expediente o DUI, para buscar el
                                            cliente
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
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cerrar</button>

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
                                            Ingrese Nombre o apellidos o Nº de expediente o DUI, para buscar el
                                            cliente
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
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cerrar</button>
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
                                            <h5 class="modal-title" id="metodoimpresionTitle" style="color:black;">
                                                ¿Como
                                                quiere imprimir el
                                                contrato?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="color:black;">
                                            <p>Con PDF</p>
                                            <button name="btnGenerar" type="submit"
                                                class="btn btn-info btn-lg">Generar</button>
                                            <hr style="background-color:black;border:1px solid black;">
                                            <p>Con WORD<p>
                                                    <button name="btnGenerarword" type="submit"
                                                        class="btn btn-info btn-lg">Generar</button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="btnGenerar" type="submit" value="Imprimir Contrato"
                                        class="btn btn-info btn-lg">
                                        <input type="submit" name="portada" type="submit" value="Imprimir Portada"
                                        class="btn btn-success btn-lg">

                            <button name="btnCanrec" type="reset" class="btn btn-danger btn-lg">Cancelar</button>
                        </div>
                    </div>
            </form>


        </div>
        <?php
             include $_SERVER['DOCUMENT_ROOT']."/CL\DEV\UX\Funciones/arrendamientocan.php";
            ?>