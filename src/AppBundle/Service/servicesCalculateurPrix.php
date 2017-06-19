<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16/06/2017
 * Time: 11:09
 */
namespace AppBundle\Service;

class servicesCalculateurPrix
{

    private $_tva;



    public function __construct($tva)
    {
        $this->_tva = $tva;

    }


    public function calculateurPrix($prixHT, $quantite)
    {

    $prixunitaire = $prixHT+($prixHT*$this->_tva);
    $prixTTC = $quantite*$prixunitaire;

    return $prixTTC;
    }


}