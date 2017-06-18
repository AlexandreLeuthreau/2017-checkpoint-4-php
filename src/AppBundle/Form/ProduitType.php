<?php

/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 16/06/17
 * Time: 12:01
 */
// src/AppBundle/Form/TaskType.php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\LessThan;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('Nom',TextType::class)
            ->add('Quantite',IntegerType::class, array(
                'constraints' => array(
                    new GreaterThanOrEqual(0),
                    new LessThan(11),
                )))

            ->add('prix',NumberType::class, array(
                'constraints' => array(
                    new GreaterThan(0)
                )
            ))
            ->add('submit', SubmitType::class)
            //->add('produit', ProduitType::class)    attention boucle infini

    ;
    }
}

