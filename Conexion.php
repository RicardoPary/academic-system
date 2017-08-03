<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body>
<?php
//$cn=mysql_connect("localhost","root","");
//$bd=mysql_select_db("colegio",$cn);

$cn=new PDO('mysql:host=localhost;dbname=colegio','root','');
//$cn=new PDO('mysql:host=mysql.hostinger.es;dbname=u794073518_riki','u794073518_riki','rikinhoesteban171190');
/*if( $cn)
{echo "<script>alert ('CONEXION EXITOSA');</script>";}
else
{echo "<script>alert ('LA CONEXION FALLO');</script>";}  */

?>
</body>
</html>
