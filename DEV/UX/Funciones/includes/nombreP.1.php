<?php
//Archivo de conexión a la base de datos
include $_SERVER['DOCUMENT_ROOT']."/CL\DEV\UI\BD\conexion.php";//temporal



//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;", " ");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";


//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {
	
	$contador=0;
	//Selecciona todo de la tabla mmv001 
	//donde el nombre sea igual a $consultaBusqueda, 
	//o el apellido sea igual a $consultaBusqueda, 
	//o $consultaBusqueda sea igual a nombre + (espacio) + apellido
	$consulta = mysqli_query($conex, "SELECT * FROM cliente
	WHERE ID_Cliente LIKE '%$consultaBusqueda%' 
	
	");

	//Obtiene la cantidad de filas que hay en la consulta
	$filas = mysqli_num_rows($consulta);

	//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	if ($filas === 0) {
		$mensaje = "";
	} else {
		//Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		
		$mensaje.="
		
		";
	
		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
		$resultados = mysqli_fetch_array($consulta);
			$contador ++;
		
			$Expediente = $resultados['ID_Cliente'];
			$Nombre = $resultados['NomCli'];
			$Dui = $resultados['DuiCli'];
			$Nit = $resultados['NitCli'];
			$Nacimiento = $resultados['FNacCli'];
			$Oficio = $resultados['OficioCli'];
			$TelCli = $resultados['TelCli'];
			$ID_Depto_FK = $resultados['ID_Depto_FK'];
			$ID_Munic_FK = $resultados['ID_Munic_FK'];
			$ID_DocIden_FK = $resultados['ID_DocIden_FK'];
			$ID_Nacionalidad_FK = $resultados['ID_Nacionalidad_FK'];
			$ID_Genero_FK = $resultados['ID_Genero_FK'];
			
			
				
			//Nacionalidad
			$NacQuery = mysqli_query($conex, "SELECT `NombreNac` FROM `nacionalidad` WHERE `ID_Nacionalidad`= '$ID_Nacionalidad_FK' ") or die(mysqli_error($conex)) ;

			$Nacorow = mysqli_fetch_array($NacQuery,MYSQLI_ASSOC);

			$NombreNac = $Nacorow['NombreNac'];
	
			//Tipo de documento
			$TIdenQuery = mysqli_query($conex, "SELECT `NombreDoc` FROM `tipo_dociden` WHERE `ID_DocIden`= '$ID_DocIden_FK' ") or die(mysqli_error($conex)) ;
			$TIdenrow = mysqli_fetch_array($TIdenQuery,MYSQLI_ASSOC);
			$NomDocu = $TIdenrow['NombreDoc'];
	
			//Genero
			$GeneroQuery = mysqli_query($conex, "SELECT `NombreGenero` FROM `Genero` WHERE `ID_Genero`= '$ID_Genero_FK' ") or die(mysqli_error($conex)) ;
			$Genrow = mysqli_fetch_array($GeneroQuery,MYSQLI_ASSOC);
			$NomGen = $Genrow['NombreGenero'];

			//Output
			$mensaje .= "
			<div class='form-row align-items-center col-12'>
			<div class='d-flex justify-content-center'>
		
				<div align='left' class='col-4' hidden>
					ID 
					<input name='ExpedienteRec' type='text' class='form-control' placeholder='Expediente' id='ExpedienteRec'
						value='$Expediente' disabled>
		
				</div>
				<div align='left' class='col-2 mt-2' style=''>
                    Parentesco
                    <select name='parentescoRec' class='form-control' placeholder='Tipo de Documento' id='parentescoRec' value=''>
						<option value='1'>Padre</option>
                        <option value='2'>Madre</option>
                    </select>
                </div>
				<div align='left' class='col-2'>
					Genero
					<input name='GeneroRec' type='text' class='form-control' placeholder='Genero' id='GeneroRec'
						value='$NomGen'>
				</div>
				<div align='left' class='col-4'>
					Nombre
					<input name='NombreRec' type='text' class='form-control' placeholder='Nombre' id='NombreRec'
						value='$Nombre'>
				</div>
				<div align='left' class='col-4'>
				Conocido por
				<input name='ConocidoRec' type='text' class='form-control'  id='ConocidoRec'
					value=''>
				</div>
				
			</div>
			<div class='form-row align-items-center col-12'>
			<div align='left' class='col-3'>
					Tipo de Documento
					<input name='ID_DocIden_FKRec' type='text' class='form-control' placeholder='T Documento' id='ID_DocIden_FKRec'
						value='$NomDocu'>
				</div>
			<div align='left' class='col-3'>
					Dui
					<input name='DuiRec' type='text' class='form-control' placeholder='Dui' id='DuiRec' value='$Dui'>
		
				</div>
				<div align='left' class='col-3'>
				Fecha de vencimiento del DUI
				<input name='vencimientoRec' type='date' class='form-control' placeholder='Fecha Nac' id='NacimientoRec'>
		
			</div>
				<div align='left' class='col-3'>
				Fecha de Nacimiento
				<input name='NacimientoRec' type='text' class='form-control' placeholder='Fecha Nac' id='NacimientoRec' value='$Nacimiento'>
			</div>

			
			</div>
			<div class='form-row align-items-center col-12'>
			<div align='left' class='col-3'>
				Direccion
				<input name='DireccionRec' type='text' class='form-control' placeholder='' id='' value=''>
			</div>
			<div align='left' class='col-3'>
					Municipio
					<input name='ID_Munic_FKRec' type='text' class='form-control' placeholder='Municipio' id='ID_Munic_FKRec'
						value='$ID_Munic_FK'>
				</div>

				<div align='left' class='col-3'>
					Departamento
					<input name='ID_Depto_FKRec' type='text' class='form-control' placeholder='Departamento' id='ID_Depto_FKRec'
						value='$ID_Depto_FK'>
				</div>
				<div align='left' class='col-3'>
					Nacionalidad
					<input name='ID_Nacionalidad_FKRec' type='text' class='form-control' placeholder='Nacionalidad' id='ID_Nacionalidad_FKRec'
						value='$NombreNac'>
				</div>
			</div>
			<div class='form-row align-items-center col-12'>
			<div align='left' class='col-3'>
					Oficio
					<input name='OficioRec' type='text' class='form-control' placeholder='Oficio' id='OficioRec' value='$Oficio'>
				</div>
				<div align='left' class='col-3'>
				Nit
				<input name='NitRec' type='text' class='form-control' placeholder='Nit' id='NitRec' value='$Nit'>
			</div>
				
				<div align='left' class='col-3'>
					Telefono Cliente
					<input name='TelCli' type='text' class='form-control' placeholder='telefono' id='TelCli' value='$TelCli'>
				</div>
				
			</div>
			
			";

		
		

	}; //Fin else $filas

};//Fin isset $consultaBusqueda

if ($contador == 0 || $contador==1) {
	
	$datos = $mensaje;
	//$datos = $contador;
	echo $datos;
	$contador=0;
}else {
	//mandare vacio $datos para comparar con jquery el valor
	$datos ="";
	echo $datos;
}

//Devolvemos el mensaje que tomará jQuery si pulso el boton
	

?>