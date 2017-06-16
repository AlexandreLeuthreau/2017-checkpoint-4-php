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
        var_dump($chaine);
        // Implémenter une fonction trim (sans utiliser la fonction trim de php, pas le ltrim ni de rtrim...)
        $length = strlen($chaine);
        $i = 0;

        while ($chaine[$i] == ' '){
            $chaine[$i] = '';
            $i++;
        }

        var_dump($chaine);

        $i = $length-1;

        while ($chaine[$i] == ' '){
            $chaine[$i] = '';
            $i--;
        }

        var_dump($chaine);

        return  trim($chaine);
    }
}
