<?php
include_once "FiguraGeometrica.php";

class Triangulo extends FiguraGeometrica {
    public $lado2;
    public $lado3;

    public function __construct($tipoFigura, $lado1, $lado2, $lado3) {
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    public function __destruct() {
        parent::__destruct();
    }

    public function set_lado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function set_lado3($lado3) {
        $this->lado3 = $lado3;
    }

    public function get_lado2() {
        return $this->lado2;
    }

    public function get_lado3() {
        return $this->lado3;
    }

    public function calcularArea() {
        $a = $this->lado1;
        $b = $this->lado2;
        $c = $this->lado3;

        $perimetro = $this->calcularPerimetro();

        $S = $perimetro / 2;

        $area = sqrt($S * ($S - $a) * ($S - $b) * ($S - $c));

        return round($area, 2);
    }

    public function calcularPerimetro() {
        $a = $this->lado1;
        $b = $this->lado2;
        $c = $this->lado3;

        $perimetro = $a + $b + $c;

        return round($perimetro, 2);
    }

    public function __toString() {
        return "Tipo = $this->tipoFigura, Lado1 = $this->lado1, Lado2 = $this->lado2, Lado3 = $this->lado3";
    }
}