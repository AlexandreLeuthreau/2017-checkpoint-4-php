<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ProductType;

class ProductController extends Controller
{
    /**
     * @Route("/cart", name="cart")
     */
    public function cartAction(Request $request)
    {
        $form = $this->createForm(ProductType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();

            $monservice = // bug magistral. Symfony pouvait pas me dire pourquoi rien ne marchait. Je pouvais plus rien afficher. Ni le sujet ni rien. Même en supprimant tout ce que j'avais fait. J'ai du modifié un paramètre "critique' car sur la branche master je pouvais voir l'énoncé pour travailler sur l'algo.
        }
        return $this->render('productform.html.twig', [
            'product_form' => $form->createView(),
        ]);
    }
}