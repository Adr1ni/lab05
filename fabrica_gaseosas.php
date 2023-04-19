<?php

$price = $_POST['price'];
$count = $_POST['count'];

$new_price = $price * 0.05; //0.375

$compra = $new_price * $count;//37.5

$descuento = $compra * 0.07;//2.625

$total = $compra - $descuento;//34.875

$caramelito = $count * 2;//200

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <label for="" class="">Precio:</label>
        <input type="text" value="" name="price">

        <label for="" class="">Cantidad de gasesosas a Comprar:</label>
        <input type="number" value="" name="count">

        <input type="submit" name="calcular" value="calcular"><br>


        <label for="">Nuevo precio: <?=$new_price ?></label><br>
        <label for="">Importe de la compra: <?=$compra ?></label><br>
        <label for="">Importe del descuento: <?=$descuento ?></label><br>
        <label for="">Importe a pagar: <?=$total ?></label>
        <label for="">Cantidad de caramelitos: <?=$caramelito ?></label>

    </form>
</body>
</html>