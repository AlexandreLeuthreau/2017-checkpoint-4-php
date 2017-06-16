<?php

namespace AppBundle\Service;

class Calculator
{
    public function Calculate($price)
    {
        $tva = $this->getParameter('tva');
        return array($price, $price + $price * $tva);
    }

}
