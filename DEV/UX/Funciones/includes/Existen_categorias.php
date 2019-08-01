<?php

 //Depto Clientes
 function departamentoComprobar($deptoform,$conex){
    $ComprobarDepto=$deptoform; 
    $identificadorDepto1=""; //Tendra el id del registro que queremos
    $consulta = mysqli_query($conex, "SELECT * FROM depto
    WHERE NomDepto LIKE '%$ComprobarDepto%' 
    ") or die(mysqli_error($conex)) ;
    $filas = mysqli_num_rows($consulta);
        //Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
        $test="";
        if ($filas === 0) {
           if(mysqli_query($conex, "INSERT INTO `depto` (`NomDepto`) VALUES ('$ComprobarDepto')
          ")){
               echo "";
           }
           else
           {
               echo  "No se ingreso".mysqli_error($conex);
           }
           $consulta = mysqli_query($conex, "SELECT * FROM `depto` WHERE `NomDepto` = '$ComprobarDepto'") or die(mysqli_error($conex)) ;
           $Municrow = mysqli_fetch_array($consulta,MYSQLI_ASSOC);
           $identificadorDepto1 = $Municrow['ID_Depto'];
            //Imprime el identificador que acaba de añadirse
            $test .= "$identificadorDepto1";
        }
        else{ 
            //Municpio
               $consulta = mysqli_query($conex, "SELECT * FROM `depto` WHERE `NomDepto` = '$ComprobarDepto'") or die(mysqli_error($conex)) ;
               $Municrow = mysqli_fetch_array($consulta,MYSQLI_ASSOC);
               $identificadorDepto1 = $Municrow['ID_Depto'];
            $test.="$identificadorDepto1";//Imprime el identificador Si habia uno en la bd
       }
       return $test;
 }
 
 function municipioComprobar($municform,$conex,$iddepto){
   
    $Comprobar=$municform; 
    $identificador=""; //Tendra el id del registro que queremos
    $consulta = mysqli_query($conex, "SELECT * FROM munic
    WHERE NomMunic LIKE '%$Comprobar%' 
    ") or die(mysqli_error($conex)) ;
    $filas = mysqli_num_rows($consulta);
        //Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
        $test="";
        if ($filas === 0) {
           if(mysqli_query($conex, 
           "INSERT INTO `munic` (`ID_Munic`, `NomMunic`, `ID_Depto_FK`) VALUES (NULL, '$Comprobar', '$iddepto')"
          )){
               echo "";
           }
           else
           {
               echo  "<br>No se ingreso".mysqli_error($conex);
           }
           $consulta = mysqli_query($conex, "SELECT * FROM `munic` WHERE `NomMunic` = '$Comprobar'") or die(mysqli_error($conex)) ;
           $Municrow = mysqli_fetch_array($consulta,MYSQLI_ASSOC);
           $identificador = $Municrow['ID_Munic'];
            //Imprime el identificador que acaba de añadirse
            $test .= "$identificador";
        }
        else{ 
            //Municpio
               $consulta = mysqli_query($conex, "SELECT * FROM `munic` WHERE `NomMunic` = '$Comprobar'") or die(mysqli_error($conex)) ;
               $Municrow = mysqli_fetch_array($consulta,MYSQLI_ASSOC);
               $identificador = $Municrow['ID_Munic'];
            $test.="$identificador";//Imprime el identificador Si habia uno en la bd
       }
       return $test;
 }
 
 
        
 function ingresarClientes($Duiform,$Nombreform,$Nitform,$telefonoform,$oficioform,$fechanacform,$ID_Depto_FK,$ID_Munic_FK,$ID_DocIden_FK,$ID_Nacionalidad_FK,$ID_Genero_FK,$conex){
    //Añadir los clientes a la bd
    $DuiClientecomprobar=$Duiform;
    $consulta = mysqli_query($conex, "SELECT * FROM cliente    WHERE DuiCli = '$DuiClientecomprobar'") or die(mysqli_error($conex)) ;
    $filas = mysqli_num_rows($consulta);
        //Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
        $test="";
        if ($filas === 0) {
           if(mysqli_query($conex, "INSERT INTO `cliente`(`NomCli`,`DuiCli`,`NitCli`,`TelCli`,`OficioCli`,`FNacCli`,`ID_Depto_FK`,`ID_Munic_FK`, `ID_DocIden_FK`, `ID_Nacionalidad_FK`, `ID_Genero_FK`) VALUES ('$Nombreform','$Duiform','$Nitform','$telefonoform','$oficioform','$fechanacform', '$ID_Depto_FK', '$ID_Munic_FK', '$ID_DocIden_FK','$ID_Nacionalidad_FK', '$ID_Genero_FK')
          ")){
               echo "";
           }
           else
           {
               echo "No se ingreso".mysqli_error($conex);
           }
            $test = "";
        }
        else{ //Si encontro un usuario con ese DUI entonces...
          if(mysqli_query($conex, "UPDATE `cliente` SET 
           `NomCli` = '$Nombreform' ,`DuiCli` = '$Duiform' , `NitCli` = '$Nitform' , `TelCli` = '$telefonoform' , `OficioCli` = '$oficioform' , `FNacCli` = '$fechanacform' , ID_Depto_FK = '$ID_Depto_FK', ID_Munic_FK = '$ID_Munic_FK' WHERE `cliente`.`DuiCli` = '$DuiClientecomprobar'"))
           {
               echo "";
           }
           else
           {
               echo "No se Actualizo".mysqli_error($conex);
           }
           while($resultados = mysqli_fetch_array($consulta)) {
               $nombreClienteEncontrado = $resultados['ID_Cliente'];
           $test .= "$nombreClienteEncontrado";
        }
       
       }
       return $test;
   }
   
 function ingresarContratos($NombreCont,$Fecha,$Hora,$ID_Usuario_FK,$TIPO,$id1,$id2,$conex)
 {
    //Añadir los clientes a la bd
    
   $consulta= "INSERT INTO `contratos` (`ID_Cont`, `NombreCont`, `Fecha`, `Hora`, `ID_Usuario_FK`, `ID_TIPO_CONTRA_FK`,`fkid_cliente1`,`fkid_cliente2`) VALUES (NULL, '$NombreCont', '$Fecha', '$Hora','$ID_Usuario_FK', $TIPO,$id1,$id2)
   ";
           if(mysqli_query($conex,$consulta)){
               echo "";
           }
           else
           {
              
           }
            $test = "";
        
            $consulta = mysqli_query($conex, "SELECT *
            from contratos
           order by ID_Cont desc
           limit 1") or die(mysqli_error($conex)) ;
            $Municrow = mysqli_fetch_array($consulta,MYSQLI_ASSOC);
            $identificador = $Municrow['ID_Cont'];
             //Imprime el identificador que acaba de añadirse
             $test .= "$identificador";
       
       return $test;
   
   }
   function actualizarContratos($ID_Cont,$filename,$conex){
$test='';
    if(mysqli_query($conex,"UPDATE `contratos` SET `URL_contratoPDF` = '$filename' WHERE `contratos`.`ID_Cont` = '$ID_Cont'"))
    
    {
        $test .= "Se añadio";
    }
    else
    {
        $test .= "No se Actualizo".mysqli_error($conex);
    }
    return $test;
   }


 function ingresarContrato_arre($NombreCont,$Fecha,$Hora,$ID_Usuario_FK,$conex)
 {
    //Añadir los clientes a la bd
   $consulta= "INSERT INTO `contrato_arre` (`ID_Cont`, `NombreCont`, `Fecha`, `Hora`,`ID_Usuario_FK`) VALUES (NULL, '$NombreCont', '$Fecha', '$Hora', $ID_Usuario_FK)
   ";
   $test ="";
           if(mysqli_query($conex,$consulta)){
               
               $consulta = mysqli_query($conex, "SELECT *
            from contrato_arre
           order by ID_Cont desc
           limit 1") or die(mysqli_error($conex)) ;
            $Municrow = mysqli_fetch_array($consulta,MYSQLI_ASSOC);
            $identificador = $Municrow['ID_Cont'];
             //Imprime el identificador que acaba de añadirse
             $test = "$identificador";
             
           }
           else
           {
              
           }

       return $test;
   
   }
   function actualizarContratos_arre($ID_Cont,$filename,$conex){
    $test='';
        if(mysqli_query($conex,"UPDATE `contrato_arre` SET `URL_contratoPDF` = '$filename' WHERE `contrato_arre`.`ID_Cont` = '$ID_Cont'"))
        
        {
            $test .= "Se añadio";
        }
        else
        {
            $test .= "No se Actualizo".mysqli_error($conex);
        }
        return $test;
       }
    
?>