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
use Symfony\Component\HttpFoundation\Response;

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
     * @Route("/service", name="calctva")
     */
    public function calcAction (Request $request)
    {
        $form = $this->createForm(CalcType::class);

        $form->handleRequest($request);

        $xTVA=null;
        $taxTotal=null;

        if ($form->isSubmitted() && $form->isValid())
        {
            $dataQuantity = $form->get('Quantity')->getData();
            $dataPrice = $form->get('Price')->getData();

            $calc = $this->get('calc');
            $xTVA = $calc->doCalc($dataQuantity,$dataPrice);

            $calcTVA = $this->get('calctva');
            $taxTotal = $calcTVA->doCalcTVA($dataQuantity,$dataPrice);

        }

        return $this->render('calc.html.twig', array(
            'form' => $form->createView(),
            'xTVA' => $xTVA,
            'taxTotal' => $taxTotal,
        ));
    }
}
