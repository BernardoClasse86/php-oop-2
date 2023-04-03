<?php

include_once __DIR__ . '/traits/eta.php';

class Category
{
    use Eta;

    public $specie;
    public $icona = '';

    function __construct($_specie, $_icona, $_eta)
    {
        $this->specie = $_specie;
        $this->icona = $_icona;
        $this->eta = $_eta;
    }

    public function getSpecie()
    {
        return $this->specie;
    }

    public function getIcona()
    {
        return $this->icona;
    }
}
