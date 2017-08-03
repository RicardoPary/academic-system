<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	
	<link rel="stylesheet" type="text/css" media="all" href="js/jScrollPane.css">
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery_002.js"></script>
	<script type="text/javascript" src="js/jScrollPane.js"></script>
	

<script type="text/javascript">
	$(function()
	{
	$('#pane1').jScrollPane({showArrows:true,scrollbarWidth:10, scrollbarMargin:20});
	});
</script>
	
<script type="text/javascript">
	$(document).ready(function() 
	{							
		setInterval(CargarContactos,3000);				
		function CargarContactos()
		{  $('#panel').load('Contactos.php');}					
	});
</script>

	
		

</head>

<body>

<div tabindex="0" style="height: 232px; width: 500px;" class="jScrollPaneContainer">
<div style="overflow:visible; height: auto; width: 470px; padding-right: 20px; position: absolute; top: 0px;" id="pane1" class="scroll-pane">

<p>fsdjfisdjiofyhiqewuriopa89fusdnifvuiuweunuihucf8auwicfhahfu8</p>
<p>fsdjfisdjiofyhiqewuriopa89fusdnifvuiuweunuihucf8auwicfhahfu8</p>
<p>fsdjfisdjiofyhiqewuriopa89fusdnifvuiuweunuihucf8auwicfhahfu8</p>
<p>fsdjfisdjiofyhiqewuriopa89fusdnifvuiuweunuihucf8auwicfhahfu8</p>
<p>fsdjfisdjiofyhiqewuriopa89fusdnifvuiuweunuihucf8auwicfhahfu8</p>
<p>fsdjfisdjiofyhiqewuriopa89fusdnifvuiuweunuihucf8auwicfhahfu8</p>
<p>fsdjfisdjiofyhiqewuriopa89fusdnifvuiuweunuihucf8auwicfhahfu8</p>
<p>fsdjfisdjiofyhiqewuriopa89fusdnifvuiuweunuihucf8auwicfhahfu8</p>

</div>

<div style="height: 0px;" class="jScrollCap jScrollCapTop">
</div>
<div style="width: 10px; height: 214px; top: 9px;" class="jScrollPaneTrack">
<div style="width: 10px; height: 116px; top: 0px;" class="jScrollPaneDrag">
<div style="width: 10px;" class="jScrollPaneDragTop">
</div>
<div style="width: 10px;" class="jScrollPaneDragBottom">
</div>
</div>
</div>

<div style="height: 0px;" class="jScrollCap jScrollCapBottom"></div><a style="width: 10px; top: 0px;" tabindex="-1" class="jScrollArrowUp disabled" href="javascript:;">Scroll up</a><a style="width: 10px; bottom: 0px;" tabindex="-1" class="jScrollArrowDown" href="javascript:;">Scroll down</a>
</div>

</body>
</html>
