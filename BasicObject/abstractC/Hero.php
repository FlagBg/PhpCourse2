<?php
/*
 * @brief basic object
 * 
 * @details	string, int;
 */
include_once 'AbstractPeople.php';

class Hero extends AbstractPeople
{
	public function describe()
	{
		
		return parent::describe() . "I am a Hero...!";
	}
	
	
	public function hello()
	{
		return "Hello everyBody";
	}

	public function move()
	{
		return "I am attacking the enemies. ";
	}
	
}
	/**
	 * @var unknown
	 */
// 	public $name;
// 	public $birthDay;

// 	public function __construct($name, $birthDay)
// 	{
// 		$this->name = $name;
// 		$this->birthDay = $birthDay;
	
// 	}

// }

// $hero = new Hero('John', 20);
// echo $hero;

