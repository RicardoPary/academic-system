<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>jQuery custom scrollbar demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- stylesheet for demo and examples -->

	<link rel="stylesheet" href="js/jquery.mCustomScrollbar.css">
	
<script src="js/jquery-1.11.0.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>	
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>			

<script type="text/javascript">
	$(document).ready(function() 
	{				
		

		$("#riki").click(function(e)
		{					
		e.preventDefault();
		var url='Contactos.php';
		
		$.get(url,  function(data){  $(".content .mCSB_container").append(data);  }  );
		$("#riki").mCustomScrollbar({theme:"minimal"});
		
		});				
	
	});
</script>
		</head>

<body>				
			<div class="content mCustomScrollbar" style="width:200px; height:500px; border:1px 
			#000000 solid; background-color:#D8D8D8; padding:10px;" id="riki">				
			
			</div>
		
	
	
</body>
</html>