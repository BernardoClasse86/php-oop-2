<?php

include_once __DIR__ . '/products.php';

class DogProduct extends Product
{
    protected $taglia;
    protected $razza;

    function __construct($_taglia, $_razza)
    {
        parent::__construct('cani');

        $this->taglia = $_taglia;
        $this->razza = $_razza;
    }

    //get 

    public function getTaglia()
    {
        return $this->taglia;
    }

    public function getRazza()
    {
        return $this->razza;
    }

    // set 

    public function setTaglia($newTaglia)
    {
        $this->taglia = $newTaglia;
    }

    public function setRazza($newRazza)
    {
        $this->razza = $newRazza;
    }
}
