<?php
	include("bd/conexion.inc.php");
	$usr=$_POST['usuario'];
	$pwd=$_POST['pass'];
	//$pwd=md5($pwd);
	$qr="select * from acceso where (Usuario='$usr' and Password='$pwd')";
	$rs=mysqli_query($con,$qr);
	if(mysqli_num_rows($rs)!=0)
	{
	    session_start();
	    $_SESSION['ingreso']='si';
	    if($r=mysqli_fetch_array($rs))
	    {
	        $_SESSION['nombre']=$r['usuario'];
	    }
	    //header("location:admin.php");
	    echo "aceptado";
	}
	else
	{
	    header("location:index.php?error=1");
	}
?>