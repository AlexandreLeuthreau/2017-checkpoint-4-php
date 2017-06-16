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

class FactureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'label' => 'Nom',
            ))
            ->add('quantite', IntegerType::class, array(
                'label' => 'Quantité',
                'constraints' => array(
                    new GreaterThanOrEqual(0),
                    new LessThanOrEqual(10)
                )
            ))
            ->add('price', NumberType::class, array(
                'label' => 'Prix',
                'constraints' => array(
                    new GreaterThanOrEqual(0)
                )
            ))
            ->add('save', SubmitType::class, array('label' => 'Valider'))
        ;
    }
}