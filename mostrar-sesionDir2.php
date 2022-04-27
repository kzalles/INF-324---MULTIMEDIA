<?php include "menuDir.php" ?>
<!-- PROMEDIOS ESTUDIANTES -->
		<!-- CONTENIDO -->
		<div class="row" style="width: 100%;margin: 0;padding: 5%;">
			<div class="col-md-8 offset-md-2" style="padding: 4%;border: solid 1px #aaa;">
				<p class="text-center font-weight-bold"><h3>NOTAS ESTUDIANTES POR CIUDAD</h3></p>	
					<?php
						$usu = $_SESSION['usuario'];
						include "bd/conexion.inc.php";
						$sql="select 
						avg (case when p.Departamento='01' then Promedio_x_alumno1(i.PERSONA_CI) end )CH,
						avg (case when p.Departamento='02' then Promedio_x_alumno1(i.PERSONA_CI) end )LP,
						avg (case when p.Departamento='03' then Promedio_x_alumno1(i.PERSONA_CI) end )CB,
						avg (case when p.Departamento='04' then Promedio_x_alumno1(i.PERSONA_CI) end )RU,
						avg (case when p.Departamento='05' then Promedio_x_alumno1(i.PERSONA_CI) end )PT,
						avg (case when p.Departamento='06' then Promedio_x_alumno1(i.PERSONA_CI) end )TA,
						avg (case when p.Departamento='07' then Promedio_x_alumno1(i.PERSONA_CI) end )SC,
						avg (case when p.Departamento='08' then Promedio_x_alumno1(i.PERSONA_CI) end )BN,
						avg (case when p.Departamento='09' then Promedio_x_alumno1(i.PERSONA_CI) end )PN
						from inscripcion i inner join persona p on p.CI = i.PERSONA_CI";
						
						$resultado=mysqli_query($con, $sql);
					?>
					<table class="table table-striped table-bordered table-hover">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Chuquisaca</th>
								<th scope="col">La Paz</th>
								<th scope="col">Cochabamba</th>
								<th scope="col">Oruro</th>
								<th scope="col">Potosí</th>
								<th scope="col">Tarija</th>
								<th scope="col">Santa Cruz</th>
								<th scope="col">Beni</th>
								<th scope="col">Pando</th>
							</tr>
						</thead>
					<?php
					while ($fila=mysqli_fetch_array($resultado))
					{
						echo "<tr>";
						echo "<td>".number_format($fila['CH'],2)."</td>";
						echo "<td>".number_format($fila['LP'],2)."</td>";
						echo "<td>".number_format($fila['CB'],2)."</td>";
						echo "<td>".number_format($fila['RU'],2)."</td>";
						echo "<td>".number_format($fila['PT'],2)."</td>";
						echo "<td>".number_format($fila['TA'],2)."</td>";
						echo "<td>".number_format($fila['SC'],2)."</td>";
						echo "<td>".number_format($fila['BN'],2)."</td>";
						echo "<td>".number_format($fila['PN'],2)."</td>";
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