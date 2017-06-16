<?php

namespace AppBundle\Service;

class Calculator
{
    private $tva;

    public function __construct($tva)
    {
        $this->tva = $tva/100;
    }

    public function calculMontantsTotaux($panier)
    {
        $totalHt = $panier['quantity']*$panier['price'];
        $totalTtc = $totalHt*(1+$this->tva);

        return array(
            'totalHt' => $totalHt,
            'totalTtc' => $totalTtc,
        );
    }
}