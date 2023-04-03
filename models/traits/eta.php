<?php

trait Eta
{
    public $eta;

    public function getEta()
    {
        if (strtolower($this->eta === 'adulto')) {
        } else {
            $this->eta = "cucciolo";
        }

        return $this->eta;
    }
}
