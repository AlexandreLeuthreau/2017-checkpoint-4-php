<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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


        // Les donnees de notre requete sont interpretees.
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //On recupere les donnees
            $data = $form->getData();

            // Puis on traite la donnée (envoi de mail…)
            // Apres avoir configure les paramtre du SMTP
            //service ici

        }


        return $this->render('productform.html.twig', [
            'product_form' => $form->createView(),
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}
