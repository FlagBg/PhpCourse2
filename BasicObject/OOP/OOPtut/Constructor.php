<?php
/*
 * brief testing OOP basics 
 */


		//this class contents constructor
		//must be indeted 

class MyClass
{
	/**
	 * 
	 * @param	string $prop1
	 * @return  string
	 */
  public $prop1 = "I'm a class property!";
 
  public function __construct()
  {
  	/**
  	 * @brief constructor; elementary one creating just object return string;
  	 */
      echo 'The class "', __CLASS__, '" was initiated!';
  }
 
  public function __destruct()
  {
  	/*
  	 * @brief desctructor removing the object, clearing memory
  	 */
      echo 'The class "', __CLASS__, '" was destroyed.';
  }
 
  public function __toString()
  {
  	/*
  	 * brief converting ToString avoiding errors;
  	 * 
  	 * return $this->prop1 as a string when called.
  	 */
  	echo "Using toString method: ";
  	return $this->getProperty();
  }
  
  public function setProperty($newval)
  {
  	/*
  	 * $Brief - setProperty;
  	 */
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . " ";
  }
}
// }$obj = new MyClass();

// echo $obj->getProperty();



