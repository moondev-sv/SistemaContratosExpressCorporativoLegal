<h3 align="center" class="display-4 mt-3" style="color:black;">Ver Contratos</h3>
<script>
    function myFunction() {
  var input, filter, table, tr, td, td1, i, txtValue;
  input = document.getElementById("mibuscador");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabla_contratos");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    td1 = tr[i].getElementsByTagName("td")[0];
    if (td && td1) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
    </script>
    <div class='text-center'>
    <input type="text" id="mibuscador" onkeyup="myFunction()" class="form-control w-100 mb-1" placeholder="Ingrese el nombre del cliente" >
    </div>
<?php
    $consulta="SELECT *,cliente.NomCli AS Nombre_Cliente,Cliente2.NomCli AS Nombre_Cliente2 FROM contratos INNER JOIN usuario ON ID_Usuario = ID_Usuario_FK INNER JOIN tipocontrato ON ID_TIPO_CONTRA_FK = ID_TContrato INNER JOIN cliente ON cliente.ID_Cliente = contratos.fkid_cliente1 INNER JOIN cliente as Cliente2 ON Cliente2.ID_Cliente = contratos.fkid_cliente2 ORDER BY `contratos`.`ID_Cont` DESC

    "; //Consulta a la base de datos
    $resultado= mysqli_query($conex,$consulta) or die(mysqli_error($conex));//Devuelve el resultado
   
    $html="
    <table class='table table-light table-hover col-12 table-borderless rounded-lg' id='tabla_contratos'>
    <thead class='thead-dark'>
    <tr >
    <th>ID Contrato</th>
    <th>Fecha <br>(Y-M-D)</th>
    <th>Hora <br>(24 hrs)</th>
    <th>Nombre Cliente</th>
    <th>Nombre Usuario</th>
    <th>Tipo de contrato</th>
    <th>Opciones</th></tr>
    </thead><tbody>"; //variable donde almacenaremos nuestro mensaje a mostrar
    while($filas = mysqli_fetch_array($resultado)){//arreglo de los resultados de la consulta
        $url = $filas['URL_contratoPDF'];
        $rest = substr($url, 15);
        $html.="
        <form action='' method='POST'><tr><td>".$filas['ID_Cont']."</td> <td>".$filas['Fecha']."</td>";
        $html.="<td>".$filas['Hora']."</td>";
        $html.="<td>".$filas['Nombre_Cliente'].",<br> ".$filas['Nombre_Cliente2']."</td>";
    
        $html.="<td>".$filas['NomUser']."</td>";
      //  $html.="<td>".$filas['URL_contratoPDF']."</td>";
        $html.="<td>".$filas['Nombre']."</td>";
        $html.="<input type='text' value='".$filas['ID_Cont']."' name='idPelicula' hidden><td>
        <a href='".$rest ."' target='_blank'  style='decoration:none;color:white' class='file-control btn btn-info'>
        Ver Contrato
        </a>";
        $html.=" <input type='submit' name='eliminar' value='Eliminar Contrato' class='btn btn-danger'>
        </tr></form>";
    }
    $html.="
   </tbody> </table>
    ";
    echo $html; //Mostramos el contenido que queremos mostrar xD
?>
<?php
    if(isset($_POST['eliminar'])){
        $id_pelicula= $_POST['idPelicula']; //Identificador de la pelicula a eliminar
        $consulta = "DELETE FROM `contratos` WHERE `ID_Cont`= $id_pelicula"; //Consulta eliminar Pelicula
        if(mysqli_query($conex, $consulta)){
            //Se borro correctamenta
            echo "
            <script>
            alert('Se elimino el contrato correctamente'); //Confirmacion de insercion
            window.location.assign('/CL/DEV/UI/Control_Total/index.php?x=ver_contratos.php') //Redireccion javascript
            </script>
            "; //Accion despues de eliminar
        }
        else{
            //No se borro
            echo "Error ".mysqli_error($conex); //Error si no se eliminar
        }
    }
?>
