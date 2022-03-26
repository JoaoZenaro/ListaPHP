<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body style="text-align:center;">

<p>Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce
3 centímetros por ano. Construir um algoritmos que calcule e imprima quantos anos
serão necessários para que Juca seja maior que Chico</p>

<?php 
  $ano = 0;
  $chico = 1.50;
  $juca = 1.10;

  while($chico>$juca){
    $ano++;
    $chico += 0.02;
    $juca += 0.03;
    echo "Ano ".$ano." - Chico: ".$chico."m"." | Juca: ".$juca."m"."<br>";
  }

  echo "Força Juca";
  

?>
    
</body>
</html>