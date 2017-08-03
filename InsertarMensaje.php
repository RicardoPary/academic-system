<?php
	
	include("conexion.php");

	$cod=$_GET['id'];
	$Mensaje=$_POST['T1'];
	
			
	$consulta="INSERT INTO chat(CodigoCuenta,Mensaje,Fecha,Hora)VALUES('$cod','$Mensaje','2015-08-25','18:46:22')";
	mysql_query($consulta,$cn);	
	
	//$cod=$cod.m;
	header("Location: Estudiante.php?id=$cod");	


?>
