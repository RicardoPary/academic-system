<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Muro</title>

<link rel="stylesheet" href="css/Muro2.css" type="text/css"/> 
<script src="js/jquery-1.11.0.min.js"></script>


<script type="text/javascript">
	$(document).ready(function() 
	{							
		CargarMuro();	
		function CargarMuro()
		{  
		var codigo=<?php echo $_POST['id'];?>;
		$("#Medio").load('Muro3.php',{id:codigo});	
		}
	});
</script>


<script type="text/javascript">
$(document).ready(function()
{
   $("p a").each(function(){
      var href = $(this).attr("href");
	 
	  $(this).attr({ href: "#"});
      $(this).click(function(){
	  
	  var codigo=<?php echo $_POST['id']; ?>; 
      $("#Medio").load(href,{id:codigo});		 
		 
      });
   });
});
</script>

</head>

<body>
<?php   
include('Conexion.php');
  $cod=$_POST['id'];  
 
  $sql=$cn->prepare("SELECT * FROM cuenta WHERE CodigoCuenta=:Codigo");
  $sql->execute(array(':Codigo'=>$cod));
  $op=$sql->fetch(); 
?>

<div class="Menudiv">
  <span><img src=<?php echo $op['Foto'];?> width="130" height="106" class="foto1" /></span>
  <p class="letra1"><strong>Mi perfil</strong></p>
		 
	
	
	<p>
	<img src="Imagenes/itunes_icono.jpg" style="width:21px; height:19px;"  class="img"/>
	<a href="Registro.php" class="letra2 ">Crear Cuenta</a>
	</p>	
		  
	<p>
	<img src="Imagenes/camara-web-icono-9835-128.png" style="width:21px; height:19px;"  class="img"/>
	<a href="DatosPersonales.php" class="letra2 ">Datos Personales </a>
	</p>	
	  
	<p>
	<img src="Imagenes/cam-monte-icono-8036-128.png"style="width:21px; height:19px;"  class="img"/>
	<a href="Cuenta.php" class="letra2">Horarios</a>
	</p>	
	
	<p>
	<img src="Imagenes/tasks-33501.jpg" style="width:21px; height:19px;"  class="img"/>
	<a href="Actividad.php"  class="letra2">Actividades</a>
	</p>	  
		  
	<p class="letra1"><strong>Estudiantes</strong></p>	
	 
	<p>
	<img src="Imagenes/talk-talk-icono-6046-128.png" style="width:21px; height:19px;"  class="img"/>
	<a href="Registro.php" class="letra2">Record Academico</a>
	</p>
	
	
	<p>
	<img src="Imagenes/nike.jpg" style="width:21px; height:19px;"  class="img"/>
	<a href="Tablas.php"   class="letra2">Inscripcion</a> 
	</p>
	
	
	<p>
	<img src="Imagenes/odA9sNLrE86.jpg"  style="width:21px; height:19px;"  class="img"/>
	<a href="Cuenta.php"   class="letra2">Empleados</a> 
	</p>
	
	<p>
	<img src="Imagenes/iconos-messenger1.jpg"  style="width:21px; height:19px;"  class="img"/>
	<a href="untitled4.php"  class="letra2">Chat Grupal</a>
	</p>	 
	
	<!--<p class="letra1"><strong>Docentes</strong></p>	
	
	<p>
	<img src="Imagenes/encontrar-busqueda-lupa-de-la-ventana-de-zoom-icono-6743-128.png" class="img"/><a href="Nuevo.php" class="letra2">Notas</a>
	</p>
	
	<p>
	<img src="Imagenes/AulaVirtual.PNG" width="26" height="25" class="img"/>
	<a href="Aula.php"  class="letra2">Clases Online</a>	</p>
	
	<p>
	<img src="Imagenes/perfil-icono-7508-48.png" class="img"/>
	<a href="Cuenta.php"   class="letra2">Festividades</a> 
	</p>
	
	<p>
	<img src="Imagenes/perfil-icono-7508-48.png" class="img"/>
	<a href="Alumno.php"   class="letra2">Video Llamada</a>
	</p>	
	
	<p>
	<img src="Imagenes/perfil-icono-7508-48.png" class="img"/>
	<a href="Alumno.php"   class="letra2">Examen Online</a>
	</p>	
	
	<p>
	<img src="Imagenes/perfil-icono-7508-48.png" class="img"/>
	<a href="Alumno.php"  class="letra2">Sacar Permiso</a>
	</p>
	
	<p>
	<img src="Imagenes/Printed-Matter-Book-stack-icon.png" class="img"/>
	<a href="Alumno.php"  class="letra2">Biblioteca Virtual</a>
	</p>	
		
	<p>
	<img src="Imagenes/perfil-icono-7508-48.png" class="img"/>
	<a href="Alumno.php"  class="letra2">Asistencia</a>
	</p>	
	
	<p>
	<img src="Imagenes/perfil-icono-7508-48.png" class="img"/>
	<a href="Alumno.php"  class="letra2">Seminario online</a>
	</p>
	
	<p>
	<img src="Imagenes/CuadernoDigital.PNG" class="img"/>
	<a href="Aula.php"    class="letra2">Cuaderno Digital</a>
	</p>
	
	<p>
	<img src="Imagenes/CuadernoDigital.PNG" class="img"/>
	<a href="Aula.php"    class="letra2">Trabajo Grupal</a>
	</p>	
	
	<p>
	<img src="Imagenes/CuadernoDigital.PNG" class="img"/>
	<a href="Aula.php"    class="letra2">Noricias Umsa</a>
	</p>
	
	<p>
	<img src="Imagenes/CuadernoDigital.PNG" class="img"/>
	<a href="Aula.php"    class="letra2">Aplicaciones</a>
	</p>
	
	<p>
	<img src="Imagenes/icono-de-la-calculadora-22000375.jpg" class="img"/>
	<a href="Aula.php"    class="letra2">Calc Cientifica</a>
	</p>-->
	
</div>	 
   
<div id="Medio" style="width:600px; margin:10px; padding:0px; float:left; margin-left:10px;">					 
</div>

</body>
</html>
