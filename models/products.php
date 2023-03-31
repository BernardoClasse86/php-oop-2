<?php

include_once __DIR__ . '/categorie.php';
include_once __DIR__ . '/articolo.php';

class Product
{
    public $nome;
    public $categoria;
    public $articolo;

    function __construct($_nome, Category $specie, Articolo $articolo)
    {
        $this->nome = $_nome;
        $this->categoria = $specie;
        $this->articolo = $articolo;
    }

    public function getNome()
    {
        return $this->nome;
    }
}
