<?php

namespace AppBundle\Controller;

use AppBundle\Form\PanierType;
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


    public function calculateurPrixAction(Request $request)
    {

        $form = $this->createForm(PanierType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $serviceCalculateurPrix = $this->get('app.serviceCalculateurPrix');
            $prixTTC = $serviceCalculateurPrix->calculateurPrix($data);
            $data->setData($prixTTC);

            return $this->redirectToRoute('prix');
        }
        return $this->render('@AppBundle/panier.html.twig', array(
            'form' => $form->createView(),


        ));
    }
}
