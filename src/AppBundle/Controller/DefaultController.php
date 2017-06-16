<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Default:index.html.twig');
    }

    public function panierAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\CalculType');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $input = $form->getData();

            $message = $this->get("calculator");
            foreach ($input["nom"] as $key => $produit){
                $table = $message->Calculate($produit["quantité"]*$produit["prix"]);
                $input["produit"][$key]["ht"] = $table[0];
                $input["produit"][$key]["ttc"] = $table[1];
            }
            }

            return $this->render('AppBundle:Default:panier.html.twig', [
                'calcul_form' => $form->createView(),
            ]);
        }
}
