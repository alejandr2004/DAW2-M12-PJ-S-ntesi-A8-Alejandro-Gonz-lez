<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Index</title>
</head>
<body>
    <div class="container">
        <h1>Selecciona una figura geométrica</h1>
        <form action="selecFiguras.php" method="post">
            <label for="figura">Dime el tipo de figura:</label>
            <select name="figura" id="figura">
                <option value="circulo">Círculo</option>
                <option value="cuadrado">Cuadrado</option>
                <option value="triangulo">Triángulo</option>
                <option value="rectangulo">Rectángulo</option>
            </select>
            <input type="submit" value="Calcular">
        </form>
    </div>
</body>
</html>
