<?php 
$titulo = "Ingresar"
 ?>
<?php require 'views/header.php'; ?>

<body class="d-flex justify-content-center align-items-center bg-login ">
	
	<div class="d-flex justify-content-center align-items-center">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="login" class="contenedor-login">
		
			<h2 class="text-center">NEO-STOCK</h2>
			<div class="form-group">
				<input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Contraseña" required>
			</div>
		
			<div class="form-group d-flex justify-content-center mt-4">
				<button class="btn btn-primary" onclick="login.submit()" style="border-radius:8px;">Ingresar <i class="fa fa-arrow-circle-o-right"></i></button>
			</div>
		
			<?php if(!empty($errores)): ?>
				<div class="white-text alert danger-color animated bounceIn">
					<div class="m-0 text-center">
						<?php echo $errores; ?>
					</div>
				</div>
			<?php endif; ?>
		</form>
	</div>

	<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="assets/js/jquery.3.2.1.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>