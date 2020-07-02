<?php
    $figura = $_GET["figura"];
    $perimetro = 0;
    $area = 1;
    switch ($figura) 
    {
        case 'Triángulo':
            echo"triangulo!!";
            $ladotriangulo = $_GET["ladotriangulo"];
            $base = $_GET["base"];
            $altura = $_GET["altura"];
            $perimetro = $perimetro + 3*$ladotriangulo;
            $area = ($base*$altura)/2;
        break;
          
        case 'Cuadrado':
            echo"cuadrado!!";
            $ladocuadrado = $_GET["ladocuadrado"];
            $perimetro = $perimetro + 4*$ladocuadrado;
            $area = pow($ladocuadrado,2);
        break;

        case 'Rectángulo':
            echo"rectángulo!!";
            $largo = $_GET["largo"];
            $ancho = $_GET["ancho"];
            $perimetro = $perimetro + 2*$largo + 2*$ancho;
            $area = $largo * $ancho;
        break;

        case 'Círculo':
            echo"circle!!";
            $radio = $_GET["radio"];
            $perimetro = 2*pi()*$radio;
            $area = pi()*pow($radio,2);
        break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perímetros y Áreas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <section class="container">
        <h2 class="text-uppercase">Resultados</h2><br>
        <div class="form-group">
            <h3>El perímetro de el <?=$figura?> es = <?=$perimetro?></h3><br><br>
            <h3>El área de el <?=$figura?> es = <?=$area?></h3>
        </div>
    </section>
</body>
</html>