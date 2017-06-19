<?php

namespace AppBundle\Services;

class Calc
{

    public function doCalc($quantity, $price){

        return $quantity * $price;
    }
}