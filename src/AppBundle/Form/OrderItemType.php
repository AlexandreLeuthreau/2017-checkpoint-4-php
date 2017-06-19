<?php
// src/AppBundle/Form/TaskType.php
namespace AppBundle\Form;

//Forms classes
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
// Validation Classes
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Currency;
use Symfony\Component\Validator\Constraints\NotBlank;

class OrderItemType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('Produit', TextType::class)
		->add('Quantite', RangeType::class, array(
			'attr' => array(
				'min' => 0,
				'max' => 10
				)))
		->add('Prix', MoneyType::class,
			array(
				'constraints' => [
				new NotBlank()
				]
				))
		->add('submit', SubmitType::class)
		;
	}
}