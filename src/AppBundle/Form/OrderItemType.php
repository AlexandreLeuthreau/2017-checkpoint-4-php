<?php
// src/AppBundle/Form/TaskType.php
namespace AppBundle\Form;

//Forms classes
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
// Validation Classes
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class OrderItemType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('Produit', TextType::class)
		->add('Quantite', NumberType::class)
		->add('Prix', MoneyType::class)
		->add('submit', SubmitType::class)
		;
	}
}