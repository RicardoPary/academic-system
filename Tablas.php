<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
	font-weight: bold;
}
body {
	background-color: #FFFFFF;
}
.Estilo3 {font-size: 12px}
.Estilo7 {color: #000000}
.Estilo8 {color: #FFFF33}
-->
</style></head>

<body>
<p>
  <?php
$atributo="";
$comando="";
include("conexion.php");
$var1="";
$var2="";	
$var3="";


	if(isset($_POST['BB']))
	{			
		$text = $_POST['BB'];			
		if($text=="Crear")
		{		
		$a1 = $_POST['T11'];
		$a2 = $_POST['T22'];
		$a3 = $_POST['T33'];
		$consul="insert into cuenta values('$a1','$a2','$a3')";
		$consulta=mysql_query($consul,$cn);
		/* echo "<script>alert ('se Creo correctamente');</script>"; */
		}	
		if($text=="Buscar")
		{		
		$a1 = $_POST['T11'];	
		$consul="select * from cuenta where Codigo='$a1'";
		$consulta=mysql_query($consul,$cn);
		
			while($resul=mysql_fetch_array($consulta))
			{	
			$var1=$resul[0];	
			$var2=$resul[1];
			$var3=$resul[2];			
			}		
		}	
		if($text=="Eliminar")
		{		
		$a1 = $_POST['T11'];	
		$consul="delete from cuenta where Codigo='$a1'";
		$consulta=mysql_query($consul,$cn);
		
		/* echo "<script>alert ('Eliminado con exito');</script>";	 */
		}		
		if($text=="Modificar")
		{		
		$a1 = $_POST['T11'];
		$a2 = $_POST['T22'];
		$a3 = $_POST['T33'];
		$consul="update cuenta set Codigo='$a1',CorreoElectronico='$a2',Contraseña='$a3' where Codigo='$a1'";
		$consulta=mysql_query($consul,$cn);
		
		/* echo "<script>alert ('Modificado con exito');</script>";	 */
		}		
				
	}
?>
</p>
<table width="345" border="1" cellspacing="4" cellpadding="3">
  <tr>
    <th width="311" colspan="4" scope="row"><form id="form2" name="form2" method="post" action="">
        <p align="left">
          <input type="text" name="T11" value="<?php echo $var1?>"/>
          <span class="Estilo3">Codigo</span>
          <input type="submit" name="BB" value="Buscar" />
        </p>
        <p align="left" class="Estilo3">
          <input type="text" name="T22" value="<?php echo $var2?>" />
        Correo Electronico </p>
        <p align="left" class="Estilo3">
          <input type="text" name="T33" value="<?php echo $var3?>"/>
        Contrase&ntilde;a</p>
        <p align="left">
          <input type="submit" name="BB" value="Crear" />
          <input type="submit" name="BB" value="Eliminar" />
          <input type="submit" name="BB" value="Modificar" />
          <input type="reset" name="BB" value="Borrar" />
        </p>
    </form></th>
  </tr>
</table>

<form id="form1" name="form1" method="post" action="">
  <p align="center">
    <input type="text" name="T1" />
    <input type="submit" name="B" value="Buscar" />
    <select name="select">
      <option>Codigo</option>
      <option>CorreoElectronico</option>
      <option>Contrase&ntilde;a</option>
    </select>
  </p>
</form>

<?php

 
if($atributo=="" and $comando=="")
{$sql="SELECT * FROM cuenta  ";}
else
{$sql="SELECT * FROM cuenta  WHERE $atributo LIKE '%$comando%' ORDER BY Codigo";}
?>
<div align="center">
  <table width="769" height="88" border="0" class="Estilo3">
  
    <tr bgcolor="#000066">
      <td height="25" colspan="5"><div align="center" class="Estilo8">TABLA DE CUENTAS </div></td>
    </tr>
    <tr bgcolor="#666666">
      <td width="100" height="25"><div align="center" class="Estilo7">Codigo</div></td>
      <td width="155"><div align="center" class="Estilo7">Correo Electronico</div></td>
      <td width="137"><div align="center" class="Estilo7">Contrase&ntilde;a</div></td>
      <td colspan="2"><div align="center" class="Estilo7">Opciones</div></td>
    </tr>
    <?php 
include("conexion.php");
$consulta=mysql_query($sql,$cn);
while($res=mysql_fetch_array($consulta))
{	
?>
    <tr bgcolor="#999999">
      <td height="26" ><?php echo $res['Codigo'];?></td>
      <td><?php echo $res['CorreoElectronico'];?></td>
      <td><?php echo $res['Contraseña'];?></td>
      <td width="58"><a href="#">Eliminar</a></td>
      <td width="51"><a href="#">Editar</a></td>
    </tr>
    <?php		
}	
?>
</table>
<?php

	if(isset($_POST['B']))
	{	
		$text=$_POST['B'];
		if($text=="Buscar")
			{
			$comando=$_POST['T1'];
			$atributo=$_POST['select'];
			header("Location: Tablas.php");			 		
			}	
	}
?>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
