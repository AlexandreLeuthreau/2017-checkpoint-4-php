<?php

namespace AppBundle\Service;

class Calculator {

    public function getVAT($price, $quantity){

        $vat= 0.20;
        $factor= 1+$vat;
        $VATprice= $price*$factor;
        $total=$price*$quantity;
        $totalVAT=$total*$factor;

    }


}
/**
 * Created by PhpStorm.
 * User: baptiste
 * Date: 17/06/2017
 * Time: 20:18
 */