<?php include "miestilo-inicio.inc.php" ?>

		<!-- CONTENIDO -->
		<div class="row" style="width: 100%;margin: 0;padding: 5%;">
			<div class="col-md-4 offset-md-4" style="padding: 4%;border: solid 1px #aaa;">
				<!-- rform para buscar usuario -->
				<form method="GET" action="rform.php">
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario </label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" id="inputEmail3" name="usuario" required="">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="inputPassword3" class="col-sm-2 col-form-label">Password </label>
				    <div class="col-sm-12">
				      <input type="password" class="form-control" id="inputPassword3" name="pass" required="">
				    </div>
				  </div>
				  <div class="form-group row">
				  	<div class="col-sm-10 offset-md-8">
				  	<!--<input type="submit" value="Aceptar" name="ok"/>-->
				  		<button type="submit" class="btn btn-primary mb-2" value="Aceptar" name="ok">Aceptar</button>
				  	</div>
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