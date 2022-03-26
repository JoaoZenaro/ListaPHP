<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
<label>Tempo de utilização do aparelho em dias: </label>
<input type="number" name="dias">
<input type="submit" value="Calcular">
</form>

<?php
$ddvida = (5*365);
$ddap = $_POST["dias"];

echo "O aparelho possui ".($ddvida - $ddap)." dias restantes.";

?>
    
</body>
</html>
<!-- Um fabricante de celular estima que a durabilidade da bateria dos seus
aparelhos é de aproximadamente cinco anos. Desenvolva um programa que
receba o tempo de utilização do aparelho em dias e informe qual a vida útil
restante do aparelho em dias. -->