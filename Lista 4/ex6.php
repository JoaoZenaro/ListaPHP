<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$v = [];
$soma = 0;

for($i=0;$i<500;$i++){
    $v[$i] = $i+1;

    if($v[$i] % 2 != 0 && $v[$i] % 3 == 0){
        $soma += $v[$i];
    }
}
echo $soma;

?>
</body>
</html>
<!-- Efetue a soma de todos os números ímpares que são múltiplos de três e que
se encontram entre 1 e 500 -->