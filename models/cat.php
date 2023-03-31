<?php

include_once __DIR__ . '/products.php';

class CatProduct extends Product
{
    protected $sterilizzato;
    protected $razza;

    function __construct($_Sterilizzato, $_razza)
    {
        parent::__construct('gatti');

        $this->sterilizzato = $_Sterilizzato;
        $this->razza = $_razza;
    }

    //get 

    public function getSterilizzato()
    {
        return $this->sterilizzato;
    }

    public function getRazza()
    {
        return $this->razza;
    }

    // set 

    public function setSterilizzato($newSterilizzato)
    {
        $this->sterilizzato = $newSterilizzato;
    }

    public function setRazza($newRazza)
    {
        $this->razza = $newRazza;
    }
}
