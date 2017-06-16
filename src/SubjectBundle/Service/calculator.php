<?php


namespace AppBundle\Service\calculator;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service;

class Calculator extends Controller
{
    public function calculator($data)
    {
        $price = [];
        $tva = 0.2;
        $pricettc = $data * $tva;

        return $text;
    }
}