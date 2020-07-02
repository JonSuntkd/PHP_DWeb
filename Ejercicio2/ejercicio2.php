<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perímetros y Áreas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
   
    <!--TRIANGULO-->
    <section class="container"><br>
        <a class="btn btn-danger" href="../MenuPrincipal/index.html">Menú Principal</a>
        <h3 class="text-uppercase text-center">EJERCICIO 2</h3>
        <p class="lead">Crear un programa que permita calcular el perímetro y área de un (triangulo, cuadrado, rectángulo, círculo)</p>
        <a class="btn btn-success" data-toggle="collapse" href="#triangulo" role="button" aria-expanded="false" aria-controls="triangulo">Triángulo</a>
        <form action="resultados.php" method="get" name="formtriangulo" id="triangulo" class="collapse">
            <p><strong>Perímetro de un triángulo</strong></p>
            <div class="form-group row">
                <label for="ladotriangulo" class="col-3 col-form-label">Ingrese el lado del triángulo: </label>
                <input type="text" name="ladotriangulo" id="ladotriangulo" class="form-control col-4">
            </div><br>
            <p><strong>Área de un triángulo</strong></p>
            <div class="form-group row">
                <label for="base" class="col-3 col-form-label">Ingrese la base del triángulo: </label>
                <input type="text" id="base" name="base" class="form-control col-4">
            </div>
            <div class="form-group row">
                <label for="altura" class="col-3 col-form-label">Ingrese la altura del triángulo: </label>
                <input type="text" id="altura" name="altura" class="form-control col-4"><br><br>
            </div>
            <div class="form-group">
                <input type="submit" value="Triángulo" name="figura" class="btn btn-primary">
            </div>
        </form>    
    </section><br><br>

    <!--CUADRADO-->
    <section class="container">
        <a class="btn btn-success" data-toggle="collapse" href="#cuadrado" role="button" aria-expanded="false" aria-controls="cuadrado">Cuadrado</a>
        <form action="resultados.php" method="get" name="formcuadrado" id="cuadrado" class="collapse">
            <p><strong>Perímetro y área de un cuadrado</strong></p>
            <div class="form-group row">
                <label for="ladocuadrado" class="col-3 col-form-label">Ingrese el lado del cuadrado: </label>
                <input type="text" name="ladocuadrado" id="ladocuadrado" class="form-control col-4">
            </div>
            <div class="form-group">
                <input type="submit" value="Cuadrado" name="figura" class="btn btn-primary">
            </div>
        </form>    
    </section><br><br>

    <!--RECTANGULO-->
    <section class="container">
        <a class="btn btn-success" data-toggle="collapse" href="#rectangulo" role="button" aria-expanded="false" aria-controls="rectangulo">Rectángulo</a>
        <form action="resultados.php" method="get" name="formrectangulo" id="rectangulo" class="collapse">
            <p><strong>Perímetro y área de un rectangulo</strong></p>
            <div class="form-group row">
                <label for="largo" class="col-3 col-form-label">Ingrese el largo del rectángulo: </label>
                <input type="text" name="largo" id="largo" class="form-control col-4">
            </div>
            <div class="form-group row">
                <label for="ancho" class="col-3 col-form-label">Ingrese el ancho del rectángulo: </label>
                <input type="text" name="ancho" id="ancho" class="form-control col-4">
            </div>
            <div class="form-group">
                <input type="submit" value="Rectángulo" name="figura" class="btn btn-primary">
            </div>
        </form>    
    </section><br><br>

    <!--CIRCULO-->
    <section class="container">
        <a class="btn btn-success" data-toggle="collapse" href="#circulo" role="button" aria-expanded="false" aria-controls="circulo">Círculo</a>
        <form action="resultados.php" method="get" name="formcirculo" id="circulo" class="collapse">
            <p><strong>Perímetro y área de un círculo</strong></p>
            <div class="form-group row">
                <label for="radio" class="col-3 col-form-label">Ingrese el radio de un círculo: </label>
                <input type="text" name="radio" id="radio" class="form-control col-4">
            </div>
            <div class="form-group">
                <input type="submit" value="Círculo" name="figura" class="btn btn-primary">
            </div>
        </form>    
    </section><br><br>
</body>
</html>