<?php
include_once "FiguraGeometrica.php";

class Cuadrado extends FiguraGeometrica {

    public function __construct($tipoFigura, $lado1) {
        parent::__construct($tipoFigura, $lado1);
    }

    public function __destruct() {
        parent::__destruct();
    }

    public function calcularArea() {
        $a = $this->lado1;

        $area = $a ** 2;

        return round($area, 2);
    }

    public function calcularPerimetro() {
        $a = $this->lado1;

        $perimetro = $a * 4;

        return round($perimetro, 2);
    }

    public function __toString() {
        return "Tipo = $this->tipoFigura, Lado = $this->lado1";
    }
}