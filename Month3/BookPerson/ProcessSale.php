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

class ProcessSale
{
	public $callbacks;
	
	public function registerCallBack( $callback)
	{
		if (! is_callable( $callback ) )
		{
			throw new Exception( "callback not callable ");
		}
		$this->callbacks[] = $callback;
		
	}

public function sale($product)
{
	print "{$product->name}: processing \n";
	foreach ( $this->callbacks as $callback )
	{
		call_user_func( $callback, $product );
	}
}
}