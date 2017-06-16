<?php

namespace AppBundle\Services;

class Calc
{
    public function doCalc($q, $price){

        return $q * $price;

    }
}