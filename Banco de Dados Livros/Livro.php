<?php 

class Livro{
    private string $nome;
    private string $autor;
    private string $editora;
    private string $isbn;
    
    public function __construct($nome, $autor){
        $this->nome = $nome;
        $this->autor = $autor;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getNome():string{
        return $this->nome;
    }

    public function setAutor(string $autor){
        $this->autor = $autor;
    }

    public function getAutor():string{
        return $this->autor;
    }

    public function setEditora(string $editora){
        $this->editora = $editora;
    }

    public function getEditora():string{
        return $this->editora;
    }

    public function setIsbn(string $isbn){
        $this->isbn = $isbn;
    }

    public function getIsbn():string{
        return $this->isbn;
    }
    
}