<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION["figura"])){
        
        // Para el triángulo
        if($_SESSION["figura"] == "triangulo"){
            $base = $_POST["base"];
            $altura = $_POST["altura"];
            
            if($base <= 0 || $altura <= 0){
                echo "La base y la altura deben ser mayores a 0.";
            } else {
                header("location:resultado.php");
            }
        }
        
        // Para el cuadrado
        else if($_SESSION["figura"] == "cuadrado"){
            $lado = $_POST["lado"];
            
            if($lado <= 0){
                echo "El lado debe ser mayor a 0.";
            } else {
                header("location:resultado.php");
            }
        }
        
        // Para el círculo
        else if($_SESSION["figura"] == "circulo"){
            $radio = $_POST["radio"];
            
            if($radio <= 0){
                echo "El radio debe ser mayor a 0.";
            } else {
                header("location:resultado.php");
            }
        }
        
        // Para el rectángulo
        else if($_SESSION["figura"] == "rectangulo"){
            $base = $_POST["base"];
            $altura = $_POST["altura"];
            
            if($base <= 0 || $altura <= 0){
                echo "La base y la altura deben ser mayores a 0.";
            } else {
                header("location:resultado.php");
            }
        }
        
    } else {
        echo "No se ha seleccionado una figura.";
    }
?>