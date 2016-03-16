<?php
include_once 'Animal.php';

class Person extends AbstractAnimal
{
	public function greet()
	{
		//method body Great return string;
		return "Hi, Hi ";	
	}
	
	public function describe()
	{
		//method body describe and return string;
		return "I am a man"; 
	}
}