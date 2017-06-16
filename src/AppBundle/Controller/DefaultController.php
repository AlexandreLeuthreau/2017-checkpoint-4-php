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

        $form = $this->createForm(ContactType::class);


        // Les donnees de notre requete sont interpretees.
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            //On recupere les donnees
            $data = $form->getData();
        }

       // return $this->render('default/index.html.twig', [
       //     'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
       // ]);
    }
}



