<?php

include_once 'GetSetConstructor.php';
class GetSetExtended extends MyNewMainClass
{
	/**
	 * @brief		this class extends the __Class__ and contains
	 * 				constructor and accessor of the otherClass Setter/Getter;
	 * @details		returning string;	
	 */
	public function __construct()
	{
		//method second constructor overwrite the one in __class__
		parent::__construct();
		echo "A new constructor in " . __CLASS__ . " ";
	}
	
	public function newMethod()
	{
		//new method shows that we extends the main class;
		echo "From a new Method in " . __CLASS__ . " ";
	}
	
	public function callProtectedMethod()
	{
		//public function that accessing the protected function in the other class;
		// return $prop1;
		return $this->getProperty();
	}
	
}

$newobj = new GetSetExtended();

echo $newobj->callProtectedMethod();