<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;

class PanierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('quantite', NumberType::class, array(
                'constraints' => new Length(array('min' => 0, 'max' => 10))
            ))
            ->add('prixHT', TextType::class, array(
                'constraints' => new Length(array('min' => 0))
            ))

            ->add('Enregistrer', SubmitType::class);
    }


}
