<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
<label>Numero de 1 a 12: </label>
<input type="number" name="n"><br>
<input type="submit" name="submit" value="Enviar">
</form>

<?php
if(isset($_POST["submit"])){
    $n = $_POST["n"];
    if($n<1||$n>12){
        echo "<span style='color: red;'>O mês ".$n." não existe</span>";
    } else{
        switch ($n){
            case 1: echo "Janeiro";
            break;
            case 2: echo "Fevereiro";
            break;
            case 3: echo "Março";
            break;
            case 4: echo "Abril";
            break;
            case 5: echo "Maio";
            break;
            case 6: echo "Junho";
            break;
            case 7: echo "Julho";
            break;
            case 8: echo "Agosto";
            break;
            case 9: echo "Setembro";
            break;
            case 10: echo "Outubro";
            break;
            case 11: echo "Novembro";
            break;
            case 12: echo "Dezembro";
            break;
        }
    }
}
?>
</body>
</html>
<!-- Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o
número seja fora desse intervalo, informar que não existe mês com este
número. -->