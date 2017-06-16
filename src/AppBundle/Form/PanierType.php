<?php

namespace AppBundle\Form;

//Forms classes
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
// Validation Classes
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

class PanierType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        ->add('panier', CollectionType::class, array(
            'entry_type' => ArticleType::class,
            'allow_add' => true,
            'allow_delete' => true,
        ))
        ->add('submit', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-success del-btn-submit'),
            'label' => 'Calculer le panier',
        ))
    ;
    }
}