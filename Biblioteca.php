<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>DEMO de canvasPaint, by Oscar de los Santos - www.oscardelossantos.es</title>
 

    <script src="js/Pizarra/jquery-latest.js" type="text/javascript"></script>
    <script src="js/Pizarra/canvasPaint.js" type="text/javascript"></script>

    <script type="text/javascript">
        var canvasManager;
        $(window).load(function () {
            canvasManager = $(".canvas").canvasPaint();
        });
    </script>
	
	<link href="js/Pizarra/demo.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="toolsBars">
		<fieldset class="toolsBar">
			<legend>Tools</legend>
			<input style="background-image: url(Imagenes/editar-icono-9796.ico);" value="lapiz" onclick="canvasManager.activatePen()" type="button">
			<input style="background-image: url('images/borrador.png');" value="borrador" onclick="canvasManager.activateEraser()" type="button">
			<input style="background-image: url('images/circulo.png');" value="circulo vacio" onclick="canvasManager.activateEmptyCircle()" type="button">
			<input style="background-image: url('images/circuloRelleno.png');" value="circulo lleno" onclick="canvasManager.activateCircle()" type="button">
			<input style="background-image: url('images/cuadrado.png');" value="cuadrado vacio" onclick="canvasManager.activateEmptyRectangle()" type="button">
			<input style="background-image: url('images/cuadradoRelleno.png');" value="cuadrado lleno" onclick="canvasManager.activateRectangle()" type="button">
			<input style="background-image: url('images/linea.png');" value="linea" onclick="canvasManager.activateLine()" type="button">
			<input style="background-image: url('images/spray.png');" value="spray" onclick="canvasManager.activateSpray()" type="button">
			<input style="background-image: url('images/dibujo.png');" value="imagen de fondo" onclick="canvasManager.loadBackgroundImage('images/dibujo1.png')" type="button">
			<input style="background-image: url('images/texto.png');" value="texto" onclick="canvasManager.text()" type="button">
			<input style="background-image: url('images/save.png');" value="guardar" onclick="canvasManager.save()" type="button">
			<input style="background-image: url('images/undo.png');" value="undo" onclick="canvasManager.undo()" type="button">
			<input style="background-image: url('images/redo.png');" value="redo" onclick="canvasManager.redo()" type="button">
			<input style="background-image: url('images/new.png');" value="nuevo" onclick="canvasManager.clearAll()" type="button">
		</fieldset>
			
		<fieldset class="toolsBar">
			<legend>Line color</legend>
			<input style="background-color: red;" value="color rojo linea" onclick="canvasManager.changeStrokeColor('red')" type="button">
			<input style="background-color: blue;" value="color azul linea" onclick="canvasManager.changeStrokeColor('blue')" type="button">
			<input style="background-color: green;" value="color verde linea" onclick="canvasManager.changeStrokeColor('green')" type="button">
			<input style="background-color: yellow;" value="color amarillo linea" onclick="canvasManager.changeStrokeColor('yellow')" type="button">
			<input style="background-color: black;" value="color negro linea" onclick="canvasManager.changeStrokeColor('black')" type="button">
			<input style="background-color: pink;" value="color rosa linea" onclick="canvasManager.changeStrokeColor('pink')" type="button">
			<input style="background-color: brown;" value="color marron linea" onclick="canvasManager.changeStrokeColor('brown')" type="button">
		</fieldset>	
			
		<fieldset class="toolsBar">
			<legend>Fill color</legend>
			<input style="background-color: red;" value="color rojo relleno" onclick="canvasManager.changeFillColor('red')" type="button">
			<input style="background-color: blue;" value="color azul relleno" onclick="canvasManager.changeFillColor('blue')" type="button">
			<input style="background-color: green;" value="color verde relleno" onclick="canvasManager.changeFillColor('green')" type="button">
			<input style="background-color: yellow;" value="color amarillo relleno" onclick="canvasManager.changeFillColor('yellow')" type="button">
			<input style="background-color: black;" value="color negro relleno" onclick="canvasManager.changeFillColor('black')" type="button">
			<input style="background-color: pink;" value="color rosa relleno" onclick="canvasManager.changeFillColor('pink')" type="button">
			<input style="background-color: brown;" value="color marron relleno" onclick="canvasManager.changeFillColor('brown')" type="button">
		</fieldset>	
		
		<fieldset class="toolsBar">
			<legend>Line size</legend>
			<input style="background-image: url('images/tamanio2px.png');" value="2 px" onclick="canvasManager.changeStrokeSize(2)" type="button">
			<input style="background-image: url('images/tamanio6px.png');" value="6 px" onclick="canvasManager.changeStrokeSize(6)" type="button">
			<input style="background-image: url('images/tamanio10px.png');" value="10 px" onclick="canvasManager.changeStrokeSize(10)" type="button">
			<input style="background-image: url('images/tamanio15px.png');" value="15 px" onclick="canvasManager.changeStrokeSize(15)" type="button">
			<input style="background-image: url('images/tamanio20px.png');" value="20 px" onclick="canvasManager.changeStrokeSize(20)" type="button">
		</fieldset>
		
		<fieldset class="toolsBar">
			<legend>Others</legend>
			<input style="background-image: url('images/opacity100.png');" title="densidad 100%" value="opacidad 100%" onclick="canvasManager.changeOpacity(100)" type="button">
			<input style="background-image: url('images/opacity50.png');" title="densidad 50%" value="opacidad 50%" onclick="canvasManager.changeOpacity(50)" type="button">
			<input style="background-image: url('images/sprayLow.png');" title="spray poco denso" value="densidad spray 5" onclick="canvasManager.changeSprayDensity(5)" type="button">
			<input style="background-image: url('images/sprayHigh.png');" title="spray muy denso" value="densidad spray 20" onclick="canvasManager.changeSprayDensity(20)" type="button">
		</fieldset>
	</div>

    <div style="width: 300px; height: 200px; border: 2px solid red; position: relative; background-color:#003E00" class="canvas">
	
	<canvas style="position: absolute; top: 0px; left: 0px; z-index: 0;" height="400" width="600">
	</canvas>
	<canvas style="position: absolute; top: 0px; left: 0px; z-index: 1;" height="400" width="600">
	</canvas>
	</div>


</body>
</html>