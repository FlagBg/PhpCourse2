<?php

abstract class abv
{
	abstract protected function f1($a, $b);
}

class abc extends abv
{
	protected function f1($name, $address)
	{
		echo " $name , $address ";
	}
}

$a = new abc();