<?php

  include('conexion.php');
  $cod=$_GET['id']; 
  $Mensaje=$_POST['T1'];
  
	$NombreFoto=$_FILES['T2']['name'];
	$Ruta=$_FILES['T2']['tmp_name'];
	$Destino="Fotos/".$NombreFoto;
	copy($Ruta,$Destino);	
  
  $consulta="INSERT INTO imagen (CodigoCuenta,Foto,Comentario)VALUE('$cod','$Destino','$Mensaje')";
  $sql=mysql_query($consulta,$cn);
 echo "<script>alert ('$cod');</script>";
    
  header("Location: Estudiante.php?id=$cod");	
?>


