<?php
    session_start();
    if($_SESSION['ingreso']!="si")
    {
        header("location:mostrar-sesion.php?error=2");
    }
?>


