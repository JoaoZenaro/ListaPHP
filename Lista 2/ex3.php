<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

<p>Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material
radioativo. Sabendo-se que este perde 25% de sua massa a cada 30 segundos,
criar um algoritmos que imprima o tempo necessário para que a massa desse
material seja menor que 0.10</p>

<form action="" method="post">
Massa: <input type="text" name="texto">
<input type="submit">
</form>

<?php
    $massa = $_POST["texto"];
    
    $tempo = 30;
    while(2>1){
        $massa = $massa*0.25;
        if($massa < 0.10){break;}
        $tempo += 30;
    }

    echo $tempo." segundos"

?>


</body>
</html>