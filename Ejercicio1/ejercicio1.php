<!DOCTYPE html>
<html lang="en">

<head>
	<title>Ejercicio 1</title>
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
				<form class="login100-form validate-form" action="resultado.php" method="post">
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
						  <label style="color:#FAF7F7">Ingrese numero a calcular</label>		
						  <br></br> 
						  <input type="text" name="tabla" class="material-control tooltips-general"
                                    pattern="[0-9]{1,10}"
                                    required="" maxlength="2" data-toggle="tooltip" data-placement="top"
									title="Solamente 2 digitos">
									<input type="submit" value="Calcular">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                               
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


	
</body>

</html>