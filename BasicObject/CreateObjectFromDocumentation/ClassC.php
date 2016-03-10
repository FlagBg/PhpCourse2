<?php

include_once 'ClassB.php';
include_once 'ClassA.php';

class C extends A
{
	function __construct()
	{
		$this->var = 1002;
		$this->getVar();
	}
	
}
