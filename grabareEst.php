<?php 
	$v1=$_GET['ci'];
	$v2=$_GET['sigla'];
	$v3=$_GET['nota1'];
	$v4=$_GET['nota2'];
	$v5=$_GET['nota3'];
    include "bd/conexion.inc.php";
$q2="insert into inscripcion (PERSONA_CI,Sigla,nota1,nota2,nota3) values ('$v1','$v2','$v3','$v4','$v5')";
    $rs2=mysqli_query($con,$q2);

    if($rs2)
    {
        echo"
            <script>
            alert('Se registro correctamente');
            location.href='mostrar-sesionDir.php';
        </script>";                
    } else {
        echo"
            <script>
            alert('No se registro nada');
            
        </script>";
    }
?>