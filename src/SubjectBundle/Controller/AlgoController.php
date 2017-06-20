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
    public function trim(string $chaine)
    {
        // Implémenter une fonction trim (sans utiliser la fonction trim de php, pas le ltrim ni de rtrim...)

        $phrase = "";
        $deb=0;
        $fin=strlen($chaine)-1;

        while($chaine[$deb]== " "){
            $deb++;
        }
        while($chaine[$fin] == " "){
            $fin--;
        }
        for($i=$deb;$i <=$fin;$i++){
        $phrase .= $chaine[$i];
        }
        return $phrase;
    }
}
