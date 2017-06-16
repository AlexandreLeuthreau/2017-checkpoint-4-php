<?php

namespace AppBundle\Controller;

use AppBundle\Form\PanierType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(PanierType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $myCalculator = $this->get('myapp.calculator');
            $montants = $myCalculator->calculMontantsTotaux($data['panier']);

            return $this->render('@App/index.html.twig', array(
                'form' => $form->createView(),
                'montants' => $montants,
            ));
        }

        return $this->render('@App/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
