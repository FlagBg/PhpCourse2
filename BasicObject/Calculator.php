<?php
/**
 * 
 * @brief   Class with basic formulas sum and devide; The idea is to put parameter in 
 * a function and to call that function in a object. After that did some 
 * tests about how it works with different syntax. 
 * 
 * @param	$a, $b -> int;
 * 			String;
 *
 */
class Calculator
{
	
	public $a = 1;
	public $b = 3;
	public $name = 'John';
	//public $summ = ($a + $b);
	//public $divide;
	
	//public $name;
	
	public function sum($a, $b)
	{	
		$total =($a + $b);
		echo $total;
			
	}
	
	public function nam($name)
	{
		$this->name = $name;
		echo $name;
	}	
	
}
$calculator = new Calculator();
var_dump($calculator->sum(2, 6));
$calculator->sum(5, 4);

$calculator = new Calculator($name);
$name = 'Hello';
//echo $calculator->setName(); 
$calculator = new Calculator('John');
$calculator->nam('asdfas');
		

//$calculator1 = new Calculator($name);
//echo $calculator1->setName('John');




