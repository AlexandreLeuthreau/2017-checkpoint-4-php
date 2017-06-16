<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16/06/2017
 * Time: 11:09
 */
namespace AppBundle\Service;

class serviceCalculateurPrix
{
    public function calculateurPrix($prixTTC) {

    $prixHT = 0;
    $prixTTC = $prixHT * 1.2;
    return $prixTTC;

    }


}