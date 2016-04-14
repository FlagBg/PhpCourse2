<?php

include_once 'Account.php';
/**
 * @brief class Person
 * 
 */

class Person 
{
	/**
	 * @var string $name
	 */
	protected $name;
	
	/**
	 * @var double $age
	 */
	protected $age;
	
	/**
	 * @var int $id
	 */
	protected $id;
	
	/**
	 * @var	 $balancel
	 */
	public $account;
	
	
	/**
	 * @brief 	creating object
	 * 
	 * @param string $name
	 * @param double $age
	 */
	
	
	public function __construct( $name, $age, $account )
	{
		$this->name = $name;
		$this->age  = $age;
		$this->account = $account;
	}
	
	public function setId( $id )
	{
		$this->id = $id;
	}
	
	public function setBalance( $balance )
	{
		$this->balance = $balance;
	}
	
	public function getBalance()
	{
		return $this->balance;
	}
	
	public function getAge()
	{
		return 28;
	}
	
	public function getName()
	{
		return "Angel";
	}

	function __toString()
	{
		$desc = $this->getName();
		$desc = " age " . $this->getAge() ." ";
		return $desc;
		
	}
	
	function __clone()
	{
		$this->id = 0;
	}
	
	
	
}