<?php
include("Conexion.php");

	$a1=$_POST['T1'];
	$a2=$_POST['T2'];
		
	$sql=$cn->prepare('SELECT * FROM cuenta WHERE CorreoElectronico=:Correo AND Contrasena=:Contra');	
	$sql->execute(array(':Correo' => $a1,':Contra' => $a2 ));		
	$resultado = $sql->fetch();
	
	$tam=count($resultado);	
	$cod=$resultado['CodigoCuenta'];    
	$Tipo=$resultado['Tipo'];
	
	
	$sql2=$cn->prepare('SELECT * FROM estado WHERE CodigoCuenta=:Cod');	
	$sql2->execute(array(':Cod' => $cod));		
	$resultado2 = $sql2->fetch();
	
	
	if($tam>1)		
	{
			if($Tipo == "Administrador")
			{	
	   	
			}	
			if($Tipo == "Usuario")
			{
				$est=$resultado2['Nombre'];
				
					if($est == "Inactivo")
					{
					$es="Activo";	
					
					$sql3=$cn->prepare('UPDATE estado SET Nombre=:Nombre WHERE CodigoCuenta=:Codigo');	
					$sql3->execute(array(':Nombre' => $es,':Codigo' => $cod));		
					$resultado3 = $sql3->fetch();
																			
												
	    			header('Location: Estudiante.php?id='.$cod);	
			
					}
					else
					{				
					header('Location: Inicio.php');
					}		
			}	
	}
	else
	{
	header('Location: Inicio.php');
	}	

?>