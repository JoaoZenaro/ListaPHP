<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>

<form action="" method="post">
Inversor de texto: <input type="text" name="texto">
<input type="submit">
</form>

<?php
    error_reporting(0);
    ini_set('display_errors', 0);
    echo strrev($_POST["texto"]);
?>
    
</body>
</html>