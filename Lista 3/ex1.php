<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>

<!-- 1.Altere o programa da Tabuada feito na lista anterior para que o usuário possa digitaro número 
(de 0 a 10) o qual ele deseja gerar a tabuada na mesma página. -->

<table style="border-collapse: collapse;">
<?php   for($i=1;$i<=10;$i++){   ?>
        <tr></tr>
<?php   for($j=1;$j<=10;$j++){  ?>
        <td style="text-align:center; border: 1px solid black; padding: 20px;">
<?php   echo($i." . ".$j." = ".$i*$j); ?>
        </td>
<?php
        }
    }
?>
</table>

<form method="post">
<h1>Digite um numero de 0 a 10</h1>
<input style="font-size: 3vh;" type="number" min="0" max="10" name="numero" value="0">
<input style="font-size: 2vh;" type="submit">
</form>
<br>

<?php
        if(isset($_POST['numero'])){
                $n = $_POST["numero"];
?>

<table style="border-collapse: collapse;">
<?php   for($i=1;$i<=10;$i++){  ?>
        <td style="text-align:center; border: 1px solid black; padding: 20px;">
<?php   echo($n." . ".$i." = ".$n*$i); ?>
        </td>
<?php
        }
}
?>
</table>

<style>
input:out-of-range{
        background-color: rgba(255,0,0,0.4);
}

input:in-range{
        background-color: rgba(0,255,0,0.4);
}
</style>


</body>
</html>