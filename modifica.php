<?php
	
	$var0=$_GET['Sigla'];
	$var1=$_GET['NombreCompleto'];
    $var2=$_GET['CI'];
    $var3=$_GET['departamento'];
    $var4=$_GET['nota1'];
    $var5=$_GET['nota2'];
    $var6=$_GET['nota3'];
		
	include "bd/conexion.inc.php";
	$sql="update persona set CI='$var2', Departamento='$var3', NombreCompleto='$var1' where CI='$var2'";
	$resm=mysqli_query($con,$sql);

	$sql2="update inscripcion set nota1='$var4', nota2='$var5', nota3='$var6' where PERSONA_CI='$var2' and Sigla = '$var0'";
	$resm2=mysqli_query($con,$sql2);

		header("Location: mostrar-sesionDir.php"); 

?>	
