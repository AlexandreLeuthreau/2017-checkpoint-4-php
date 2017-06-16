<?php

namespace AppBundle\Service;

class Calculator
{
    public function calculMontantsTotaux($panier)
    {
        $totalHt = $panier['quantity']*$panier['price'];
        $totalTtc = $totalHt*(1+0.20);

        return array(
            'totalHt' => $totalHt,
            'totalTtc' => $totalTtc,
        );
    }
}