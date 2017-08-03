<html>
<head>
<title>Cuentas</title>

<style type="text/css">
<!--
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo15 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #000099; font-weight: bold; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><head>
	
<link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables.css"/>
<script type="text/javascript" language="javascript" src="DataTables/jquery.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/jquery.dataTables.js"></script>

<script>
$ (document).ready(
function() 
{
$('table.sortable tbody tr:odd').addClass('odd');
$('table.sortable tbody tr:even').addClass('even');
}
);
</script>

<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "language": {         	
	"processing": "Bitte warten...",
	"lengthMenu": "Mostrar _MENU_ registro",
	"zeroRecords": "Nothing found - sorry",
	"info": "Showing page _PAGE_ of _PAGES_",
	"infoEmpty": "No records available",
	"infoFiltered": "(filtered from _MAX_ total records)",
	"infoPostFix": "",
	"search": "Buscar",
	"url": "",
	"paginate": {
		"first":    "Erster",
		"previous": "Anterior",
		"next":     "Siguiente",
		"last":     "Letzter"
				}			
        }
    } );
} );
</script>

<script>
$(document).ready(function() {
    var table = $('#example').DataTable();
 
    $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );
} );
</script>


</head>

<body>
<div style="width:800px; margin:10px auto; ">
<div align="center" style="margin:20px;"><a href="Nuevo2.php">Añadir Cuenta</a></div>

<table width="580"  border="0" id="example" class="display compact">
  <thead>
    <tr >
      <td width="145" height="25"><span class="Estilo15">Codigo</span></td>
      <td width="225"><span class="Estilo15">Correo Electronico</span></td>
      <td width="234"><span class="Estilo15">Contraseña</span></td>
      <td width="109"><span class="Estilo15">Acciones</span></td>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td width="145" height="25"><span class="Estilo15">Codigo</span></td>
      <td width="225"><span class="Estilo15">Correo Electronico</span></td>
      <td width="234"><span class="Estilo15">Contraseña</span></td>
      <td><span class="Estilo15">Acciones</span></td>
    </tr>
  </tfoot>
  <tbody>
    <?php 
include("conexion.php");
$consulta=mysql_query("SELECT * FROM Cuenta",$cn);
while($res=mysql_fetch_array($consulta))
{	
?>
    <tr>
      <td ><span class="Estilo3"><?php echo $res['CodigoCuenta'];?></span></td>
      <td><span class="Estilo3"><?php echo $res['CorreoElectronico'];?></span></td>
      <td><span class="Estilo3"><?php echo $res['Contraseña'];?></span></td>
      <td ><span class="Estilo3"><a href="Eliminar.php?recordID=<?php echo $res['CodigoCuenta']?>"><img src="Imagenes/basura-icono-3648-48.png" width="20" height="25"></a> <a href="Editar.php?recordID=<?php echo $res['CodigoCuenta']?>"><img src="Imagenes/icon18_edit_allbkg.gif" width="23" height="26"></a> </span></td>
    </tr>
    <?php		
}	
?>
  </tbody>
</table>

</div>

</body>


</html>
