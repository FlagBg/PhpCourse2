<?php

include_once 'AbstractFigures.php';

class Triangle extends AbstractFigures
{
	public $side;
	public $length;
	public $sideB;
	
	
	function __construct($side, $length, $sideB)
	{
		$this->side = $side;
		$this->length = $length;
		$this->sideB = $sideB;
	}
	
	public function lice()
	{
		
		echo "y" . $side + $length + $sideB;
	}
	
	public function perimeter()
	{
		echo "H\n";
	} 
}
	
	

