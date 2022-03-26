<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>

<p>O jogador lança um par de dados, obtendo um valor entre 2 e 12. Se, na
primeira jogada, você tirar 7 ou 11, você um "natural" e ganhou. Se você tirar
2, 3 ou 12 na primeira jogada, isto é chamado de "craps" e você perdeu. Se,
na primeira jogada, você fez um 4, 5, 6, 8, 9 ou 10,este é seu "Ponto". Seu
objetivo agora é continuar jogando os dados até tirar este número
novamente. Você perde, no entanto, se tirar um 7 antes de tirar este Ponto
novamente.</p>

<?php 

  $ponto = null;

  while (2 > 1) {
    $dado = rand(2, 12);
    echo 'Valor do dado: ' . $dado . "<br>";

    if ($ponto !== null) {
      if ($ponto === $dado) {
        echo 'Você GANHOU!' . "<br>";
        break;
      } else if ($dado === 7) {
        echo 'Você PERDEU!' . "<br>";
        break;
      }
    }

    if ($ponto === null) {
      if (($dado === 7) || ($dado === 11)) {
        echo 'Você GANHOU!' . "<br>";
        break;
      } else if (($dado === 2) || ($dado === 3) || ($dado === 12)) {
        echo 'Você PERDEU!' . "<br>";
        break;
      } else {
        $ponto = $dado;
        echo 'Ponto: ' . $ponto . "<br>";
      }
    }
  }

?>

<br>
<br>
<input type="button" style="font-size:2vh;" onclick="window.location.reload();" value="Jogar novamente?">

    
</body>
</html>