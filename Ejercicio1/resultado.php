<?php

if(!$_POST){

	header('Location:ejercicio1.php');	
}

$tabla = $_POST ['tabla'];
$nMaximo = 20;
$multiplicador = 1;
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
	
					<h4 align="center" style="color:#FAF7F7">En numero que ingreso es <?= $tabla ?> y su tabla es:</h4>
					<br></br>
					<?php
						while($multiplicador <= $nMaximo)
						{
							echo   "<p style=color:#FFFFFF;text-align:center;>{$tabla} * {$multiplicador} = " . $tabla * $multiplicador . "</p>";
							
							$multiplicador++;

						}
					?>
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


	
</body>

</html>