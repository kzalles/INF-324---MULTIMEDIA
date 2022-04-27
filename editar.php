<?php include "menuDir.php" ?>
<!-- ESTUDIANTES DIRECTOR -->
		<!-- CONTENIDO -->
		<div class="row" style="width: 100%;margin: 0;padding: 5%;">
			<div class="col-md-10 offset-md-1" style="padding: 4%;border: solid 1px #aaa;">
				<p class="text-center font-weight-bold"><h3>NOTAS ESTUDIANTES</h3></p> <hr>
				<!--<p class="text-center font-weight-bold"><h5 style="color: blue;">MATERIA INF - 324</h5></p>-->	
				<div class="table-responsive">		
				<table class="table table-striped table-bordered table-hover">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Sigla</th>
							<th scope="col">Estudiante</th>
							<th scope="col">Cedula</th>
							<th scope="col">Depto</th>
							<th scope="col">Nota 1</th>
							<th scope="col">Nota 2</th>
							<th scope="col">Nota 3</th>
							<th scope="col">Nota Final</th>
							<th scope="col" colspan="2"></th>
						</tr>
					</thead>
				<?php
					$usu = $_SESSION['usuario'];
					$sigla = $_GET['Sigla'];
					$ci = $_GET['CI'];
					include "bd/conexion.inc.php";
					$sql="select p.NombreCompleto,a.PERSONA_CI AS CI,DEPTO(a.PERSONA_CI) as departamento, i.Sigla,i.nota1,i.nota2,i.nota3
						from acceso a
						inner join persona p 
							on a.PERSONA_CI = p.CI
						inner join inscripcion i 
								on i.PERSONA_CI = p.CI
						where i.Sigla like '$sigla' and a.PERSONA_CI like '$ci'";
					
					$resultado=mysqli_query($con, $sql);
				while ($fila=mysqli_fetch_array($resultado))
				{
					echo '<tr>';
					$pci = $fila['CI'];
					$promedio = ($fila['nota1'] + $fila['nota2'] + $fila['nota3'])/3;
					$promedio = number_format($promedio, 2);
					echo '<form method = "GET" action = modifica.php>
					<tr>
					<td><input type="text" class="form-control" name="Sigla" id="Sigla" 
						value="'.$fila['Sigla'].'" style="width:80px"></td>
					<td><input type="text" class="form-control" name="NombreCompleto" id="NombreCompleto" value="'.$fila['NombreCompleto'].'" style="width:180px"></td>
					<td><input type="text" class="form-control" name="CI" id="CI" 
						value="'.$fila['CI'].'" style="width:100px"></td>
					
					<td><input type="text" class="form-control" name="departamento" id="departamento" 
						value="'.$fila['departamento'].'" style="width:70px"></td>
					
					<td><input type="number" class="form-control" name="nota1" id="nota1" 
						value="'.$fila['nota1'].'" style="width:70px"></td>
					<td><input type="number" class="form-control" name="nota2" id="nota2" 
						value="'.$fila['nota2'].'" style="width:70px"></td> 
					<td><input type="number" class="form-control" name="nota3" id="nota3" 
						value="'.$fila['nota3'].'" style="width:70px"></td>              
					<td>
						<input type="text" class="form-control" name="promedio" value="'.$promedio.'" disabled style="width:80px"></p>
					</td>	
					<td>
		                <input type="submit" name="Modificar" id="Modificar" value="Modificar" class="btn btn-success btn-block">
		            </td>	

		            <td><a class="btn btn-outline-danger" role="button" href="mostrar-sesionDir.php"><i class="bi bi-backspace"></i></td>
					</form>
					</tr>';
				}
				?>
		    	</table> 
		    	</div>	
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