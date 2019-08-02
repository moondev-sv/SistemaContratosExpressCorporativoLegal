<?php
//Archivo de conexión a la base de datos
include $_SERVER['DOCUMENT_ROOT']."/CL\DEV\UI\BD\conexion.php";//temporal

//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];


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
					<input name='ExpedienteRec2' type='text' class='form-control' placeholder='Expediente' id='ExpedienteRec2'
						value='$Expediente' disabled>
		
				</div>
				<div align='left' class='col-4'>
					Genero
					<input name='GeneroRec2' type='text' class='form-control' placeholder='Genero' id='GeneroRec2'
						value='$NomGen'>
				</div>
				<div align='left' class='col-4'>
					Nombre
					<input name='NombreRec2' type='text' class='form-control' placeholder='Nombre' id='NombreRec2'
						value='$Nombre'>
				</div>
				<div align='left' class='col-4'>
				Conocido por
				<input name='ConocidoRec2' type='text' class='form-control' placeholder='Conocido por' id='ConocidoRec2'
					value=''>
				</div>
				
			</div>
			<div class='form-row align-items-center col-12'>
			<div align='left' class='col-4'>
					Tipo de Documento
					<input name='ID_DocIden_FKRec2' type='text' class='form-control' placeholder='' id='ID_DocIden_FKRec2'
						value='$NomDocu'>
				</div>
			<div align='left' class='col-4'>
					Dui
					<input name='DuiRec2' type='text' class='form-control' placeholder='Dui' id='DuiRec2' value='$Dui'>
		
				</div>
				<div align='left' class='col-4'>
					Fecha de Nacimiento
					<input name='NacimientoRec2' type='text' class='form-control' placeholder='' id='NacimientoRec2' value='$Nacimiento'>
				</div>
				
				
			</div>
			
			<div class='form-row align-items-center col-12'>
		
			<div align='left' class='col-4'>
			Municipio
			<input name='ID_Munic_FKRec2' type='text' class='form-control' placeholder='Municipio' id='ID_Munic_FKRec2'
				value='$ID_Munic_FK'>
			</div>
			<div align='left' class='col-4'>
					Departamento
					<input name='ID_Depto_FKRec2' type='text' class='form-control' placeholder='Departamento' id='ID_Depto_FKRec2'
						value='$ID_Depto_FK'>
				</div>
				<div align='left' class='col-4'>
					Nacionalidad
					<input name='ID_Nacionalidad_FKRec2' type='text' class='form-control' placeholder='' id='ID_Nacionalidad_FKRec2'
						value='$NombreNac'>
				</div>
				
			</div>
			<div class='form-row align-items-center col-12'>
			<div align='left' class='col-4'>
					Oficio
					<input name='OficioRec2' type='text' class='form-control' placeholder='Oficio' id='OficioRec2' value='$Oficio'>
				</div>
				
				<div align='left' class='col-4'>
					Nit
					<input name='NitRec2' type='text' class='form-control' placeholder='Nit' id='NitRec2' value='$Nit'>
				</div>
				<div align='left' class='col-4'>
				Telefono Cliente
				<input name='TelCli2' type='text' class='form-control' placeholder='Telefono' id='TelCli2' value='$TelCli'>
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
	mysqli_close($conex);
}else {
	//mandare vacio $datos para comparar con jquery el valor
	$datos ="";
	echo $datos;
	mysqli_close($conex);
}

//Devolvemos el mensaje que tomará jQuery si pulso el boton
	

?>