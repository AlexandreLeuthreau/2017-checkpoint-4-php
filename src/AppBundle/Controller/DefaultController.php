<?php

namespace AppBundle\Controller;

use AppBundle\Form\ProduitType;
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

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);

    }

    /**
     * @Route("/produit", name="produit")
     */
    public function produitAction(Request $request)
    {
        $form = $this->createForm(ProduitType::class);


        // Les donnees de notre requete sont interpretees.
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            //si les donnes sont bonne on vas les traiter
            $data = $form->getData();


        }

        //dans tous les cas en envoi sur
        return $this->render(':default:produit.html.twig', array(
            'form' => $form->createView()
        ));
    }
}



