<?php

include_once 'TestClass1.php';
include_once 'TestClass2.php';
 
class TestClass
{
	public function __construct()//declaring constructor
	{
		
	}
	
	public function myPublic()//declaring public method;
	{
		
	}
	
	protected function myProtected ()//declaring protected method
	{
		
	}
	
	private function myPrivate()//declaring private method;
	{
		
	}
	
	function Hi()
	{
		$this->MyPublic();
		$this->myPrivate();
		$this->myProtected();
	}
}
	
$myObject = new TestClass();
$myObject->myPublic();
$myObject->Hi();	



 //testvane na klasove ot documentaciyata... ideyata, da nau4a obektite :)
class TestAlou
{
	public $public = 'Public';
	protected $protected = 'Protected';
	private $private = 'Private';
	
	public function printHello()
	{
		echo $this->public;
		echo $this->protected;
		echo $this->private;	
	}
}

$object = new TestClass();//create object
	
echo $object->public;//works
//echo $object->protected;//not worsks,protected
//echo $object->private;//not accessable;
	
$object->printHello(); 

class TestClass1 extends TestClass
{
	protected $protected = 'Pretected2';

	function printHello()
	{
		echo $this->public;
		echo $this->protected;
		echo $this->private;
	}

}

$object2 = new TestClass1();

echo $object2->public;
echo $object2->protected;
echo $object2->private;
$obj2-printHello();


/*
 * 
 * 
 
{
	protected $name;
	
	
	public function __construct($name)
	{
		$sum = 4 + 5;
		if ($name) 
		{
			$this->name = "Default";
		}
	}
	
	public function echoName()
	{
		echo $this ->name;
	}
	
