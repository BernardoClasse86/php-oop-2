<?php

trait Peso
{
    public int $peso;

    public function getPesoArticolo()
    {
        if ($this->peso < 10 || $this->peso > 100000) {
            return 'peso articolo non disponibile';
        } else {

            return $this->peso . ' grammi';
        }
    }
}
