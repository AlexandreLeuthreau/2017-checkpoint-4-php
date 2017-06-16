<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\OrderItemType;

use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{    /**
     * @Route("/calculate", name="calculate")
     */
	public function indexAction(Request $request)
	{

		$form = $this->createForm(OrderItemType::class);

		$orderValues = null;

        // Les donnees de notre requete sont interpretees.
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

            //On recupere les donnees
			$data = $form->getData(); 
			$calculator = $this->get('calculator');
			$orderValues = $calculator->calculate($data['Quantite'], $data['Prix']);

		}

		return $this->render('AppBundle:Calculator:index.html.twig', array(
			'calculator_form' 	=> $form->createView(),
			'order_values'		=> $orderValues
			));
	}

}
