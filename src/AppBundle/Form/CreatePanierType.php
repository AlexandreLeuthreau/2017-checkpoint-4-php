<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\ChoiceValidator;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqualValidator;

class CreatePanierType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class,array('attr' => array('placeholder' => 'Nom du Produit')))
            ->add('quantite', IntegerType::class,array('attr' => array('placeholder' => 'Quantitée souhaitée'),'constraints' => new ChoiceValidator(array(0,1,2,3,4,5,6,7,8,9,10))))
            ->add('prix', IntegerType::class,array('attr' => array('placeholder' => 'Prix unitaire'),'constraints' => new GreaterThanOrEqualValidator(0)))
            ->add('submit',SubmitType::class);
    }

}