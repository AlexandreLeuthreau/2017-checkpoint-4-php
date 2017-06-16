<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\FormType;

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

    public function calculAction(Request $request){

    //form qui fait appel au service ("app.calculateur_tarif") et retourne vue

        $form = $this->createForm(FormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $calculateurTarif = $this->get ('app.calculateur_tarif');
            $calculateurTarif->calcul($data['price']);
            return $this->redirectToRoute('');
        }
        return $this->render('app:base.html.twig', array('my_form'=>$form->createView()));
    }
}
