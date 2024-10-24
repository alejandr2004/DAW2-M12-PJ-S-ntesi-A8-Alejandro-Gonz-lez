<?php

class Circulo extends FiguraGeometrica{
    public function __construct($lado1, $tipoFigura) {
        parent::__construct($lado1, $tipoFigura);  
    }

    function calcularArea(){

        return pi() * ($this->lado1 * $this->lado1); //lado1 será el radio del círculo

    }

    function calcularPerimetre(){

        return 2 * pi() * $this->lado1;
    }

    public function __toString() {
        return "El área del círculo es: " . $this->calcularArea() . "<br>" .
               "El perímetro del círculo es: " . $this->calcularPerimetre();
    }
    

    public function __destruct() {
        echo "<div style='text-align: center; color: red; margin-top: 20px;'>El objeto círculo ha sido eliminado</div>";
    }



}

?>