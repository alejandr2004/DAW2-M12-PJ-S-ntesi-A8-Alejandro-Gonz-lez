<?php
class Rectangulo extends FiguraGeometrica {
    public $lado2;

    public function __construct($lado1,$lado2,$tipoFigura) {
        parent::__construct(floatval($lado1), $tipoFigura);  
        $this->lado2 = floatval($lado2);  
    }

    public function calcularArea() {
        return $this->lado1 * $this->lado2; 
    }

    public function calcularPerimetre() {
        return 2 * ($this->lado1 + $this->lado2);  
    }

    public function __toString() {
        return "El área del rectángulo es: " . $this->calcularArea() . "<br>" .
               "El perímetro del rectángulo es: " . $this->calcularPerimetre();
    }
    

    public function __destruct() {
        echo "<div style='text-align: center; color: red; margin-top: 20px;'>El objeto rectángulo ha sido eliminado</div>";
    }
}
?>
