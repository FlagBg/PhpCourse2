<?php

include_once 'Constructor.php';
class MyOtherClass extends MyClass
{
	/**
	 * @brief		new class extend the mainOne;
	 * 
	 * @param all ones in the main class;
	 */
	public function newMetod()
	{
		/*
		 * Brief NewMetod 
		 * 
		 * @param = return string and show the main class;
		 */
		echo "From a new method in " . __CLASS__;
	}	

}

$obj = new MyClass();

echo $obj->getProperty();

$newObj = new MyOtherClass();
echo $newObj->newMetod();
echo $newObj->getProperty();
//creating objects ,  calling function;

