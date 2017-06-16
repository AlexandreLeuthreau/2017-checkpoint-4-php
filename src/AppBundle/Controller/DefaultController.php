<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\CreatePanierType;

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

    public function createPanierAction(Request $request, $prix , $quantite, $tva)
    {
        $form = $this->createForm(CreatePanierType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $tableau = array();
            foreach ($data["objet"] as $index => $panier){
                $data->Calculator->doCalculs($prix,$quantite, $tva);
                $tableau["objet"][$index]["Hors taxe"] = $tableau[0];
                $tableau["objet"][$index]["Toutes Taxes"] = $tableau[1];
            }
            return $this->redirectToRoute('show_panier');
        }
        return $this->render('default/index.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function showPanierAction()
    {
        return $this->render('@App/Panier/show_panier.html.twig');
    }
}
