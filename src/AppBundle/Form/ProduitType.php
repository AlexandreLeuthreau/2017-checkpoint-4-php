<?php

/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 16/06/17
 * Time: 12:01
 */
// src/AppBundle/Form/TaskType.php
namespace AppBundle\Form;

use Doctrine\DBAL\Types\FloatType;
use Doctrine\DBAL\Types\IntegerType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*
        $builder
            ->add('Nom',TextType::class, array(
                'constraints' => ),
            ))
            ->add('Quantite',IntegerType::class, array(
                'constraints' => ),
            ))
            ->add('prix',FloatType::class, array(
                'constraints' => ),
            ))
            ->add('submit', SubmitType::class)
        ;
        */

        $builder
            ->add('Nom',TextType::class)
            ->add('Quantite',IntegerType::class)
            ->add('prix',FloatType::class)
            ->add('submit', SubmitType::class)
    ;
    }
}

