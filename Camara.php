<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>jQuery webcam plugin • Code is poetry</title>




</head>
<body>

<div id="webcam">
<img src="js/Camara/antenna.png" alt="">
<object id="XwebcamXobjectX" type="application/x-shockwave-flash" data="js/Camara/jscam_canvas_only.swf" width="320" height="240">
  <param name="movie" value="/download/jscam_canvas_only.swf">
  <param name="FlashVars" value="mode=callback&amp;quality=85">
  <param name="allowScriptAccess" value="always">
</object>

<div><a onClick="toggleFilter(this);"><img src="js/Camara/icon_filter.png" alt=""></a></div>
</div>




<script type="text/javascript" src="js/Camara/prettify.js">
</script>

<script>
 window.onload = function() 
 {
 prettyPrint();
 }
</script>
<script src="js/Camara/default.js"></script>
</body>

</html>