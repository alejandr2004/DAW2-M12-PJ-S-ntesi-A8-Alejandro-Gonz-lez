<?php
class Triangulo extends FiguraGeometrica {
    public $lado2;
    public $lado3;

    public function __construct($lado1, $lado2, $lado3, $tipoFigura) {
        parent::__construct(floatval($lado1), $tipoFigura);  
        $this->lado2 = floatval($lado2);  
        $this->lado3 = floatval($lado3);  
    }

    public function calcularArea() {
        return ($this->lado1 * $this->lado2) / 2;
    }

    public function calcularPerimetre() {
        return $this->lado1 + $this->lado2 + $this->lado3;  
    }

    public function __toString() {
        return "El área del triángulo es: " . $this->calcularArea() . "<br>" .
               "El perímetro del triángulo es: " . $this->calcularPerimetre();
    }
    

    public function __destruct() {
        echo "<div style='text-align: center; color: red; margin-top: 20px;'>El objeto triángulo ha sido eliminado</div>";
    }
    
}
?>
