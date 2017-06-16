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
        ///////// soit on fait ca :
        // $chaine = preg_replace('/\s/', '', $chaine);
        // return $chaine ;
        ///////// sinon mon truc qui s'arrete jamais ..

        //Stockage chaine de caractère transformé en tableau dans la variable tmp
        $tmp = str_split($chaine);

        //Initialisation deux compteurs identiques
        $compteur=count($tmp);
        $compteur2=$compteur;

        //Tant que l'on ne dépasse pas le tableau de chaines
        while ($compteur>0) {
            //on supprime les espaces dans un premier sens
            for ($index = 0; $index < count($tmp); $index++) {
                //le compteur diminue a chaque nouvel index
                $compteur = $compteur - 1;
                if ($tmp[$index] == " ") {
                    $tmp[$index] = "";
                }

            }
        }

        //idem que au dessus mais dans l'autre sens
        while ($compteur2>0) {
            for ($index = count($tmp) - 1; $index >= 0; $index--) {
                $compteur = $compteur - 1;
                if ($tmp[$index] == " ") {
                    $tmp[$index] = "";
                }
            }
        }

        //renvoi du string
        return implode("", $tmp);
    }
}
