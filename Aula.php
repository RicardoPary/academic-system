<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {font-family: Vrinda}
-->
</style>

<link rel="stylesheet" href="css/Aula.css">


</head>

<body>
 
<?php
include('conexion.php');
 
$cod=$_POST['id'];
/*$consulta=mysql_query("SELECT * FROM mensaje ORDER BY CodigoMensaje ASC ",$cn);*/
$consulta=mysql_query("SELECT * FROM aula",$cn);
while($res=mysql_fetch_array($consulta))
{	
?>


<div style="float:left; margin-left:60px; margin-bottom: 5px; border:1px #004080 solid; background-color:#FFFFFF; margin-top:25px; background-color:#EAEAEA" >

<table width="153" height="202" border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <th height="101" colspan="4" scope="row"><a href="AulaVirtual.php?CodA=<?php echo $res['CodigoAula'].$cod;?>"><img src=<?php echo $res['Imagen'];?> width="78" height="75" border="0" style="padding:5px; border:1px #CECECE solid;"/></a></th>
  </tr>
  
  <tr>
    <th width="67" scope="row"><div align="right"><span class="Estilo1" style="text-align:left; margin-left:5px;">Nombre:</span></div></th>
    <td width="86" colspan="3"><div align="left"><span class="Estilo1" style="text-align:left; margin-left:5px;"><?php echo $res['Nombre'];?></span></div></td>
  </tr>
  <tr>
    <th scope="row"><div align="right"><span class="Estilo1" style="text-align:left; margin-left:5px;">Tipo:</span></div></th>
    <td colspan="3"><div align="left"><span class="Estilo1" style="text-align:left; margin-left:5px;"><?php echo $res['Tipo'];?></span></div></td>
  </tr>
  <tr>
    <th scope="row"><div align="right"><span class="Estilo1" style="text-align:left; margin-left:5px;">Ubicacion:</span></div></th>
    <td colspan="3"><div align="left"><span class="Estilo1" style="text-align:left; margin-left:5px;"><?php echo $res['Ubicacion'];?></span></div></td>
  </tr>
  <tr>
    <th scope="row"><div align="right"><span class="Estilo1" style="text-align:left; margin-left:5px;">Estado:</span></div></th>
    <td colspan="3"><div align="left"><span class="Estilo1" style="text-align:left; margin-left:5px;"><?php echo $res['Estado'];?></span></div></td>
  </tr>
</table>

</div>

<?php
}
?>
  



</body>
</html>
