<?php
    require_once('../php/funciones.php');
    session_start();
    if (!isset($_SESSION['figura'])) {
        $_SESSION['figura'] = $_POST['figura'];
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
    <script src="../js/figuraFoto.js"></script>
    <script src="../js/comprobaciones.js"></script>
    <title>Datos figura</title>
</head>
<body>
    <div id="<?php echo "contenedor_" . $_SESSION['figura'] ?>">
        <h1>Figura seleccionada:</h1>
        <div id="cuadradoFiguras">
            <img id="imagen" src="<?php echo (imprimirFigura($_SESSION['figura'])); ?>" style="width: 180px; height: 180px;">
        </div>
        <h1>Datos:</h1>
        <form action="./resultados.php" method="post" onsubmit="validarDatos(event)">
            <div class="datosContenedor">
            <input type="hidden" id="variableSesion" name="variableSesion" value="<?php echo $_SESSION['figura']; ?>">
                <?php
                switch ($_SESSION['figura']) {
                case 'triangulo':
                    echo "
                    <div class='form-group'>
                        <label for='l1'>Primer lado:<span name='l1' style='color: red;'></span></label>
                        <input type='text' class='form-control' id='l1' name='datos[]' onblur='validarDato(this)' onkeyup='validarDato(this)' value='" . (isset($_SESSION['lado1']) ? $_SESSION['lado1'] : '') . "'>
                    </div>
                    <div class='form-group'>
                        <label for='l2'>Segundo lado:<span name='l2' style='color: red;'></label>
                        <input type='text' class='form-control' id='l2' name='datos[]' onblur='validarDato(this)' onkeyup='validarDato(this)' value='" . (isset($_SESSION['lado2']) ? $_SESSION['lado2'] : '') . "'>
                    </div>
                    <div class='form-group'>
                        <label for='l3'>Tercer lado:<span name='l3' style='color: red;'></label>
                        <input type='text' class='form-control' id='l3' name='datos[]' onblur='validarDato(this)' onkeyup='validarDato(this)' value='" . (isset($_SESSION['lado3']) ? $_SESSION['lado3'] : '') . "'>
                    </div>
                    ";
                    break;
                case 'cuadrado':
                    echo "
                    <div class='form-group'>
                        <label for='l1'>Lado:<span name='l1' style='color: red;'></label>
                        <input type='text' class='form-control' id='l1' name='datos[]' onblur='validarDato(this)' onkeyup='validarDato(this)' value='" . (isset($_SESSION['lado1']) ? $_SESSION['lado1'] : '') . "'>
                    </div>
                    ";
                    break;
                case 'rectangulo':
                    echo "
                    <div class='form-group'>
                        <label for='l1'>Primer lado:<span name='l1' style='color: red;'></label>
                        <input type='text' class='form-control' id='l1' name='datos[]' onblur='validarDato(this)' onkeyup='validarDato(this)' value='" . (isset($_SESSION['lado1']) ? $_SESSION['lado1'] : '') . "'>
                    </div>
                    <div class='form-group'>
                        <label for='l2'>Segundo lado:<span name='l2' style='color: red;'></label>
                        <input type='text' class='form-control' id='l2' name='datos[]' onblur='validarDato(this)' onkeyup='validarDato(this)' value='" . (isset($_SESSION['lado2']) ? $_SESSION['lado2'] : '') . "'>
                    </div>
                    ";
                    break;
                case 'circulo':
                    echo "
                    <div class='form-group'>
                        <label for='R'>Radio:<span name='R' style='color: red;'></label>
                        <input type='text' class='form-control' id='R' name='datos[]' onblur='validarDato(this)' onkeyup='validarDato(this)' value='" . (isset($_SESSION['radio']) ? $_SESSION['radio'] : '') . "'>
                    </div>
                    ";
                    break;
                }
                ?>
            </div>
            <div class="contenedorSubmit">
                <button class="btn btn-secondary" type="button" onclick="location.href='./index.php'" style="margin-right: 223px; margin-top: 5px; position: absolute;">⏎</button>
                <input type="submit" name="seleccionar" value="Calcular" class="btn btn-primary" style="margin: auto; margin-top: 5px;">
            </div>
        </form>
    </div>
</body>
</html>