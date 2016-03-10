<?php
/*
 * brief testing OOP basics
*/


//this class contents constructor
//must be indeted
class MyNewMainClass
{
	/**
	 *
	 * @param	string $prop1
	 * @return  string $newVal;
	 */
	public $prop1 = "I am a class property";
	
	public function __construct()
	{
		//method Construct
		echo 'The class "', __CLASS__, '" was initiated! ';
	}
	
	public function __destruct()
	{
		//method desctruct remove object from the body
		echo 'The class "', __CLASS__, '" was destroyed! ';
	}
	
	public function toString()
	{
		//converting toString;
		echo "Using toString Method: ";
		
	}
	
	public function setProperty( $prop1 )
	{
		//setProperty in newVal;
		$this->prop1 = $newVal;
	}
	
	protected function getProperty()
	{
		//Getter accessor returning String;
		return $this->prop1 . " ";
	}
}
