<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class FactureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lignesFacture', CollectionType::class, array(
                'entry_type' => LigneFactureType::class,
                'entry_options' => array(
                    'attr' => array(
                        'class' => 'ligne row'
                    )
                ),
                'prototype' => true,
                'allow_add' => true,
                'allow_delete' => true
                ))
            ->add('save', SubmitType::class, array('label' => 'Valider'));
    }
}