<?php

class Category
{

    public $specie;
    public $icona = '';

    function __construct($_specie, $_icona)
    {
        $this->specie = $_specie;
        $this->icona = $_icona;
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
