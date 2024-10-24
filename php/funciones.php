<?php
function imprimirFigura($figura) {
    switch ($figura) {
        case 'triangulo':
            return "../img/triangulo2.png";
            break;
        case 'cuadrado':
            return "../img/cuadrado2.png";
            break;
        case 'rectangulo':
            return "../img/rectangulo2.png";
            break;
        case 'circulo':
            return "../img/circulo2.png";
            break;
    }
}

?>