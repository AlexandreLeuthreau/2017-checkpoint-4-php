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
        //l'objectif est de transformer la chaine en tableau dans lequel chaque [] est séparé par ' '. Mon but c'est que
        // chaque espace soit dans son propre $words.
        $words = explode(' ', $chaine);
        // On regarde pour chaque $words si il est composé d'un ' ' ou non
        foreach ($words as $case) {

            //on supprime le word s'il contient un espace
            if ($case = ' ') {

                unset($case);
            }
            //Il y a des caractères donc on ne change rien
            else {

                $case= $case;
                return $case;

            }

            return $words;
        }
        //on transforme le nouveau tableau en chaîne dont les words sont séparés par un espace
        $result = implode(' ', $words);

        echo $result;

        //cela s'arrête au premier caractère dans le if. J'ai remplacé le '' par 'c' (avant le unset je fais $case='';) et j'ai vu que cela retournait uniquement 'c'. Pas plusieurs.

    }
}