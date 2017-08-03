<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Muro</title>

<link rel="stylesheet" href="css/Publicacion.css" type="text/css"/> 

</head>

<body>
<?php /*?><?php header('refresh:2; url=Publicacion.php');?><?php */?>
<?php	   
  include('Conexion.php'); 
  $sql=$cn->prepare("SELECT persona.Nombre,persona.Paterno,persona.Materno,cuenta.Foto as Foto,cuenta.Nick,imagen.Foto as Imagen,imagen.Comentario FROM cuenta,imagen,persona WHERE imagen.CodigoCuenta=cuenta.CodigoCuenta AND persona.NumeroDocumento=cuenta.NumeroDocumento ORDER BY imagen.CodigoImagen DESC");
  $sql->execute();
  
  
  while($op=$sql->fetch())
  { 
 
?>


<div  class="wrapper" style="width:500px; margin-bottom:15px; border:1px #B7B7B7 solid; background-color:#FFFFFF; cursor:pointer;" >

<div  style="height:51px; font-weight:bold;  margin:10px; ">
  <img src=<?php  echo $op['Foto'];?> width="52" height="44" style="float:left;  border:1px #B6B6B6 solid; border-radius:5px; padding:1px;"/>
  <label style="width:200px;  font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#004993; "><?php echo $op['Nombre']." ".$op['Paterno']." ".$op['Materno'];?></label>
</div>
 
  <div style="  margin:10px; border:1px #003F7D solid;"><img src=<?php  echo $op['Imagen'];?> width="478" height="364" /></div>
	
	<div style="font-family:Arial, Helvetica, sans-serif; font-size:14px; margin:10px; border:">
	
<label style="width:200px; height:50px;  color:#4E4E4E; font-weight:100; "><?php echo $op['Comentario'];?></label>
 
  </div>
	
	<div style="font-family:Arial, Helvetica, sans-serif; font-size:14px; height:20px; margin:10px; ">


	</div>
	
	<div style="border-top:1px #EFEFEF solid; height:50px; background-color:#F4F4F4">	
	<img src=<?php  echo $op['Foto'];?> width="35" height="34" style="float:left;  border:1px #B6B6B6 solid; margin:8px;"/>
	<input type="text" style=" height:25px;  width:400px; margin-top:10px; border:1px #CDCDCD solid;" placeholder="  Escribe un comentario...."/>
  </div>
</div>
	<?php 
 }
?>
	

	
</body>
</html>
