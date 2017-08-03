<?php
	
	include("Conexion.php");

	$cod=$_POST['user'];
	$message=$_POST['message'];
	
	
			
	$consulta=$cn->prepare("INSERT INTO chat(CodigoCuenta,Mensaje,Fecha,Hora)VALUES(:Codigo,:Mensaje,'2015-08-25','18:46:22')");
	$consulta->execute(array(':Codigo'=>$cod,':Mensaje'=>$message));
	$result=$consulta->fetch();
	
	if($result)
	echo "Mensaje Registrado.";	
	
	


?>