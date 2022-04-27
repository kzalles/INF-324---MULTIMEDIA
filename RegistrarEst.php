<?php include "menuDir.php" ?>
<!-- ESTUDIANTES DIRECTOR -->
		<!-- CONTENIDO -->
		<div class="row" style="width: 100%;margin: 0;padding: 5%;">
			<div class="col-md-4 offset-md-4" style="padding: 4%;border: solid 1px #aaa;">
				<p class="text-center font-weight-bold"><h3>REGISTRAR ESTUDIANTE</h3></p> <hr>
				
				<form class="form-horizontal" action="grabareEst.php" method="GET" name="formulario" id="formulario">
	                
	                <div class="form-group">
	                    <label for="usr">Usuario CI:</label>
	                    <select name="ci" class="form-control">
	                        <?php
	                        include "bd/conexion.inc.php";
	                            $consulta="select distinct p.CI
									from acceso a
									inner join persona p 
										on a.PERSONA_CI = p.CI
									inner join inscripcion i 
											on i.PERSONA_CI = p.CI";
	                            $res = mysqli_query($con,$consulta);
	                            while($reg=mysqli_fetch_array($res)){
	                            	
	                        ?>
		                       	<option value="<?php echo $reg['CI'];?>">
		                       		<?php echo $reg['CI'];?>
		                       	</option>
	                      	<?php 
	                      		}
	                       	?>
	                    </select>
	                </div>
	                <div class="form-group">
	                	<label>Materia:</label>
	                    <select name="sigla" class="form-control">
	                   		<option value="INF315">INF 315</option>
	                   		<option value="INF324">INF 324</option>
	                   		<option value="INF351">INF 351</option>
	                    </select>
	                </div>
	                
	                <div class="form-group">
	                	<label>Nota 1:</label>
	                   	<input type="number" class="form-control" name="nota1" value="nota1">
	                </div>
	                <div class="form-group">
	                	<label>Nota 2:</label>
	                   	<input type="number" class="form-control" name="nota2" value="nota2">
	                </div>
	                <div class="form-group">
	                	<label>Nota 3:</label>
	                   	<input type="number" class="form-control" name="nota3" value="nota3">
	                </div>
	                <div class="form-group">  
	                    <button type="submit" class="btn btn-primary" name="registrarEst" id="registrarEst">Registrar</button>
	                </div>
	            </form>
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

