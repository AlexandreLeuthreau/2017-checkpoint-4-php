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
        $lg=strlen($chaine);
        $ls=0;
        $sortie= array();
        $j=0;
        $flg=0;
        echo "d lg=".$lg."\n"."<".$chaine.">\n";
        for($i=0;$i<$lg;$i++){
                //echo "i=".$i."\n";

                if ($flg) {
                    $sortie[$j]=$chaine[$i];
                    $j++;
                } else {
                    if ($chaine[$i]!==" ") {
                        $sortie[$j]=$chaine[$i];
                        $j++;
                        $flg=1;
                    }
                }
            }

        $ls=count($sortie);
        echo "ls=".$ls."\n";
//echo "xxxx".$sortie[1];
        $i=$ls;
        $flg=0;
        while($flg==0){
            echo "ici=".$i."\n";

            echo "  valeur=<".$sortie[$i].">\n";
            /*
            if ($sortie[$i]!=" "){
                echo "ici";
                $flg=1;
            }
            */
            $i--;
            if ($i<2)
                $flg=1;
            
            //unset($sortie[$i]);
        }


        echo "<".implode("",$sortie).">\n";
    }
}
