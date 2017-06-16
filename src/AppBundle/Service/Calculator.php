<?php

namespace AppBundle\Service;

class Calculator
{

    public function doCalculs($prix, $quantite, $tva)
    {
        $total=($prix*$quantite)*$tva;

        return $total;
    }

}