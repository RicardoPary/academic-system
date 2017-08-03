<?php 
		include("conexion.php");
		$codigo=$_GET['recordID'];
		echo "<script>alert ('$codigo');</script>";
		$consul="DELETE FROM cuenta WHERE CodigoCuenta='$codigo'";
		$consulta=mysql_query($consul,$cn);		
		echo "<script>alert ('Eliminado');</script>";
		 header('Location: Cuenta.php');

?>


