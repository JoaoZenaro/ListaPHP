<?php

$dbh = new PDO("sqlite:bancoBiblioteca.sql");

$sql = "select * from livros;";
$stm =  $dbh->query($sql);

$result = $stm->fetch(PDO::FETCH_ASSOC);

echo "Livro: ".$result["titulo"]." - ".$result["autor"]." - ".$result["editora"]." - ".$result["isbn"];



