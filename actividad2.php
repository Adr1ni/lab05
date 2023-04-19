<?php

$num1 = $_POST['valor1'];
$num2 = $_POST['valor2'];

$prodcuto = $num1 * $num2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura de formulario</title>
</head>
<body>
    <form action="" method="post">
        Ingresar valor 1:<br> <input type="text" name="valor1"><br>
        Ingresar valor 2:<br> <input type="text" name="valor2"><br>
        Resultado:<br>
        <input type="submit" name="producto" value="Calcular">
        <input type="reset" name="cancelar" value="cancelar">

        <p>El resultado del producto es: <?=$prodcuto; ?></p>

    </form>
</body>
</html>