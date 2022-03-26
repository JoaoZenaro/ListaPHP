<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>

<?php
    $vetor1 = array();
    $vetor2 = array();

    $tamanhoArray = 10;

    for ($i=0; $i<$tamanhoArray; $i++){
        $vetor1[$i] = random_int(0,10);
        $vetor2[$i] = random_int(0,10);
    }

    echo "Vetor 1 : ".implode(" ",$vetor1)."<br>";
    echo "Vetor 2 : ".implode(" ",$vetor2)."<br>";

    $a = array();
    $b = array();

    $a = array_diff($vetor1, $vetor2);
    $b = array_diff($vetor2, $vetor1);


    echo "Valores distintos : ".implode(" ",$a)." ".implode(" ",$b)."<br>";
?>
</body>
</html>