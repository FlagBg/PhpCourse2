<?php

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