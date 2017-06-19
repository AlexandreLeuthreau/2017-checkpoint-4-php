<?php

namespace AppBundle\Services;


class CalcTVA
{
    private $tva;

    public function __construct($tva)
    {
        $this->tva = $tva;
    }

    public function doCalcTVA($quantity, $price)
    {
        $initial = $quantity * $price;

        return $final = $initial + ($initial * $this->tva);
    }

}