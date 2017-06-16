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
        $letters = str_split($chaine);
        for ($i =0; $i < sizeof($letters); $i++ ) {
            if ($letters[$i] == ' ') {
                $letters[$i] = '';
            }
            else {
                break;
            }
        }
        for ($j = sizeof($letters)-1; $j >= 0; $j-- ) {
            if ($letters[$j] == ' ') {
                $letters[$j] = '';
            }
            else {
                break;
            }
        }
        var_dump($letters);
        $end = implode('', $letters);
        return $end;
    }
}
