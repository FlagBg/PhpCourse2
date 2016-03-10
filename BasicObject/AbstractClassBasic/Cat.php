<?php
/*

 * @brief class object that implementira the abstract class with same functions;
 * 
 */

include_once 'Animal.php';

class Cat extends AbstractAnimal
{
	public function greet()
	{
		return "Miau ";
	}
	
	public function describe()
	{
		"I am the cat! ";
	}
}