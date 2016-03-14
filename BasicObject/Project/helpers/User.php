<?php
/**
 * 
 * @Brief users create an object user, because we have users;
 * 
 * 
 *
 */
class User
{
	/**
	 * 
	 * @param 	string $firstName;
	 * @param 	string $lastName; unknown
	 * @param 	int    $age;
	 */
	protected $firstName;
	protected $lastName;
	protected $age;
	
	
	/**
	 * @brief	creating object, using function __construct;
	 * 
	 * @param 	string $firstName
	 * @param 	string $lastName
	 * @param 	int    $age
	 */
	public function __construct( $firstName, $lastName, $age)
	{
		$this->firstName 	= 	$firstName;
		$this->lastName 	= 	$lastName;
		$this->age 			= 		$age;
	}
	
	
	/**
	 * @param	string $firstName
	 *
	 * return	string $this->firstName;
	 */
	public function setFirstName()
	{
		$this->firstName = $firstName;
	}
	
	/**
	 * @return	string $this->firstName
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}
	
	/**
	 * @param string $lastName
	 * 
	 * @return string $this->lastName = LastName;
	 */
	public function setLastName()
	{
		$this->lastName = lastName;
	}
	
	/**
	 * return string;
	 */
	public function getLastName()
	{
		return $this->lastName;
	}
	
	/**
	 * return int age;
	 */
	public function setAge()
	{
		$this->age = $age;
	}
	
	public function getAge()
	{
		return $this->age;
	}
	
	
	
}