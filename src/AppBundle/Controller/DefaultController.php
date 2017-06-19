<?php

namespace AppBundle\Controller;

use AppBundle\Form\PanierType;
use AppBundle\Service\servicesCalculateurPrix;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/panier", name="homepage")
     */

    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $form = $this->createForm(PanierType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $servicesCalculateurPrix = $this->get('app.servicesCalculateurPrix');
            $prixTTC = $servicesCalculateurPrix->calculateurPrix($data['prixHT'], $data['quantite']);
            
            return $this->redirectToRoute('prix',
                array('prixTTC' => $prixTTC,
                        'nom' => $data['nom'],
                        'quantite' => $data['quantite'],
                        'prixHT' => $data['prixHT']
                    ));
        }
        return $this->render(':default:panier.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/prix/{nom}/{quantite}/{prixHT}/{prixTTC}", name="prix")
     */


    public function showAction($nom, $quantite, $prixHT, $prixTTC)
    {
        return $this->render(':default:prix.html.twig', array(
            'nom'=> $nom,
            'quantite' => $quantite,
            'prixHT' => $prixHT,
            'prixTTC' => $prixTTC,

        ));
    }
}
