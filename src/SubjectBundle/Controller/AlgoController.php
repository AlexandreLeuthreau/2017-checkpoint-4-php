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
        $ind = 0;
        while ($chaine[$ind] == ' ') {
            $ind++;
        }
        $ind_debut = $ind;

        $ind = strlen($chaine)-1;
        while ($chaine[$ind] == ' ') {
            $ind--;
        }
        $ind_fin = $ind;

        $chaineSansEspace = '';
        for($i=$ind_debut; $i<=$ind_fin; $i++) {
            $chaineSansEspace .= $chaine[$i];
        }

        return $chaineSansEspace;
    }
}
