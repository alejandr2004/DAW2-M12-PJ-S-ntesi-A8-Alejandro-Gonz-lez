<?php

class FiguraGeometrica {
    public $lado1;
    public $tipoFigura;
    
    public function __construct($lado1, $tipoFigura) {
        $this->lado1 = $lado1;
        $this->tipoFigura = $tipoFigura;
    }
    
    public function calcularArea() {  //Esta función debe ser implementada en cada clase hija
    }
}


?>

































