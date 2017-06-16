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
        $totalHt = 0;
        $totalTtc = 0;

        foreach ($panier as $article) {
            $totalHt += $article['quantity']*$article['price'];
        }

        $totalTtc += $totalHt*(1+$this->tva);

        return array(
            'totalHt' => $totalHt,
            'totalTtc' => $totalTtc,
        );
    }
}