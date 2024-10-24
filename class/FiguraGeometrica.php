<?php

class FiguraGeometrica {  
    public $tipoFigura;
    public $lado1;

    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    public function __destruct() {
    }

    public function set_tipoFigura($tipo) {
        $this->tipoFigura = $tipo;
    }

    public function set_lado1($lado) {
        $this->lado1 = $lado;
    }

    public function get_tipoFigura() {
        return $this->tipoFigura;
    }

    public function get_lado1() {
        return $this->lado1;
    }

    public function calcularArea() {
        // Este método debe ser sobrescrito en las clases hijas
        echo "Este método debe ser sobreescrito.";
    }
}

?>