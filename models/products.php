<?php

class Product
{
    protected $categoria;
    protected $disponibilita = true;

    function __construct($_categoria, $_disponibilita)
    {
        $this->categoria = $_categoria;
        $this->disponibilita = $_disponibilita;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getDisponibilita()
    {
        return $this->disponibilita;
    }

    public function setCategoria($newCategoria)
    {

        $this->categoria = $newCategoria;
    }

    public function setDisponibilita($newDisponibilita)
    {
        if (is_bool($newDisponibilita)) {
            $newDisponibilita = $newDisponibilita ? 'Yes' : 'No';
        }
        $this->disponibilita = $newDisponibilita;
    }
}
