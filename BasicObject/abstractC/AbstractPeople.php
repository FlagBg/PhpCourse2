<?php
/**
 * @brief abstraction of people with attributes for all of them
 */
include_once 'InterfacePeople.php';
abstract class AbstractPeople implements PeopleInterface
{
		/**
		 *@Brief		This method holds all characterics for objects;
		 *@param	int age;
		 *@param string name;
		 */
	public $age;
	public $name;
	
	public function describe()
	{
		//method body describing $name and $age
		return 'My name is ' . $this->name . ", " . 'I am ' . $this->age . " years old.";
	}
	
	public abstract function hello();
	
	abstract function getDistance ( $)
	
}
