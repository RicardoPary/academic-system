<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php 
include('conexion.php');
$co=$_GET['codigo'];
$CodA=$co[0];
$CodC=$co[1];
	
?>

<form action="" method="post">

  <p >
  Mensaje
  <input type="text" name="T1"  style="width:250px;"/>
  <input type="submit" name="B" value="Enviar" class="" /></p>
</form>

<?php


if(isset($_POST['B']))
	{			
		$text = $_POST['B'];			
		if($text=="Enviar")
		{	
		$Men = $_POST['T1'];	
		$consul="UPDATE chataula set Mensaje='$Men' WHERE CodigoCuenta='$CodC' AND CodigoAula='$CodA'";
		$consulta=mysql_query($consul,$cn);
		}
	}
		

?>
</body>
</html>
