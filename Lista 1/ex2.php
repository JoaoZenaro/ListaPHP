<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>

<img style="width:30vw;" src="romanos.png" alt="">

<form action="" method="post">
Numero romano: <input type="text" name="numero">
<input type="submit">
</form>

<?php

error_reporting(0);
ini_set('display_errors', 0);

    $numerosRomanos = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    );

    $romano = $_POST["numero"];;
    $resultado = 0;

    foreach ($numerosRomanos as $key => $value) {
        while (strpos($romano, $key) === 0) {
            $resultado += $value;
            $romano = substr($romano, strlen($key));
        }
    }
    echo "<h1>".$resultado."</h1>";

?>
    
</body>
</html>