<?php
 include $_SERVER['DOCUMENT_ROOT']."/CL\DEV\UI\BD\conexion.php";//temporal


 $id_DeptoJQ= $_POST['id_DeptoJQ'];     
  $QueryMunicipio = "SELECT `Cod_Munic`, `Nom_Munic` FROM `tb_munic` WHERE `Id_Depto(FK)` = '$id_DeptoJQ'";                                           
   //$QueryMunicipio = "SELECT Nom_Munic,Cod_Munic FROM tb_munic WHERE 'Id_Depto(FK)' = '$id_DeptoJQ' ORDER BY Nom_Munic ASC";
    $resultaM = mysqli_query($conex,$QueryMunicipio) or die(mysqli_error()."[".$QueryMunicipio."]");
    $html =  "<option value=''>Municipio:</option>";
    while ($row = mysqli_fetch_array($resultaM))
    {
       $html .= "<option value='".$row['Cod_Munic']."'>'".$row['Nom_Munic']."'</option>";
    }
    echo $html;                                                  
?>