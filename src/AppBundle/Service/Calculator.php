<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 16/06/17
 * Time: 11:55
 */

namespace AppBundle\Service;


class Calculator
{
    private $_tva;

    public function __construct($tva)
    {
        $this->_tva = $tva;
    }

    public function totalHT($quantite, $prix)
    {
        return $quantite*$prix;
    }

    public function totalTTC($quantite, $prix)
    {
        return ($quantite*$prix)*($this->_tva/100) +($quantite*$prix);
    }
}