<?php

namespace AppBundle\Form;


use Doctrine\DBAL\Types\DecimalType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Length;


class CalculType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('quantité', IntegerType::class, array(
                'constraints' => new Length(array('min' => 0, 'max' => 10)),
            ))
            ->add('prix', DecimalType::class)
            ->add('submit', SubmitType::class);
    }
}