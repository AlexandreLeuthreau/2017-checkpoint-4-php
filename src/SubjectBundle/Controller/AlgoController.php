<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{

    /**
     * Enleve les espaces au début et à la fin de la chaine $chaine.
     *
     * @param string $chaine
     * @return string
     */
    public function trim($string, $chaine)
    {
        // Implémenter une fonction trim (sans utiliser la fonction trim de php, pas le ltrim ni de rtrim...)

        $string = ' Une chaine contenant des espaces avant et après ';
        $inputarray = explode(" ", $chaine);
        $outputarray = array[];
        for($i = 0, $i <= count($inputarray), $i++){
            if($outputarray[i] == " " ){
                break;
            }
            foreach ()

        }


    }
}
