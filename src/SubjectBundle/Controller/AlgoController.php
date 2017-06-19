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

        $trimString='';
        $i = 0;
        $g = strlen($chaine) - 1;

        while ($chaine[$i] == " ")
        {
            $i++;
        }

        while ($chaine[$g]  == " ")
        {
            $g--;
        }

        for ($a=$i; $a<=$g; $a++)
        {
            $trimString .= $chaine[$a];
        }

        return $trimString;
    }
}
