<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\ProductType;
use AppBundle\Service\Calculator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('products', CollectionType::class, array(
            'entry_type' => ProductType::class,
            'allow_add'    => true,
        ))->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $input = $form->getData();
            $messageGenerator = $this->get("calculator");
            foreach ($input["products"] as $key => $product){
                $table = $messageGenerator->Calculate($product["quantity"]*$product["price"]);
                $input["products"][$key]["ht"] = $table[0];
                $input["products"][$key]["ttc"] = $table[1];
            }


            return $this->render('AppBundle:Default:index.html.twig', array(
                'tables' => $input
            ));
        }
        return $this->render('AppBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
