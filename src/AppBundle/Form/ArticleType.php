<?php

namespace AppBundle\Form;

//Forms classes
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
// Validation Classes
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

class ArticleType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        ->add('name', TextType::class, array(
            'label' => 'Nom du produit',
            'constraints' => new NotBlank(),
            )
        )
        ->add('quantity', IntegerType::class, array(
            'label' => 'Quantité',
            'constraints' => new Range(array('min' => 0, 'max' => 10)),
            )
        )
        ->add('price', MoneyType::class, array(
            'label' => 'Prix unitaire HT',
            'constraints' => new GreaterThanOrEqual(0),
            )
        );
    }
}