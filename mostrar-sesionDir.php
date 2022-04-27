<?php include "menuDir.php" ?>
<!-- ESTUDIANTES DIRECTOR -->
		<!-- CONTENIDO -->
		<div class="row" style="width: 100%;margin: 0;padding: 5%;">
			<div class="col-md-10 offset-md-1" style="padding: 4%;border: solid 1px #aaa;">
				<p class="text-center font-weight-bold"><h3>NOTAS ESTUDIANTES</h3></p> <hr>
		<p class="text-center font-weight-bold"><h5 style="color: blue;">
			<a name="INF324">MATERIA INF - 324</a></h5></p>
					<?php
						$usu = $_SESSION['usuario'];
						include "bd/conexion.inc.php";
						$sql="select p.NombreCompleto,p.CI AS CI,p.Departamento, i.Sigla,i.nota1,i.nota2,i.nota3, a.Usuario
							from acceso a
							inner join persona p 
								on a.PERSONA_CI = p.CI
							inner join inscripcion i 
									on i.PERSONA_CI = p.CI WHERE i.Sigla = 'INF324' order by p.NombreCompleto";
						
						$resultado=mysqli_query($con, $sql);
					?>
					<table class="table table-striped table-bordered table-hover">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Sigla</th>
								<th scope="col">Estudiante</th>
								<th scope="col">Cedula</th>
								<th scope="col">Nota 1</th>
								<th scope="col">Nota 2</th>
								<th scope="col">Nota 3</th>
								<th scope="col">Nota Final</th>
								<th scope="col">Editar</th>
								<th scope="col">Eliminar</th>
							</tr>
						</thead>
					<?php
					while ($fila=mysqli_fetch_array($resultado))
					{
						$st = ($fila['nota1']+$fila['nota2']+$fila['nota3'])/3;
						$st = number_format($st, 2);
						$sigla = $fila['Sigla'];
						$CI = $fila['CI'];
						echo "<tr>";
						echo "<td>".$fila['Sigla']."</td>";
						echo "<td>".$fila['NombreCompleto']."</td>";
						echo "<td>".$fila['CI']."</td>";
						echo "<td>".$fila['nota1']."</td>";
						echo "<td>".$fila['nota2']."</td>";
						echo "<td>".$fila['nota3']."</td>";
						echo "<td>".$st."</td>";
						echo "<td><a class='btn btn-outline-primary' role='button' 
						href='editar.php?Sigla=".$sigla."&CI=".$CI."'>
						<i class='bi bi-pencil-square'></i></a>";
						echo "</td>";
						echo "<td>";
						echo "<a class='btn btn-outline-danger' role='button' 
						href='eliminar.php?Sigla=".$sigla."&CI=".$CI."'>
						<i class='bi bi-trash'></i></a>";
						echo "</td>";
						echo "</tr>";
					}
					?>
					</table>
		<p class="text-center font-weight-bold"><h5 style="color: blue;">
			<a name="INF315">MATERIA INF - 315</a></h5></p>		
					<?php
						$usu = $_SESSION['usuario'];
						include "bd/conexion.inc.php";
						$sql="select p.NombreCompleto,p.CI AS CI,p.Departamento, i.Sigla,i.nota1,i.nota2,i.nota3, a.Usuario
							from acceso a
							inner join persona p 
								on a.PERSONA_CI = p.CI
							inner join inscripcion i 
									on i.PERSONA_CI = p.CI WHERE i.Sigla = 'INF315' order by p.NombreCompleto";
						
						$resultado=mysqli_query($con, $sql);
					?>
					<table class="table table-striped table-bordered table-hover">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Sigla</th>
								<th scope="col">Estudiante</th>
								<th scope="col">Cedula</th>
								<th scope="col">Nota 1</th>
								<th scope="col">Nota 2</th>
								<th scope="col">Nota 3</th>
								<th scope="col">Nota Final</th>
								<th scope="col">Editar</th>
								<th scope="col">Eliminar</th>
							</tr>
						</thead>
					<?php
					while ($fila=mysqli_fetch_array($resultado))
					{
						$st = ($fila['nota1']+$fila['nota2']+$fila['nota3'])/3;
						$st = number_format($st, 2);
						$sigla = $fila['Sigla'];
						$CI = $fila['CI'];
						echo "<tr>";
						echo "<td>".$fila['Sigla']."</td>";
						echo "<td>".$fila['NombreCompleto']."</td>";
						echo "<td>".$fila['CI']."</td>";
						echo "<td>".$fila['nota1']."</td>";
						echo "<td>".$fila['nota2']."</td>";
						echo "<td>".$fila['nota3']."</td>";
						echo "<td>".$st."</td>";
						echo "<td><a class='btn btn-outline-primary' role='button' 
						href='editar.php?Sigla=".$sigla."&CI=".$CI."'>
						<i class='bi bi-pencil-square'></i></a>";
						echo "</td>";
						echo "<td>";
						echo "<a class='btn btn-outline-danger' role='button' 
						href='eliminar.php?Sigla=".$sigla."&CI=".$CI."'>
						<i class='bi bi-trash'></i></a>";
						echo "</td>";
						echo "</tr>";
					}
					?>
					</table>

		<p class="text-center font-weight-bold"><h5 style="color: blue;">
			<a name="INF351">MATERIA INF - 351</a></h5></p>		
					<?php
						$usu = $_SESSION['usuario'];
						include "bd/conexion.inc.php";
						$sql="select p.NombreCompleto,p.CI AS CI,p.Departamento, i.Sigla,i.nota1,i.nota2,i.nota3, a.Usuario
							from acceso a
							inner join persona p 
								on a.PERSONA_CI = p.CI
							inner join inscripcion i 
									on i.PERSONA_CI = p.CI WHERE i.Sigla = 'INF351' order by p.NombreCompleto";
						
						$resultado=mysqli_query($con, $sql);
					?>
					<table class="table table-striped table-bordered table-hover">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Sigla</th>
								<th scope="col">Estudiante</th>
								<th scope="col">Cedula</th>
								<th scope="col">Nota 1</th>
								<th scope="col">Nota 2</th>
								<th scope="col">Nota 3</th>
								<th scope="col">Nota Final</th>
								<th scope="col">Editar</th>
								<th scope="col">Eliminar</th>
							</tr>
						</thead>
					<?php
					while ($fila=mysqli_fetch_array($resultado))
					{
						$st = ($fila['nota1']+$fila['nota2']+$fila['nota3'])/3;
						$st = number_format($st, 2);
						$sigla = $fila['Sigla'];
						$CI = $fila['CI'];
						echo "<tr>";
						echo "<td>".$fila['Sigla']."</td>";
						echo "<td>".$fila['NombreCompleto']."</td>";
						echo "<td>".$fila['CI']."</td>";
						echo "<td>".$fila['nota1']."</td>";
						echo "<td>".$fila['nota2']."</td>";
						echo "<td>".$fila['nota3']."</td>";
						echo "<td>".$st."</td>";
						echo "<td><a class='btn btn-outline-primary' role='button' 
						href='editar.php?Sigla=".$sigla."&CI=".$CI."'>
						<i class='bi bi-pencil-square'></i></a>";
						echo "</td>";
						echo "<td>";
						echo "<a class='btn btn-outline-danger' role='button' 
						href='eliminar.php?Sigla=".$sigla."&CI=".$CI."'>
						<i class='bi bi-trash'></i></a>";
						echo "</td>";
						echo "</tr>";
					}
					?>
					</table>	

			</div>
		</div>

		<?php include "miestilo-fin.inc.php"; ?>
		
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>