<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php 
include('conexion.php');

$Mensaje=$_POST['T1'];


$cod=$_GET['id'];

$consulta="INSERT INTO mensaje (CodigoCuenta,Mensaje,Fecha,Hora)VALUES('$cod','$Mensaje','2015-08-25','18:46:22')";
$sql=mysql_query($consulta,$cn);


header("Location: Chat.php?id=$cod");


?>
</body>
</html>
