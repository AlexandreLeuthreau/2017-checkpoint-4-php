<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Range;

class DefaultController extends Controller
{
    /**
     * @Route("/panier", name="homepage")
     */
    public function indexAction(Request $request)
    {
         $form = $this->createFormBuilder()
             ->add('name', TextType::class)
             ->add('quantity', IntegerType::class, array(
                'constraints' => new Range(array(
                                   'min'        => 1,
                                   'max'        => 10,))
                ))
             ->add('price', MoneyType::class, array(
                'currency' => 'USD', 
                'constraints' => new Regex(array(
                                    'pattern' => '/[+]?([\d]+|\.[\d]+)+/',))
                ))
             ->add('Valider', SubmitType::class)
             ->getForm();

         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {

            
             //$data = $form->getData();

             $quantity = $request->request->get('quantity');
             $price = $request->request->get('price');
             $taxe = $request->request->get('taxe');

             $priceHT = $this->get('calculator')->CalcPriceHT($quantity,$price);
             $priceTTC = $this->get('calculator')->CalcPriceTTC($quantity,$price);

         }

    return $this->render('AppBundle::panier.html.twig', [
        'form' => $form->createView(),
        'horstaxe' => $priceHT,
        'taxe' => $priceTTC,
        'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }  
}
