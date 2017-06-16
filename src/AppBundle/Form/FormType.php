<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;


class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('quantity', IntegerType::class, array(
                'constraints' => array(
                    new Length(array('min' => 0, 'max' => 10)),
                    new NotBlank(),
                )
            ))
            ->add('price', IntegerType::class, array(
                'constraints' => new NumberType(),
                                 new NotBlank(),
            ))
            ->add('submit', SubmitType::class)
        ;
     }
}