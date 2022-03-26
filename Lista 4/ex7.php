<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
<label>Nome: </label>
<input type="text" name="nome"><br>
<label>CPF: </label>
<input type="text" name="cpf"><br>
<label>Idade: </label>
<input type="number" name="idade"><br>
<label>Sexo: </label>
<input type="text" name="sexo"><br>
<label>Rua: </label>
<input type="text" name="rua"><br>
<label>Nº: </label>
<input type="number" name="n"><br>
<label>Bairro: </label>
<input type="text" name="bairro"><br>
<input type="submit" name="submit" value="Enviar">
</form>

<?php

if(isset($_POST["submit"])){
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];
$rua = $_POST["rua"];
$n = $_POST["n"];
$bairro = $_POST["bairro"];

    if(empty($nome)||empty($cpf)||empty($idade)||empty($sexo)||empty($rua)||empty($n)||empty($bairro)){
        echo "<span style='color: red;'>Invalido.</span>";
    } else if(is_string($nome)&&is_string($cpf)&&is_numeric($idade)&&is_string($sexo)&&is_string($rua)&&is_numeric($n)&&is_string($bairro)){
        echo "Registrado! <br>"."Nome: ".$nome."<br> CPF: ".$cpf."<br> Idade: ".$idade."<br> Sexo: ".
        $sexo."<br> Rua: ".$rua."<br> Numero: ".$n."<br> Bairro: ".$bairro;
    } else{
        echo "<span style='color: red;'>Invalido.</span>";
    }
}

?>
</body>
</html>
<!-- Crie um formulário de cadastro com os campos: nome, cpf, idade, sexo, rua,
número e bairro. Valide se todos os campos estão preenchidos, e da forma
correta (número e texto). Dica: pesquisem sobre as funções empty(),
is_numeric() e is_string(). -->