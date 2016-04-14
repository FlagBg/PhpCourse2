<?php
error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

/**
 * 
 * @brief 	class that we do plenty of comparisons;
 *
 */
class Compare
{
	/*
	 * @var double $number
	 */
	public $number;
	
	/**
	 * @var double $number2
	 */
	public $number2;
	
	/*
	 * @var string $name
	 */
	public $name;
	
	/**
	 * @var double $age
	 */
	public $age;

	
	/**
	 * @brief 	creating the object;
	 *  
	 * @param double $number
	 * @param double $number2
	 */
	public function __construct( $number, $number2 )//object....
	{
		$this->number  = $number;
		$this->number2 = $number2;
	}
	
	/**
	 * @brief 	basic compare with triple equal.....
	 */
	public function tripleEqual()//works
	{
		if ( $this->number === $this->number2 )
		{
			print 'Equal';
		}
		else print 'Not equal';
	}
	
	
	/**
	 * @brief 	basic compare with equal equal
	 * 
	 * 
	 */
	public function compare()//works
	{
		if ( $this->number == $this->number2 )
		{
			
			echo   'Equal.';
		}
		else
		{
			echo  'Not equal';
		}
	}

	/**
	 * @brief 	compare
	 * 
	 */
	public function TripleEquals()//works
	{
		if ( $this->number>50 )
		{
			print  'Greater than 50';
		}
		else
		{
			print  'greater than 50';
		}
		if ($this->number==$this->number2)
		{
			print  'equal';
		}
		else
		{
			print 'not equal.';
		}
	}
	
	/**
	 * @brief 	logic operators;
	 * 
	 * 
	 */
	public function logic()//works
	{
		if ($this-number>=1 && $this->number2 <=100 )
		{
			print  'Number is fine';
		}
		else 
		{
			print  'Number must be between 1 and 100, inclusive';
		}
		
	}
	
	/**
	 * @brief 	functions that compare with conditions
	 * 
	 * @param string $name
	 * @param number $age
	 */
	public function compareNames( $name ="Angel", $age = 22 )//we have got strings here - not work
	{
		//$name = 'Angel'; // This will always force the string to equal "Angel"; That's what you want right? just force it to execute == equal ang filled the if..
		
		
		if ( $name=='Angel' && ($age = 23 || $age = 22 ) || $name == 'john' || $name == 'Peter')
		
		
		{
			print 'Hello My Dear';
		}
		else
		{
			print 'Get the Other Door';
		}
		
	}
	
	/**
	 * @brief 	switch/case operators;
	 * 
	 * @param  int $num
	 * 
	 * @return string	
	 * 
	 */
	public function checkSwitch()
	{
		$num = 7;
	
		switch ( $num )
		{
			case 10:
				print 'Ten';
				break;
					
			case 9:
				print 'Nine';
				break;
					
			case 8:
				print 'Eight';
				break;
					
			case 7:
				print 'Seven';

				break;
					
			default:
				print 'Number not recognises.';
				break;
		}
	
	}
	
	/**
	 * @brief 	switch/case
	 * 
	 * @param string $name
	 * 
	 */
	public function secondSwitch( $name = 'Dragan' )
	{
		
		switch ( $name)
		{
			case 'Angel'  :
			case 'Ivan'   :
			case 'Dragan' :
				print 'Hello Man!';
				break;
				
			default:
				print 'I do not know you.';
			break;
		}
		
	}

}

$test = new Compare(10, 20, "Angel");
$test->secondSwitch();
$test->checkSwitch();
//print_r($test);
//var_dump($test);
//print_r($test->number);
//print_r($test->name);
//$test->compareNames();
//print_r($test->this->name);
//var_dump($name);
//print_r($name);
//var_dump($this->name);
//print_r($this->name);
//$test->tripleEqual();
//var_dump($test);
//$test->compareNames();
//$test->compare();
//$test->TripleEquals();



