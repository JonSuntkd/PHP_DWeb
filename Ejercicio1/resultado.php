<?php
$num = $_POST("num")
$res = $_POST("res")

?>

<!DOCTYPE html>

<html lang="en">

<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../MenuPrincipal/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../MenuPrincipal/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../MenuPrincipal/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../MenuPrincipal/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../MenuPrincipal/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../MenuPrincipal/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../MenuPrincipal/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../MenuPrincipal/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../MenuPrincipal/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../MenuPrincipal/css/util.css">
	<link rel="stylesheet" type="text/css" href="../MenuPrincipal/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../MenuPrincipal/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Ejercicio 1
					</span>



					<div class="container-login100-form-btn">
						<h4 align="center" style="color:rgb(252, 250, 249);">1. Crear un programa en PHP, que pida el numero de una tabla (numero del 1 al 10);
							y cuyo resultado sea la impresión de la tabla de multiplicar hasta el 20.
						</h4>
					</div>
					<br></br>
					
					<div class="group-material">
						<form name = "ejercicio1" method="POST" action="resultado.php">
						<label style="color:rgb(252, 250, 249);">Resultado</label><br></br>
						<input type="text" class="material-control tooltips-general"
							placeholder="Escribe aquí el número" pattern="[0-9]{1,10}"
							required="" maxlength="2" data-toggle="tooltip" data-placement="top"
							title="Solamente 2 digitos" name = "num">
						<span class="highlight"></span>
						<span class="bar"></span>
						
						<?php
print "<p>Comienzo</p>\n";
for ($i = 0; $i < 3; $i++) {
    print "<p>$i</p>\n";
}
print "<p>Final</p>\n";
?>


					</div>

					<br></br>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="ejercicio2">
							<a href="../MenuPrincipal/index.html"><i
									class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp;
								Volver al menu</a>
						</button>
					</div>



				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="../MenuPrincipal/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="../MenuPrincipal/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="../MenuPrincipal/vendor/bootstrap/js/popper.js"></script>
	<script src="../MenuPrincipal/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="../MenuPrincipal/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="../MenuPrincipal/vendor/daterangepicker/moment.min.js"></script>
	<script src="../MenuPrincipal/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="../MenuPrincipal/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="../MenuPrincipal/js/main.js"></script>

</body>

</html>