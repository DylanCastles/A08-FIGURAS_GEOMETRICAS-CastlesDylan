<?php
    $directorio = '../class/';
    foreach (glob($directorio . '*.php') as $archivo) {
        include_once $archivo;
    }
    require_once('../php/funciones.php');
    session_start();

    switch ($_SESSION['figura']) {
        case 'triangulo':
            $_SESSION['lado1'] = (float)$_POST['datos'][0];
            $_SESSION['lado2'] = (float)$_POST['datos'][1];
            $_SESSION['lado3'] = (float)$_POST['datos'][2];
        break;
        case 'cuadrado':
            $_SESSION['lado1'] = (float)$_POST['datos'][0];
        break;
        case 'rectangulo':
            $_SESSION['lado1'] = (float)$_POST['datos'][0];
            $_SESSION['lado2'] = (float)$_POST['datos'][1];
        break;
        case 'circulo':
            $_SESSION['radio'] = (float)$_POST['datos'][0];
        break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Resultados figura</title>
</head>
<body>
    <div id="contenedor_resultados">
        <h1>Figura seleccionada:</h1>
        <div id="cuadradoFiguras">
            <img id="imagen" src="<?php echo (imprimirFigura($_SESSION['figura'])); ?>" style="width: 180px; height: 180px;">
        </div>
        <h1>Datos:</h1>
        <p style = "margin-left: 20px;">
            <?php
                switch ($_SESSION['figura']) {
                    case 'triangulo':
                        $triangulo = new Triangulo("Triángulo", $_SESSION['lado1'], $_SESSION['lado2'], $_SESSION['lado3']);
                        $area = $triangulo->calcularArea();
                        $perimetro = $triangulo->calcularPerimetro();

                        echo "El área del triángulo es: " . $area . "<br>";
                        echo "El perímetro del triángulo es: " . $perimetro . "<br>";
                        echo $triangulo;
                    break;
                    case 'cuadrado':
                        $cuadrado = new Cuadrado("Cuadrado", $_SESSION['lado1']);
                        $area = $cuadrado->calcularArea();
                        $perimetro = $cuadrado->calcularPerimetro();

                        echo "El área del cuadrado es: " . $area . "<br>";
                        echo "El perímetro del cuadrado es: " . $perimetro . "<br>";
                        echo $cuadrado;
                    break;
                    case 'rectangulo':
                        $rectangulo = new Rectangulo("Rectangulo", $_SESSION['lado1'], $_SESSION['lado2']);
                        $area = $rectangulo->calcularArea();
                        $perimetro = $rectangulo->calcularPerimetro();

                        echo "El área del rectangulo es: " . $area . "<br>";
                        echo "El perímetro del rectangulo es: " . $perimetro . "<br>";
                        echo $rectangulo;
                    break;
                    case 'circulo':
                        $circulo = new Circulo("Circulo", $_SESSION['radio']);
                        $area = $circulo->calcularArea();
                        $perimetro = $circulo->calcularPerimetro();

                        echo "El área del circulo es: " . $area . "<br>";
                        echo "El perímetro del circulo es: " . $perimetro . "<br>";
                        echo $circulo;
                    break;
                }
            ?>
        </p>
        <div style="text-align: center;">
            <button class="btn btn-secondary" type="button" onclick="location.href='./datosFigura.php'" style="margin-right: 20px;">⏎ Editar datos</button>
            <button class="btn btn-danger" type="button" onclick="location.href='./index.php'">⊗ Eliminar datos</button>
        </div>
    </div>
</body>
</html>