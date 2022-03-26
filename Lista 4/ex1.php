<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Armazenar 15 números inteiros em um vetor e imprimir uma mensagem
contendo o número e uma das mensagens: par ou ímpar -->
<?php 
$v = [];

for($i=0;$i<15;$i++){
    $v[$i] = random_int(0,100);
}


for($i=0;$i<15;$i++){
    if($v[$i] % 2 == 0){
        echo "Numero ".($i+1).": ".$v[$i]." (par)"."<br>";
    } else {
        echo "Numero ".($i+1).": ".$v[$i]." (impar)"."<br>";
    }
}

?>
</body>
</html>