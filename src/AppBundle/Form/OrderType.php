<?php
// src/AppBundle/Form/TaskType.php
namespace AppBundle\Form;

//Forms classes
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Form\OrderItemType;

class OrderType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('Produit', OrderItemType::class)
		->add('submit', SubmitType::class);
	}
}