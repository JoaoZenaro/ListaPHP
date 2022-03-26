<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Criar um vetor com 20 elementos inteiros. Imprimir o maior e o menor, sem
ordenar; imprimir também o percentual de números pares e média dos
elementos do vetor. -->
<?php 
$v = [];

for($i=0;$i<20;$i++){
    $v[$i] = random_int(0,100);
}

$maior = $v[0];
$menor = $v[0];

$pares = 0;

for($i=0;$i<20;$i++){
    if($v[$i] % 2 == 0){
        echo "Numero ".($i+1).": ".$v[$i]." (par)"."<br>";
        $pares++;
    } else {
        echo "Numero ".($i+1).": ".$v[$i]." (impar)"."<br>";
    }

    if($v[$i] > $maior){
        $maior = $v[$i];
    }

    if($v[$i] < $menor){
        $menor = $v[$i];
    }
}

echo "<br> Maior: ".$maior."<br>"."Menor: ".$menor;
echo "<br> Percentual dos pares: ".(($pares*100)/20)."%";

$soma = 0;
for($i=0;$i<20;$i++){
    $soma += $v[$i];
}

$med = $soma/20;

echo "<br> Media dos valores: ".$med;

?>
</body>
</html>
