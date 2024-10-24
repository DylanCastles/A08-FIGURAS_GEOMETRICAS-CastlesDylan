<?php
include_once "FiguraGeometrica.php";

class Rectangulo extends FiguraGeometrica {
    public $lado2;

    public function __construct($tipoFigura, $lado1, $lado2) {
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
    }

    public function __destruct() {
        parent::__destruct();
    }

    public function set_lado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function get_lado2() {
        return $this->lado2;
    }

    public function calcularArea() {
        $a = $this->lado1;
        $b = $this->lado2;

        $area = $a * $b;

        return round($area, 2);
    }

    public function calcularPerimetro() {
        $a = $this->lado1;
        $b = $this->lado2;

        $perimetro = ($a + $b) * 2;

        return round($perimetro, 2);
    }

    public function __toString() {
        return "Tipo = $this->tipoFigura, Lado1 = $this->lado1, Lado2 = $this->lado2";
    }
}