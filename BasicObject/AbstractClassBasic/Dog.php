<?php
/*
 * @brief class object that implementira the abstract class with same functions;
 * 
 */
include_once 'Animal.php';

class Dog extends AbstractAnimal
{
	public function greet()
	{
		return "Bau, Bau ";
	}
	
	public function describe()
	{
		return "I am a dog. ";
	}
	
	public function move( $time )
	{
		return $this->time = $time . " hours " ;
	}
}