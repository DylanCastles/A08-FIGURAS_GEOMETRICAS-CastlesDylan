<?php
include_once "FiguraGeometrica.php";

class Circulo extends FiguraGeometrica {

    public function __construct($tipoFigura, $lado1) {
        parent::__construct($tipoFigura, $lado1);
    }

    public function __destruct() {
        parent::__destruct();
    }

    public function calcularArea() {
        $r = $this->lado1;

        $area = M_PI * ($r ** 2);

        return round($area, 2);
    }

    public function calcularPerimetro() {
        $r = $this->lado1;

        $perimetro = 2 * M_PI * $r;  

        return round($perimetro, 2);
    }

    public function __toString() {
        return "Tipo = $this->tipoFigura, Radio = $this->lado1";
    }
}