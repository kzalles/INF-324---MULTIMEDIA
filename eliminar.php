<?php
	include "bd/conexion.inc.php";
	$Sigla=$_GET["Sigla"];
	$CI=$_GET["CI"];

	$sql="delete from inscripcion where PERSONA_CI='$CI' and Sigla = '$Sigla'";
	$resultado=mysqli_query($con, $sql);
		header("Location: mostrar-sesionDir.php");
?>