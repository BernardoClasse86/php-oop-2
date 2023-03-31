<?php

include_once __DIR__ . '/../dog.php';

class DogToys extends DogProduct
{
    protected $nome;
    protected $descrizione;
    protected $prezzo;

    function __construct($_nome, $_descrizione, $_prezzo)
    {

        parent::__construct('taglia', 'razza');

        $this->nome = $_nome;
        $this->descrizione = $_descrizione;
        $this->prezzo = $_prezzo;
    }

    // get 

    public function getNome()
    {
        return $this->nome;
    }

    public function getDesc()
    {
        return $this->descrizione;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    // set 

    public function setNome($newNome)
    {

        $this->nome = $newNome;
    }

    public function setDesc($newDesc)
    {

        $this->descrizione = $newDesc;
    }

    public function setPrezzo($newPrezzo)
    {

        return $this->prezzo = $newPrezzo . "€";
    }
}
