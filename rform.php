
	<?php
		include "bd/conexion.inc.php";	
		$pass=$_GET["pass"];
		$usuario=$_GET["usuario"];

		$sql = "select * from acceso where (Password = '$pass' and Usuario = '$usuario')";				
		$rs = mysqli_query($con, $sql);
		if(mysqli_num_rows($rs)!=0)
		{
		    session_start();
		    $_SESSION['ingreso']='si';
		    if($r=mysqli_fetch_array($rs))
		    {
		        $_SESSION['usuario']=$r['Usuario'];
		    }
		    header("location:admin.php");
		}
		else
		{
		    header("location:index.php?error=1");
		}
	?>