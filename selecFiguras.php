<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Selecciona la Figura</title>
</head>
<body>
    <div class="container">
        <h1>Formulario de datos de la figura</h1>
        
        <?php
        session_start();
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $tipoFigura=$_POST["figura"];
            if($tipoFigura=="triangulo"){
                echo "<form action='resultado.php' method='post'>";
                echo "<label for='lado1'>Lado 1:</label>";
                echo "<input type='number' id='lado1' name='lado1'><br>";
                echo "<label for='lado2'>Lado 2:</label>";
                echo "<input type='number' id='lado2' name='lado2'><br>";
                echo "<label for='lado3'>Lado 3:</label>";
                echo "<input type='number' id='lado3' name='lado3'><br>";
                echo "<input type='submit' value='Calcular'>";
                echo "</form>";
            } else if($tipoFigura=="cuadrado"){
                echo "<form action='resultado.php' method='post'>";
                echo "<label for='lado1'>Lado:</label>";
                echo "<input type='number' id='lado1' name='lado1'><br>";
                echo "<input type='submit' value='Calcular'>";
                echo "</form>";
            } else if($tipoFigura=="circulo"){
                echo "<form action='resultado.php' method='post'>";
                echo "<label for='lado1'>Radio:</label>";
                echo "<input type='number' id='lado1' name='lado1'><br>";
                echo "<input type='submit' value='Calcular'>";
                echo "</form>";
            } else if($tipoFigura=="rectangulo"){
                echo "<form action='resultado.php' method='post'>";
                echo "<label for='lado1'>Base:</label>";
                echo "<input type='number' id='lado1' name='lado1'><br>";
                echo "<label for='lado2'>Altura:</label>";
                echo "<input type='number' id='lado2' name='lado2'><br>";
                echo "<input type='submit' value='Calcular'>";
                echo "</form>";
            }
            $_SESSION["figura"] = $tipoFigura;
        }else{
            header("location:index.php");
        }
        ?>
    </div>

    
    <script src="validaciones.js"></script>
</body>
</html>
