<?php

/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 18/06/17
 * Time: 23:46
 */
class CalculatorService
{
    private $retour;
    private $tx=20;


    public function calculator($retour,$qte,$pu,$tx){
        private $totht=$qte*$pu;
        private $totttc=$totht*$tx/100;

        return array("qte"=>$qte,"puht"=>$pu,"tx"=>$tx,"totht"=>$totht,"totttc"=>$totttc);
    }

}