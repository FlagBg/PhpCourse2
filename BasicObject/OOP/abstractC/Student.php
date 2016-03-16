<?php

include_once 'AbstractPeople.php';

class Student extends AbstractPeople
{
	
	public function describe()
	{
		//method body - return string for every object;
		return parent::describe() . " I am a student ";
	}
	
	public function hello()
	{
		//method body - return string for every object;
		return "Hello everybody.";
	}
	
	public function move()
	{
		return "I am moving ";
	}
	
}
?>
