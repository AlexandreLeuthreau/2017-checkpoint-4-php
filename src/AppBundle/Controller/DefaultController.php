<?php

namespace AppBundle\Controller;

use AppBundle\Form\CalcType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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

    public function calcAction (Request $request)
    {
        $form = $this->createForm(CalcType::class);

        $form->handleRequest($request);
        $total = null;
        if ($form->isSubmitted() && $form->isValid())
        {
            $calc = $this->get('calc');
            $total = $calc->doCalc($form->get('Quantity')->getData(), $form->get('Price')->getData());
/*
            return $this->redirectToRoute('app', ['_fragment' => 'total'], array(
                'total'=> $total,
            ));*/
            var_dump($total);
        }

        return $this->render('calc.html.twig', array(
            'form' => $form->createView(),
            'total' => $total
        ));
    }
}
