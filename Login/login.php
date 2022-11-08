<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Links css, bootstrap, librerias-->
	<link rel="stylesheet" href="css/estilos.css">


	<!-- ---------------------------------------------------------------------------------------------------->
    <title>Acceso PELUQUERIA</title>
</head>

	<body>
		<div class="container-login">
			<div class="wrap-login">
				<form class="login-form validate-form" id="formLogin" action="validar.php" method="post">
					<span class="login-form-title">LOGIN</span>

					<div class="grupo">
						<div class="wrap-input100" data-validate = "Usuario incorrecto">
							<input type="text" name="Username" id="Username" required >
								<label for="">Usuario</label>
								<span class="focus-efecto"></span>
						</div>
                    </div>
					<!-- -->
					<div class="grupo">
						<div class="wrap-input100" data-validate = "Password incorrecto">
							<input type="password" name="Contraseña" id="Contraseña" required >
								<label for="">Password</label>
								<span class="focus-efecto"></span>
						</div>
                    </div>
					
					<div class="container-login-form-btn">
						<div class="wrap-login-form-btn">
							<div class="login-form-bgbtn"></div>
							<button type="submit" name="submit" class="login-form-btn">ACCEDER</button>
						</div>
					</div>
				</form>
			</div>
		</div>			
	</body>
</html>