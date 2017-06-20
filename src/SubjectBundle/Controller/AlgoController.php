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
        //on définit la chaîne que l'on va comparer
        $result='';
        //coordonnées début de $result
        $debut=0;
        //pareil pour la fin
        $fin=strlen($chaine)-1;

        //on compare chaque lettre avec un espace
        while($chaine[$debut]==' '){
            //on incrémente $debut de 1 à chaque espace rencontré
            $debut++;
        }

        while($chaine[$fin]==' ') {
            //On diminue la valeur de $fin à chaque espace
            $fin--;
        }

        for ($i=$debut;$i<=$fin;$i++){
            $result.=$chaine[$i];
        }
        return $result;
    }
}