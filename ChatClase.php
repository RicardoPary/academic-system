<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php 
include('conexion.php');
header('refresh:4; url=ChatClase.php');
$cod=$_GET['id'];

$consulta=mysql_query("SELECT * FROM chataula WHERE chataula.CodigoAula='$cod'",$cn);

while($res=mysql_fetch_array($consulta))
{	
?>
<div style="width:100px; height:150px; float:left;">
<img src="Imagenes/talk-talk-icono-6046-128.png" width="87" height="79"/>
<span><?php echo $res['Mensaje'];?></span></div>
<?php
}
?>


</body>
</html>
