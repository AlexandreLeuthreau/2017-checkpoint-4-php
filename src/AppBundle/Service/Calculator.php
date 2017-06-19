<?php // src/AppBundle/Service/Calculator.php


namespace AppBundle\Service;

class Calculator
{

	private $_tva;

	public function __construct($tva){
		$this->_tva = 1 + ($tva / 100);
	}

	public function calculate($qty, $price)
	{

		$ht_price = $qty * $price;
		$result = [
			'ht' => $ht_price,
			'ttc' => $ht_price * $this->_tva,
			];
		return $result;
	}

}
