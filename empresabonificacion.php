<?php 


$sales = $_POST['sales'];
$childs = $_POST['childs'];

$bonificacion = $childs * 50;
$comision = $sales * 0.075;

$sueldo_bruto = $bonificacion + $comision + 600;
$descuento = $sueldo_bruto * 0.11;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonificaciones</title>
</head>
<body>
    <form action="" method="post">

        <label for="" class="">Hijos:</label>
        <input type="number" value="childs" name="childs">

        <label for="" class="">Ventas del mes:</label>
        <input type="text" value="" name="sales">

        <input type="submit" name="calcular" value="calcular"><br>
        

        <label for="">Comision: <?=$comision ?></label><br>
        <label for="">Bonificacion: <?=$bonificacion ?></label><br>
        <label for="">Sueldo bruto: <?=$sueldo_bruto ?></label><br>
        <label for="">Descuento del 11%: <?=$descuento ?></label>
    

    </form>
</body>
</html>