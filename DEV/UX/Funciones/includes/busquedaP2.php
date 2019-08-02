
<?php
//Archivo de conexión a la base de datos
include $_SERVER['DOCUMENT_ROOT']."/CL\DEV\UI\BD\conexion.php";//temporal
//Funcion para sacar la edad de una persona recibiendo la fecha de nacimiento
function calculaedad($fechanacimiento){
  list($ano,$mes,$dia) = explode("-",$fechanacimiento);
  $ano_diferencia  = date("Y") - $ano;
  $mes_diferencia = date("m") - $mes;
  $dia_diferencia   = date("d") - $dia;
  if ($dia_diferencia < 0 || $mes_diferencia < 0)
    $ano_diferencia--;
  return $ano_diferencia;
}
//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;", " ");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";

$conta=0;
//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {

	//Selecciona todo de la tabla mmv001 
	//donde el nombre sea igual a $consultaBusqueda, 
	//o el apellido sea igual a $consultaBusqueda, 
	//o $consultaBusqueda sea igual a nombre + (espacio) + apellido
	$consulta = mysqli_query($conex, "SELECT * FROM cliente
	WHERE NomCli COLLATE UTF8_SPANISH_CI LIKE '%$consultaBusqueda%' 
	OR DuiCli COLLATE UTF8_SPANISH_CI LIKE '%$consultaBusqueda%'
	");

	//Obtiene la cantidad de filas que hay en la consulta
	$filas = mysqli_num_rows($consulta);

	//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	if ($filas === 0) {
		$mensaje = "<p>No hay ningún usuario con ese nombre y/o apellido</p>";
	} else {
		//Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		echo "<span class='col-12 '> Resultados para '.$consultaBusqueda.'</span>";
		$mensaje.='
		<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		  <div class="modal-content">
		  <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam excepturi architecto accusantium iusto? Rerum consequatur voluptatum porro provident animi ducimus, impedit facilis rem ipsa, ex laboriosam, necessitatibus optio deleniti quasi.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum sapiente excepturi minima. Cumque tenetur ea eligendi? Dolore non sequi repellat nostrum. Quo hic asperiores sint culpa vero impedit, ducimus omnis!
		Dolorum cumque praesentium nemo voluptates sunt voluptatibus quos magnam tempore delectus quae! Debitis qui ipsa doloribus accusantium laborum ipsam expedita deleniti? Eius dolorem libero accusamus, alias illum nihil cupiditate voluptas.
		Sint aperiam nemo placeat maxime ratione. Iusto inventore voluptatum, ullam nobis molestiae placeat totam distinctio nemo maxime ipsum non eius minus quasi tenetur ducimus minima temporibus! Commodi porro ipsum qui.Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet et excepturi laborum, voluptas eaque distinctio sit unde corporis cumque tenetur enim mollitia deleniti adipisci quis nostrum sint temporibus magni ipsa?
		Nesciunt, magnam sequi! Doloribus ut porro ea unde recusandae quos odio aperiam, enim minus exercitationem sit consectetur beatae soluta, ex molestias vitae magnam minima nisi esse, nemo ad obcaecati harum!
		Nisi, dolore necessitatibus fugit ipsam facilis exercitationem reprehenderit est temporibus libero animi? Tempore, consectetur vel? Nostrum quibusdam aspernatur exercitationem animi tempora vitae necessitatibus molestiae molestias. Iure recusandae incidunt eaque non.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
			
		  </div>
		</div>
	  </div>

		<div class="d-flex justify-content-center">
		<form action="" method="GET">
		<table class="table  table-hover col-12  mt-2">
			<thead class="thead-light col-12">
				<tr>
					<th scope="col">Nº de expediente</th>
					<th scope="col">Nombre</th>
					<th scope="col">Dui</th>
					<th scope="col">NIT</th>
					<th scope="col">Edad</th>
					<th scope="col">Accion</th>
					<th></th>
					
				</tr>
			</thead>
			<tbody>
		';
		
		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
		while($resultados = mysqli_fetch_array($consulta)) {
			$Expediente = $resultados['ID_Cliente'];
			$Nombre = $resultados['NomCli'];
			$Dui = $resultados['DuiCli'];
			$Nit = $resultados['NitCli'];
			$Nacimiento = $resultados['FNacCli'];
			$edad= calculaedad ("$Nacimiento");
			
			//Output

			$mensaje .= "
			<tr class='block'>
			<td> $Expediente </td>
			<td> $Nombre</td> 
			<td> $Dui </td> 
			<td> $Nit </td> 
			<td> $edad </td>
			<td><button type='button' class='btn btn-info'	data-dismiss='modal' value='$Expediente' id='idbusqueda[$Expediente]' onClick='funcionMostrarB2($Expediente);'> Seleccionar</button><td>
			</tr>
";
$conta++;
if ($conta>3) {
	break;
}

		};//Fin while $resultados
		$mensaje .="</tbody></table></form></div>";

	}; //Fin else $filas

};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery si pulso el boton
	
	echo $mensaje;
	mysqli_close($conex);
?>

