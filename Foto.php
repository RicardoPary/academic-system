<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
	include("conexion.php");
	$CodigoCuen=$_POST['T1'];
	$Comen=$_POST['T3'];
	$NombreFoto=$_FILES['T2']['name'];
	$Ruta=$_FILES['T2']['tmp_name'];
	$Destino="Fotos/".$NombreFoto;
	copy($Ruta,$Destino);	
	$consulta="INSERT INTO imagen (CodigoCuenta,Foto,Comentario)VALUES('$CodigoCuen','$Destino','$Comen')";
	$sql=mysql_query($consulta,$cn);
    header("Location:Nuevo.php");

?>

</body>
</html>
 