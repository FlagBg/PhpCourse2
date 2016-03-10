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
