<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>

<!-- 3.Usando o método POST, crie um formulário que receba o nome do estudante, 3 notas de Zero à Dez e calcule a média quando 
um botão de submit for pressionado! De acordo com a média, informe se o estudante passou por média (7,0) ou se ficou em exame. -->


<form method="post">
<h1>Formulario</h1>
Nome: <input style="font-size: 3vh;" type="text" name="nome"><br>
Nota 1: <input style="font-size: 3vh;" type="number" step="any" min="0" max="10" name="nota1"><br>
Nota 2: <input style="font-size: 3vh;" type="number" step="any" min="0" max="10" name="nota2"><br>
Nota 3: <input style="font-size: 3vh;" type="number" step="any" min="0" max="10" name="nota3"><br><br>
<input style="font-size: 2vh;" type="submit" name="calcular" value="Calcular">
</form>

<?php
    if(isset($_POST['calcular'])){
        $nm = $_POST["nome"];
        $n1 = $_POST["nota1"];
        $n2 = $_POST["nota2"];
        $n3 = $_POST["nota3"];

        $media = ($n1+$n2+$n3)/3;

        if($media >= 7){
            echo $nm." passou com media ".$media;
        } else{
            echo $nm." ficou em exame, com media ".$media;
        }

    }
?>


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