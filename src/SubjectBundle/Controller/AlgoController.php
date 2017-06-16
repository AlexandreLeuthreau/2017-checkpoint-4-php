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

        $word = str_split($chaine);
        for ($i =0; $i < count($word); $i++ ) {
            if ($word[$i] == ' ') {
                $word[$i] = '';
            }
            else {
                break;
            }
        }
        for($i = count($word)-1; $i >= 0; $i--) {
            if ($word[$i] == " ") {
                $word[$i] = "";
            } else {
                break;
            }
        }
        $result = implode('', $word);
        return $result;
    }

}
