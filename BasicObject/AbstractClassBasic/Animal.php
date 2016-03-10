<?php

/**
 * @brief abstraction of animals with attributes for all of them
 */
include_once 'interfaceAnimal.php';

abstract class AbstractAnimal implements AnimalInterface
{
		/**
		 * @param string $name;
		 * @param int	 $age;
		 */
	public $name;
	public $age;
	public $time;
	
	public function describe()
	{
		//method body return name & age;
		return $this->name . ", " . $this->age ."years old ";
	}
	
	public function move( $time )
	{
		//method body implement function move() from the interface return string;
		return " I am moving...";
		
	}
	
	abstract public function greet();
	//method body = abstract function greet() that we define in every object;	
}