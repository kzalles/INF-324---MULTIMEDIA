<?php include "index2.php" ?>
<!-- ESTUDIANTES -->
		<!-- CONTENIDO -->
		<div class="row" style="width: 100%;margin: 0;padding: 5%;">
			<div class="col-md-6 offset-md-3" style="padding: 4%;border: solid 1px #aaa;">
				<p class="text-center font-weight-bold"><h3>NOTAS ESTUDIANTE</h3></p>
				<?php
					$usu = $_SESSION['usuario'];
					include "bd/conexion.inc.php";
					
					$sql="select distinct p.NombreCompleto,a.PERSONA_CI,DEPTO(p.CI) AS Departamento
						from acceso a
						inner join persona p 
							on a.PERSONA_CI = p.CI
						inner join inscripcion i 
								on i.PERSONA_CI = p.CI
						where a.Usuario = '$usu'";
					
					$resultado=mysqli_query($con, $sql);
				?>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Nombre</th>
								<th scope="col">CI</th>
								<th scope="col">Departamento</th>
							</tr>
						</thead>
					<?php
					while ($fila=mysqli_fetch_array($resultado))
					{
						echo "<tr>";
						echo "<td style='background-color:#DAF7A6;'><b>".$fila['NombreCompleto']."</b></td>";
						echo "<td>".$fila['PERSONA_CI']."</td>";
						echo "<td>".$fila['Departamento']."</td>";
						echo "<td>";
					}
					?>
					<?php
						include "bd/conexion.inc.php";
						$sql="select i.Sigla,i.nota1,i.nota2,i.nota3
							from acceso a
							inner join persona p 
								on a.PERSONA_CI = p.CI
							inner join inscripcion i 
									on i.PERSONA_CI = p.CI
							where a.Usuario = '$usu'";
						
						$resultado=mysqli_query($con, $sql);
					?>
					</table>
					<table class="table table-striped table-bordered table-hover">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Sigla</th>
								<th scope="col">Nota 1</th>
								<th scope="col">Nota 2</th>
								<th scope="col">Nota 3</th>
								<th scope="col">Nota Final</th>
							</tr>
						</thead>
					<?php
					while ($fila=mysqli_fetch_array($resultado))
					{
						$st = ($fila['nota1']+$fila['nota2']+$fila['nota3'])/3;
						$st = number_format($st, 2);
						echo "<tr>";
						echo "<td>".$fila['Sigla']."</td>";
						echo "<td>".$fila['nota1']."</td>";
						echo "<td>".$fila['nota2']."</td>";
						echo "<td>".$fila['nota3']."</td>";
						echo "<td>".$st."</td>";
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