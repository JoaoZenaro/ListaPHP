<?php

require_once "Livro.php";

$livro1 = new Livro("Homo sapiens","Harari");
$livro1->setEditora("Editora IFC");
$livro1->setIsbn("01234567890");

$sqlTabela = "create table livros (id SERIAL PRIMARY KEY, titulo TEXT, autor TEXT, editora TEXT, isbn TEXT);";
$bd = new PDO("sqlite:bancoBiblioteca.sql");

$sql = "insert into livros(titulo, autor, editora, isbn) values ".
       "('{$livro1->getNome()}','{$livro1->getAutor()}','{$livro1->getEditora()}','{$livro1->getIsbn()}');";

echo $sql.PHP_EOL;
var_dump($bd->exec($sqlTabela));
var_dump($bd->exec($sql));
