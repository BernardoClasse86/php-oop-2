<?php

include_once __DIR__ . '/products.php';

class CatProduct extends Product
{
    protected $sterilizzato;
    protected $razza;

    function __construct($_Sterilizzato)
    {
        parent::__construct('gatti', true);

        $this->sterilizzato = $_Sterilizzato;
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
        if (is_bool($newSterilizzato)) {
            $newSterilizzato = $newSterilizzato ? 'Yes' : 'No';
        }
        $this->sterilizzato = $newSterilizzato;
    }

    public function setRazza($newRazza)
    {
        $this->razza = $newRazza;
    }
}
