<?php

abstract class Dog
{
	protected $name = null;
	protected $gender = null;
	
	public function __construct( $name, $gender )
	{
		$this->name = $name;
		$this->gender = $gender;
	}
	
	public function setName( $name )
	{
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setGender( $gender )
	{
		$this->gender = $gender;
	}
	
	public function getGender()
	{
		return $this->gender;
	}
	
	abstract public function bark();
	
}

