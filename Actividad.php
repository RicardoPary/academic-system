<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>


<?php	   
  include('conexion.php');
  $cod=$_POST['id'];  
  $sql=mysql_query("SELECT * FROM actividad ORDER BY CodigoActividad DESC",$cn);
  while($op=mysql_fetch_array($sql))
  { 
 
?>
<div style="border-radius:5px; border:1px #003F7D solid; width:550px; margin:30px auto;padding:10px; margin-bottom:20px;">

<div align="center" style="background-color:#004488;  height:60px; text-transform:uppercase; font-weight:bold; margin-bottom:15px; border:1px #CCCCCC solid; border-radius:10px;;  margin-left:15px;"><img src="Imagenes/Dibujoffffddd.JPG" width="40" height="42" style="float:left; border:1px #00FF33 solid; margin:4px 10px; border-radius:3px;"/>

  <div style="color:#FFFFFF; font-family:Vrinda; font-size:28px; width:250px; height:25px;  margin:14px auto;"><?php echo $op['Titulo'];?></div>
  </div>
	
<div style="font-family:Arial, Helvetica, sans-serif; font-size:14px; height:150px; margin-bottom:15px; margin-left:15px; border:1px #CCCCCC solid;"><label>Comentario</label>	<label><?php echo $op['Comentario'];?></label></div>
	<div style="font-family:Arial, Helvetica, sans-serif; font-size:14px; height:20px; margin-bottom:15px; margin-left:15px; border:1px #CCCCCC solid;">
	<label>Fecha de Publicaion</label><label><?php echo $op['FechaInicio'];?></label>
	</div>
	<div style="font-family:Arial, Helvetica, sans-serif; font-size:14px; height:20px; margin-bottom:15px; margin-left:15px; border:1px #CCCCCC solid;">
	<label>Fecha Limite</label><label><?php echo $op['FechaFinal'];?></label>
	</div>
</div>
<?php 
 }
?>


</body>
</html>
