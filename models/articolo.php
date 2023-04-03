<?php
include_once __DIR__ . '/traits/peso.php';

class Articolo
{
    use Peso;

    public $tipo_articolo;
    public $immagine_articolo = '';
    public float $prezzo_articolo;

    function __construct($_tipo_aritcolo, $_immagine_articolo, $_prezzo_articolo, $_peso)
    {
        $this->tipo_articolo = $_tipo_aritcolo;
        $this->immagine_articolo = $_immagine_articolo;
        $this->prezzo_articolo = $_prezzo_articolo;
        $this->peso = $_peso;
    }

    public function getArticolo()
    {
        if (empty($this->tipo_articolo)) {
            throw new Exception('tipo articolo sconosciuto');
        }
        return $this->tipo_articolo;
    }

    public function getImmagine()
    {
        return $this->immagine_articolo;
    }

    public function getPrezzo()
    {
        if ($this->prezzo_articolo <= 0 || $this->prezzo_articolo > 1000) {
            return 'N/D';
        } else {
            return $this->prezzo_articolo . '€';
        }
    }
}
