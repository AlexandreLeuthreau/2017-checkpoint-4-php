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
        $a_chaine = str_split($chaine);



        for ($i=count($a_chaine) - 1; ;$i--){
            
            if ($a_chaine[$i] == " "){

                $a_chaine[$i] = "";

            }else break;
        }

        for ($i=0;; ++$i){
            
            if ($a_chaine[$i] == " "){

                $a_chaine[$i] = "";

            }else break;
        }

        $chaine = implode($a_chaine);

        return $chaine;    
    }
}
