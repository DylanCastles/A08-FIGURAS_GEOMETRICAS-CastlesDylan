<?php
    session_start();
    if (isset($_SESSION['figura'])) {
        session_unset();
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/estilos.css">
    <script src="../js/figuraFoto.js"></script>
    <script src="../js/comprobaciones.js"></script>
    <title>Escoger figura</title>
</head>
<body>
    <div id="contenedor">
        <h1>Figuras:</h1>
        <form action="datosFigura.php" method="post" onsubmit="validarTipoFigura(event)">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="triangulo" value="triangulo" name="figura" onchange="cambiarImagen()">Triangulo
                <label class="form-check-label" for="triangulo"></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="cuadrado" value="cuadrado" name="figura" onchange="cambiarImagen()">Cuadrado
                <label class="form-check-label" for="cuadrado"></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="rectangulo" value="rectangulo" name="figura" onchange="cambiarImagen()">Rectangulo
                <label class="form-check-label" for="rectangulo"></label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="circulo" value="circulo" name="figura" onchange="cambiarImagen()">Circulo
                <label class="form-check-label" for="circulo"></label>
            </div>
            <br>
            <h1>Figura seleccionada:</h1>
            <div id="cuadradoFiguras">
                <img id="imagen" display="none" style="width: 180px; height: 180px;">
            </div>
            <br>
            <div class="contenedorSubmit">
                <input type="submit" name="seleccionar" value="Seleccionar" class="btn btn-primary" style="margin: auto;">
            </div>
            
        </form>
    </div>
</body>
</html>