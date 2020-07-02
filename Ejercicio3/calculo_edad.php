<html>
	<head> 
		<title> Edad Persona </title>
	</head>

	<body>
		<h1>Calculo de la edad de una persona</h1>
		<h4>Los campos con (*) son requeridos</h4>

		<form  method="POST" action=""/>
		<table>
			<tr>
				<td>
					* Fecha de Nacimiento: 
				</td>
				<td>
					<input type="date" name="Fecha_nac" required />
				</td>
			</tr>

			<tr>
				<td>
					* Fecha de Corte:
				</td>
				<td>
					<input type="date" name="Fecha_corte" required />
				</td>
			</tr>

			<tr>
				<td align="center">Edad:</td>
				<td align="center">
					
<?php
error_reporting(E_ALL ^ E_NOTICE);
$FechaValidacion = $_POST['Fecha_corte'];
$FechaNac = $_POST['Fecha_nac'];

$Edad = strtotime ($FechaValidacion) - strtotime ($FechaNac);
$diferencia_anios = intval($Edad/60/60/24/365.25);
echo $diferencia_anios

?>

				</td>
			</tr>
		</table>

		<p>
			<input type="submit" name="button" value="Calcular" />
		</p><br>

		<a class="btn btn-danger" href="../MenuPrincipal/index.html">Menú Principal</a>

			</form>
	</body>
</html>