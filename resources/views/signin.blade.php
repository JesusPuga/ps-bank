<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inicio de sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 col-md-5" >
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Crear cuenta
					</span>
					<div class="row  justify-content-between">
						<div class="wrap-input100 validate-input col-md-5">
							<input class="input100" type="text" name="name">
							<span class="focus-input100" data-placeholder="Nombre"></span>
						</div>
						<div class="wrap-input100 validate-input col-md-5">
							<input class="input100" type="text" name="lastName">
							<span class="focus-input100" data-placeholder="Apellidos"></span>
						</div>
				  </div>
					<div class="row  justify-content-between">
						<div class="wrap-input100 validate-input col-md-5">
							<input class="input100" type="text" name="address">
							<span class="focus-input100" data-placeholder="Dirección"></span>
						</div>
						<div class="wrap-input100 validate-input col-md-5">
							<input class="input100" type="text" name="phone">
							<span class="focus-input100" data-placeholder="Teléfono"></span>
						</div>
				  </div>
					<div class="row  justify-content-between">
						<div class="wrap-input100 validate-input" data-validate = "Un correo válido es: a@b.c">
							<input class="input100" type="text" name="email">
							<span class="focus-input100" data-placeholder="Correo"></span>
						</div>

					</div>
					<div class="row  justify-content-between">
						<div class="wrap-input100 validate-input col-md-5" data-validate="Ingresa una contraseña">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="pass">
							<span class="focus-input100" data-placeholder="Contraseña"></span>
						</div>
						<div class="wrap-input100 validate-input col-md-5" data-validate="Ingresa una contraseña">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="confirmation">
							<span class="focus-input100" data-placeholder="Confirmar"></span>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
						 <div class="login100-form-bgbtnr"></div>
						 <div class="row justify-content-center">
							<div class="col-md-6">
								<button class="login100-form-btn">
									<a class="24px" href="index.php">Registrarse</a>
								</button>
							</div>
						 </div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
