<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chat</title>

<link rel="stylesheet" href="css/Chat.css" />
<script src="js/jquery-1.11.0.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() 
	{							
		setInterval(CargarMensajes,2000); 
						
		function CargarMensajes()
		{  $("#Mensajes").load('Mensajes.php');	}
		
							
	});
</script>	


	<script language="javascript">
	function autofitIframe(id)
	{
		if(!window.opera && document.all && document.getElementById)
		{
		id.style.height=id.contentWindow.document.body.ScrollHeight;		
		}
		else	
		{
			if(document.getElementById)
			{
			id.style.height=id.contentDocument.body.scrollHeight+"px";
			}
		}		
	}
	
	</script>
	



</head>

<body>

<?php 
$cod=$_POST['id'];
include('Conexion.php');

?>



<div id="Mensajes" class="CuerpoMensajes" >
</div>

<div class="botones">

<form method="post" action="InsertarMensaje.php?id=<?php echo "$cod";?>" > 
<p >Mensaje<input type="text" name="T1" id="T1" style="width:300px; height:30px;" /></p>
<p><input type="submit" name="B1" id="B1" value="Enviar"  /></p>
</form>

</div>




</body>
</html>
