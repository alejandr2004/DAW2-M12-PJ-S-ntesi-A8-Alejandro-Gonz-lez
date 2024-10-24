<?php

class Cuadrado extends FiguraGeometrica{
    public function __construct($lado1, $tipoFigura) {
        parent::__construct($lado1, $tipoFigura);  
    }

    function calcularArea(){
        return $this->lado1 * $this->lado1;
    }

    function calcularPerimetre(){
        return 4 * $this->lado1;     
    }

    public function __toString() {
        return "El área del cuadrado es: " . $this->calcularArea() . "<br>" .
               "El perímetro del cuadrado es: " . $this->calcularPerimetre();
    }
    

    public function __destruct() {
        echo "<div style='text-align: center; color: red; margin-top: 20px;'>El objeto cuadrado ha sido eliminado</div>";
    }



}

?>
