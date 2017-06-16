<?php

namespace AppBundle\Service;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class CalculatorService

{
    public function calculatorAction ()
    {
        $formBuilder = $this->createFormBuilder();

        $formBuilder
            ->add('name', TextType::class)
            ->add('quantity', IntegerType::class)
            ->add('price', IntegerType::class);

        $form = $formBuilder->getForm();

        return $this->render('AppBundle::show.html.twig', array(
            'calculator_form' => $form->createView(),
        ));

    }
}