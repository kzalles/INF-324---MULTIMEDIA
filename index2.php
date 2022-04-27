<!doctype html>
<html lang="en">
  <head>
  	<title>EXAMEN-324</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
	<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="estilos.css">
  </head>
  <body>
  		<!-- CABECERA-->
		<div class="row no-gutters" id="cabecera">
			<div class="row align-items-center">
				<div class="col-md-2 offset-md-2">
					<img src="img/logo.png" width="60%">
				</div>
				<div class="col-md-5">
					<h1 class="display-4 font-weight-bold">BIENVENIDOS<hr></h1>
					<p class="fs-2">FACULTAD DE CIENCIAS PURAS Y NATURALES</p>
				</div>
			</div>
		</div>

		<!-- MENU ESTUDIANTES -->
		<div id="menu">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php"><i class="bi bi-house-door-fill"></i> Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#contacto">Contacto</a>
			      </li>
			      <li class="nav-item">
			        <p class="font-weight-normal" style="padding-top:8px;color: #aaa;">&nbsp;
            		<?php include("seguridad.php"); ?>
            		<?php echo " Bienvenid@:&nbsp;&nbsp;<b style='color: white;'>".$_SESSION['usuario']."</b>";?>
					</p>
			      </li>
			      <li class="nav-item">
			      	<a class="nav-link" href="salir.php">&nbsp;<i class="bi bi-box-arrow-left"></i> Cerrar Sesión</a>
			      </li>			      
			    </ul>
			  </div>
			</nav>
		</div>