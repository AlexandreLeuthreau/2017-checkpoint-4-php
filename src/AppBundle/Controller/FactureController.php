<?php

namespace AppBundle\Controller;

use AppBundle\Form\FactureType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class FactureController extends Controller
{

    /**
     * @Route("/form", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(FactureType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $quantite = $form->get('quantite')->getData();
            $prix = $form->get('price')->getData();

            $prixHT = $this->get('calculator');
            $prixHT->totalHT($quantite, $prix);

            $prixTTC = $this->get('calculator');
            $prixTTC->totalTTC($quantite, $prix);

            return $this->redirectToRoute('homepage', array(
                'prixht' => $prixHT,
                'prixttc' => $prixTTC
            ));
        }

        return $this->render(':default:form.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
