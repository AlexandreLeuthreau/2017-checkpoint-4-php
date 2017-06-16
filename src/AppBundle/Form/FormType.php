<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Range;

class FormType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('productName', TextType::class)
            ->add('nb', IntegerType ::class, array ('constraints'=>array(new Range(array('min'=>0, 'max'=>10)))))
            ->add('price', IntegerType::class, array ('constraints'=>array(new Range(array('min'=>0)))))
            ->add ('validate', SubmitType::class);
    }
}
