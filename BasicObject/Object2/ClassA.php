<?php

class A
{
	public $var;

	function __construct()
	{
		$this->setVar();
		$this->getVar();
	}

	protected function getVar()
	{
		echo $this->var;
	}

	public function setVar()
	{
		$this->var = 1000;
	}

}

$parent = new A();

$classB = new B();

$classC = new C();

class B extends A
{
	function __construct()
	{
		$this->setVar();
		$this->getVar();
	}

	public function setVar()
	{
		$this->var = 1001;
	}

}

class C extends B
{
	function __construct()
	{
		$this->var - 1002;
		$this->getVar();
	}

}


