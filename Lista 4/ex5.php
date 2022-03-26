<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
<label>Distancia percorrida (km): </label>
<input type="number" name="dist"><br>
<label>Combustivel (litros): </label>
<input type="number" name="gas"><br>
<input type="submit" value="Calcular">
</form>

<?php
$dist = $_POST["dist"];
$gas = $_POST["gas"];

echo "O consumo medio é ".($dist/$gas)." km/l";

?>
</body>
</html>
<!-- Escreva um algoritmo que receba de entrada a distância total (em km)
percorrida por um automóvel e a quantidade de combustível (em litros)
consumida para percorrê-la, calcule e imprima o consumo médio de
combustível. -->