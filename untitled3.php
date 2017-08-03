<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>jQuery custom scrollbar demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- stylesheet for demo and examples -->
	<link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" href="js/jquery.mCustomScrollbar.css">
	
</head>

<body>
	
	
	<div id="iframe-container" class="content">
    <iframe src="Contactos.php" scrolling="no" width="250" height="1000" frameborder="0">    </iframe>
    </div>
	
	

	<script src="js/jquery-1.11.0.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>
	
	
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	
	<script>
		(function($){
			$(window).load(function(){
				
				$("#iframe-container").mCustomScrollbar({
					axis:"y",
					theme:"minimal"
				});
				
			});
		})(jQuery);
	</script>
</body>
</html>
