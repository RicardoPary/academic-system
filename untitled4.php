<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<title>Chat Grupal</title>
		<link rel="stylesheet" href="css/ultimo.css" type="text/css"/> 
		
		<script src="js/jquery.js"></script>
		<script src="js/jquery-1.11.0.min.js"></script>
		
		
		
		
	
		
		<script>
		
			$(document).on("ready", function(){				
				
				RegistrarMensajes();
				$.ajaxSetup({"cache":false});
				setInterval("loadOldMessages()",500);
				
			});
				var RegistrarMensajes=function()
				{
				$("#send").on("click",function(e)
				{
					e.preventDefault();
					var frm=$("#formChat").serialize();
					$.ajax(
					{
					type: "POST",
					url: "register.php",
					data:frm
					}).done(function(info){
					$("#message").val("");
					var altura=$("#conversation").prop("scrollHeight");
					$("#conversation").scrollTop(altura);
					
					console.log(info);})
				
				});				
				}	
				
				var loadOldMessages=function()
				{
					$.ajax(
					{
					type: "POST",
					url: "Mensajes.php"				
					}).done(function(info){
					$("#conversation").html(info);
					$("#conversation p:last-child").css({"background-color":"lightgreen","padding-botton":"20px"});
				
				    var altura=$("#conversation").prop("scrollHeight");
					$("#conversation").scrollTop(altura);
				
				    });				
				}		
			
		</script>
	</head>
	<body>
	
	<?php   

   $cod=$_POST['id'];  
 
  
  ?>
	
	
			
				<div>
					<form id="formChat" role="form">
						<div class="form-group">
							
							<input type="text" class="form-control" id="user" name="user" placeholder="Enter User" value="<?php echo $cod;?>" style="visibility:hidden">
						</div>
						
									
			<div id="conversation" style=" width:660px; height:350px; border: 1px solid #003871; padding: 12px;  border-radius: 5px; overflow-x: hidden; margin:0px;">									
			</div>							
										
			<label for="message" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11;">Mensaje</label>
			<div style="width:685px; border:1px #003871 solid; border-radius:5px; padding:0px;">
			  <p>
			    <textarea id="message" name="message"   rows="1" cols="120" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; margin:5px;"></textarea>
			  </p>
			</div>
						
			<button id="send" class="submit" >Enviar</button>						
					</form>
				</div>
			
	</body>
</html>