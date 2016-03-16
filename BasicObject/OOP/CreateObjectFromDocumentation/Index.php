<?php

include_once 'ClassA.php';
include_once 'ClassB.php';
include_once 'ClassC.php';

class Index extends A
{
	function hi()
	{
		echo "Hi" ;
	}
	
}

$parent = new A();

$classB = new B();

$classC = new C();
