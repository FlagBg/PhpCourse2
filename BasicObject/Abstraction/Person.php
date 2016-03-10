<?php
abstract class Person
{
	abstract protected function writeInfo();
	
	public $lastName;
	public $firstName;
	public $birthDate;
	
	public function getAge($today=NULL)
	{
		//age funct.
	}
}


