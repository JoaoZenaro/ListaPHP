<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Fazer calculadora IMC em html, lendo os valores e apresentando o resultado
com as faixas de peso. -->

<table cellspacing="0">
<tbody>						
    <tr class="table-calc">
        <td>IMC</td>
        <td>Classificação</td>
        <td style="text-align: center">Obesidade <small>(grau)</small></td>
    </tr>
    
    <tr id="result_calc_0">
        <td>Menor que 18,5</td>
        <td>Magreza</td>
        <td style="text-align: center">0</td>
    </tr>
    
    <tr id="result_calc_1">
        <td>Entre 18,5 e 24,9</td>
        <td>Normal</td>
        <td style="text-align: center">0</td>
    </tr>
    
    <tr id="result_calc_2">
        <td>Entre 25,0 e 29,9</td>
        <td>Sobrepeso</td>
        <td style="text-align: center">I</td>
    </tr>
    
    <tr id="result_calc_3">
        <td>Entre 30,0 e 39,9</td>
        <td>Obesidade</td>
        <td style="text-align: center">II</td>
    </tr>

    <tr id="result_calc_4">
        <td>Maior que 40,0</td>
        <td>Obesidade Grave</td>
        <td style="text-align: center">III</td>
    </tr>
</tbody>
</table>
<br>

<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
<label>Altura: </label>
<input type="number" name="alt" value=""><br>
<label>Peso: </label>
<input type="number" step="any" name="peso" value=""><br>
<input type="submit" value="Calcular">
</form>

<?php
$a = $_POST["alt"];
$p = $_POST["peso"];

$result = ($p/($a*$a))*10000;
echo $result;

if($result < 18.5){
    $bga = "green";
    $bgb = "white";
    $bgc = "white";
    $bgd = "white";
    $bge = "white";
} else if($result >= 18.5 && $result < 25){
    $bga = "white";
    $bgb = "green";
    $bgc = "white";
    $bgd = "white";
    $bge = "white";
} else if($result >= 25 && $result < 30){
    $bga = "white";
    $bgb = "white";
    $bgc = "green";
    $bgd = "white";
    $bge = "white";
} else if($result >= 30 && $result < 40){
    $bga = "white";
    $bgb = "white";
    $bgc = "white";
    $bgd = "green";
    $bge = "white";
} else {
    $bga = "white";
    $bgb = "white";
    $bgc = "white";
    $bgd = "white";
    $bge = "green";
}

?>
<style>
tbody tr td {
    border: 1px solid black;
    padding: 10px;
}

#result_calc_0{
    background-color: <?php echo $bga?>
}
#result_calc_1{
    background-color: <?php echo $bgb?>
}
#result_calc_2{
    background-color: <?php echo $bgc?>
}
#result_calc_3{
    background-color: <?php echo $bgd?>
}
#result_calc_4{
    background-color: <?php echo $bge?>
}

</style>
</body>
</html>