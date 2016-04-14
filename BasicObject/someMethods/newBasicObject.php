<?php
/**
 * 
 * @author Class that represents basic Object using __construct;
 * 
 * @param	string  $firstName;
 * @param	string  $lastName;
 * @param	int	    $age;
 * @param	boolean $isAlive
 *
 */
Class SheIs
{
	/**
	 * function using __construct, constructor; 
	 * 
	 * return Object;
	 */
	public $isAlive = true; //boolean;
	public $firstName;
	public $lastName;
	public $age;
	
	//assigning the values@;
	
	public function __construct( $firstName, $lastName, $age )
	{
		$this-> firstName = 	$firstName;
		$this-> lastName = 		$lastName;
		$this-> age = 				$age;
	}
//creating method function to the object

	public function Hi()
	{
		return "Hi, my name is " . $this->firstName . " " 
				. $this->lastName . ". Nice to meet you! :)" . $this->age;
	}
}

//creating the object
$she = new SheIs(Maria, Ivanova, 22);

echo $she->Hi();

