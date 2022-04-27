<?php
    include "bd/conexion.inc.php";
    include("seguridad.php");
    $usu = $_SESSION['usuario'];
    
    $sql = "call nivelAcceso('$usu')";
    $datos = mysqli_query($con, $sql);
    $arrayDatos = array();

      while($row = mysqli_fetch_array($datos)){
        $arrayDatos['nivel'] = $row['nivel'];
      }
      $ni = $arrayDatos['nivel'];
    if ($ni == 1) {
        header("location:mostrar-sesion.php");
    }else{
        if ($ni == 2) {
            header("location:mostrar-sesionDir2.php");
        }
    }
?>