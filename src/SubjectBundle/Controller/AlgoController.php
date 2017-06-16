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
    public function trim($chaine)
    {
        $arrstr = str_split($chaine);
        for($i = 0; $i < count($arrstr); $i++){
            if ($arrstr[$i] == " "){
                $arrstr[$i] = "";
            }
            else{
                break;
            }
        }
        for($i = count($arrstr)-1; $i >= 0; $i--){
            if ($arrstr[$i] == " "){
                $arrstr[$i] = "";
            }
            else{
                break;
            }
        }
        return implode("", $arrstr);
    }





}
