<?php

include_once __DIR__ . '/categoria.php';
include_once __DIR__ . '/articolo.php';

class Product
{

    protected $nome = '';
    public $categoria;
    public $articolo;

    function __construct($_nome, Category $specie, Articolo $articolo)
    {
        $this->setNome($_nome);
        $this->categoria = $specie;
        $this->articolo = $articolo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        if ($nome === '') {
            $this->nome = "Nome articolo non disponibile";
        } else {
            $this->nome = $nome;
        }

        return $this->nome;
    }
}
