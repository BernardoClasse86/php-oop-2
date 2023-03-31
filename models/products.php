<?php

class Product
{
    protected $categoria;
    protected $prezzo;
    protected $nome;
    protected $descrizione;
    protected $disponibilita = true;

    function __construct($_categoria)
    {
        $this->categoria = $_categoria;
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

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function getDisponibilita()
    {
        return $this->disponibilita;
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

    public function setCategoria($newCategoria)
    {

        $this->categoria = $newCategoria;
    }

    public function setPrezzo($newPrezzo)
    {

        return $this->prezzo = $newPrezzo . "€";
    }

    public function setDisponibilita($newDisponibilita)
    {
        if (is_bool($newDisponibilita)) {
            $newDisponibilita = $newDisponibilita ? 'Yes' : 'No';
        }
        $this->disponibilita = $newDisponibilita;
    }
}
