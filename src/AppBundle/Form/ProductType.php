<?php
// src/AppBundle/Form/TaskType.php
namespace AppBundle\Form;
//Forms classes
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'constraints' => array(
                    new NotBlank(),
                    new Length(array('min' => 5))
                )
            ))
            ->add('quantity', IntegerType::class)
            ->add('price', MoneyType::class)

            ->add('submit', SubmitType::class)
        ;
    }
}