<?php 

namespace AppBundle\Service;

class Calculator
{
	

	public function CalcPriceHT($quantity, $price)
	{
		$priceht = $quantity * $price;

		return $priceht;

	}
	public function CalcPriceTTC($quantity, $price, $taxe = 20)
	{
		$pricetaxe = ($this->calcpriceht($quantity, $price))*($taxe/100);
		$pricettc = $this->calcpriceht($quantity, $price) + $pricetaxe;

		return $pricettc;

	}
}