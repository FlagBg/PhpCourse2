<?php

class SumVatExample
{

	public $sumVat;

	public function __construct($sumVat)
	{
		$this->sumVat = $sumVat;
	}

}

$sumVat = new SumVatExample();


$prices = 			array(5.2, 3.00, 12.59);
$totalPrice = 		0;
$taxRate = 			5;

foreach ($prices as $price)
{
	print "[before: $totalPrice]";
	$totalPrice = $price * $taxRate;
	print "[after: $totalPrice]";
}

	printf('Total price (with tax: $%.2f', $totalPrice);



/* class SumVatExample
{
	
 	public $sumVat;
	
 	public function __construct($sumVat)
 	{
 		$this->sumVat = $sumVat;
 	}
	

	public $prices = 			array(5.2, 3.00, 12.59);
	public $totalPrice = 		0;
	public $taxRate = 			5;
	
	function Work()
	{
		foreach ($prices as $price)
		{
			print "[before: $totalPrice]";
			$totalPrice = $price * $taxRate;
			print "[after: $totalPrice]";
		}
		
		printf('Total price (with tax: $%.2f', $totalPrice);
	}

}

	
	$sumVat = new SumVatExample();	
	
	$prices = 			array(5.2, 3.00, 12.59);
	$totalPrice = 		0;
	$taxRate = 			5;

	foreach ($prices as $price)
	{	
		print "[before: $totalPrice]";
		$totalPrice = $price * $taxRate;
		print "[after: $totalPrice]";
	}
	
	printf('Total price (with tax: $%.2f', $totalPrice);
 */