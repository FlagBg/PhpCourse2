<?php

class Product
{
	/**
	 * 
	 * @var string $name
	 */
	public $name;
	
	/**
	 * 
	 * @var double $price
	 */
	
	public $price;
	
	/**
	 * @brief 	creating object
	 * 
	 * @param string $name
	 * @param double $price
	 */
	public function __construct( $name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	
	}
	
}