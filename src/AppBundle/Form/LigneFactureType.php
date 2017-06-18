<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;

class LigneFactureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'label' => 'Nom',
                'label_attr' => array(
                    'class' => 'sr-only'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Nom'
                )
            ))
            ->add('quantite', IntegerType::class, array(
                'label' => 'Quantité',
                'label_attr' => array(
                    'class' => 'sr-only'
                ),
                'constraints' => array(
                    new GreaterThanOrEqual(0),
                    new LessThanOrEqual(10)
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Quantité'
                )
            ))
            ->add('price', NumberType::class, array(
                'label' => 'Prix',
                'label_attr' => array(
                    'class' => 'sr-only'
                ),
                'constraints' => array(
                    new GreaterThanOrEqual(0)
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Prix'
                )
            ));
    }
}