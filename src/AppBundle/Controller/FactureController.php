<?php

namespace AppBundle\Controller;

use AppBundle\Form\FactureType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class FactureController extends Controller
{

    /**
     * @Route("/", name="welcome")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(FactureType::class);

        $form->handleRequest($request);

        $prixHT = 0;
        $prixTTC = 0;

        if ($form->isSubmitted() && $form->isValid()){
            for ($i = 0 ; $i < count($form->get('lignesFacture')->getData()) ; $i++){
                $quantite = $form->get('lignesFacture')->getData()[$i]['quantite'];
                $prix = $form->get('lignesFacture')->getData()[$i]['price'];

                $calculator = $this->get('calculator');
                $prixHT += $calculator->totalHT($quantite, $prix);
                $prixTTC += $calculator->totalTTC($quantite, $prix);
            }

        }

        return $this->render(':default:index.html.twig', array(
            'form' => $form->createView(),
            'prixht' => $prixHT,
            'prixttc' => $prixTTC,
        ));
    }
}
