<?php

namespace AppBundle\Service;

class FormatPrice extends \Twig_Extension
{
    public function getFilters()
    {
        return [ new \Twig_SimpleFilter('price_format',
            array($this, 'formatPriceTotal'))];
    }
    public function formatPriceTotal($amount)
    {
        $formattedAmount =  number_format($amount, 2, ",", " ") .' €';
        return $formattedAmount;
    }
}