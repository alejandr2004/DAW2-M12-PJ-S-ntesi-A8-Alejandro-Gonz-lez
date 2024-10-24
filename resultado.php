<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Resultado</title>
</head>
<body>
    <div class="container">
        <h1>Resultado de los cálculos</h1>
        <div class="result">
            <?php
            session_start();
            require_once 'FiguraGeometrica.php';
            require_once 'Rectangulo.php';
            require_once 'Triangulo.php';
            require_once 'Circulo.php';
            require_once 'Cuadrado.php';

            if (isset($_SESSION["figura"])) {
                if ($_SESSION["figura"] == "triangulo") {
                    $lado1 = $_POST["lado1"];
                    $lado2 = $_POST["lado2"];
                    $lado3 = $_POST["lado3"];
                    $triangulo = new Triangulo($lado1, $lado2, $lado3, $_SESSION["figura"],);
                    echo "<p>Área del triángulo: " . $triangulo->calcularArea() . "</p>";
                    echo "<p>Perímetro del triángulo: " . $triangulo->calcularPerimetre() . "</p>";
                    unset($triangulo); // Destruyo ell objeto con "unset" (esto asegura su eliminación)
                } elseif ($_SESSION["figura"] == "cuadrado") {
                    $lado1 = $_POST["lado1"];
                    $cuadrado = new Cuadrado($lado1, $_SESSION["figura"]);
                    echo "<p>Área del cuadrado: " . $cuadrado->calcularArea() . "</p>";
                    echo "<p>Perímetro del cuadrado: " . $cuadrado->calcularPerimetre() . "</p>";
                    unset($cuadrado); 
                } elseif ($_SESSION["figura"] == "circulo") {
                    $lado1 = $_POST["lado1"];
                    $circulo = new Circulo($lado1, $_SESSION["figura"]);
                    echo "<p>Área del círculo: " . $circulo->calcularArea() . "</p>";
                    echo "<p>Perímetro del círculo: " . $circulo->calcularPerimetre() . "</p>";
                    unset($circulo); 
                } elseif ($_SESSION["figura"] == "rectangulo") {
                    $lado1 = $_POST["lado1"];
                    $lado2 = $_POST["lado2"];
                    $rectangulo = new Rectangulo($lado1,$lado2,$_SESSION["figura"]);
                    echo "<p>Área del rectángulo: " . $rectangulo->calcularArea() . "</p>";
                    echo "<p>Perímetro del rectángulo: " . $rectangulo->calcularPerimetre() . "</p>";
                    unset($rectangulo); 
                }
            } else {
                header("location:index.php");
            }

            session_destroy();
            ?>
        </div>
    </div>
</body>
</html>
