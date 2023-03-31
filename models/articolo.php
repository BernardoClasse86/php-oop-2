<?php

class Articolo
{
    public $tipo_articolo;
    public $immagine_articolo = '';
    public $prezzo_articolo;

    function __construct($_tipo_aritcolo, $_immagine_articolo, $_prezzo_articolo)
    {
        $this->tipo_articolo = $_tipo_aritcolo;
        $this->immagine_articolo = $_immagine_articolo;
        $this->prezzo_articolo = $_prezzo_articolo;
    }

    public function getArticolo()
    {
        return $this->tipo_articolo;
    }

    public function getImmagine()
    {
        return $this->immagine_articolo;
    }

    public function getPrezzo()
    {
        return $this->prezzo_articolo;
    }
}
