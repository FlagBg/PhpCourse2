<?php

include_once 'Constructor.php';

class MyOtherClass extends MyClass
{
	/**
	 * Brief building an object from the main class; and overwrite it using functions;
	 * 
	 * @param string;
	 */
	public function __construct()
	{
		/*
		 * constructor again that overwrite the constructor in the main class;
		 */
		echo "A constructor overwrite " . __CLASS__ . " ";
		
	}
	
	public function newMethod1()
	{
		/*
		 * when we have cons
		 */
		echo "From a new method in " . __CLASS__ . " ";
	}
}

//create object
$newobj = new MyOtherClass();
echo $newobj->newMethod1();
echo $newobj->getProperty();


//http://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762

