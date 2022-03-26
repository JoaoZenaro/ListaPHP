<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>

<!-- 2.Crie uma calculadora simples de dois números, onde o operador é escolhido atravésde uma lista de seleção (html <select>). -->

<form method="post">
<h1>Calculadora</h1>
<input style="font-size: 3vh;" type="number" name="numero1">
<select style="font-size: 3vh;" name="operador">
  <option value="mais" selecter>+</option> 
  <option value="menos">-</option>
  <option value="vezes">*</option>
  <option value="dividir">/</option>
</select>
<input style="font-size: 3vh;" type="number" name="numero2"><br><br>
<input style="font-size: 2vh;" type="submit" name="envio" value="Calcular">
</form>

<?php
    if(isset($_POST['envio'])){
        $n1 = $_POST["numero1"];
        $n2 = $_POST["numero2"];
        $op = $_POST["operador"];

        switch ($op){
            case "mais":
                ?> <p style="font-size: 3vh;">
                <?php
                echo $n1+$n2;
                ?>
                </p> <?php
            break;
            case "menos":
                ?> <p style="font-size: 3vh;">
                <?php
                echo $n1-$n2;
                ?>
                </p> <?php
            break;
            case "vezes":
                ?> <p style="font-size: 3vh;">
                <?php
                echo $n1*$n2;
                ?>
                </p> <?php
            break;
            case "dividir":
                ?> <p style="font-size: 3vh;">
                <?php
                echo $n1/$n2;
                ?>
                </p> <?php
            break;
        }
    }
?>
</body>
</html>