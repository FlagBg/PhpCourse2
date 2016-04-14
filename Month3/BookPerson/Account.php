<?php

/**
 * 
 * @brief 	Account
 * 
 */
class Account
{
	public $balance;
	
	
	public function __construct( $balance )
	{
		$this->balance = $balance;
	}
	
	public function getBalance()
	{
		return $this->balance;
	}
	
	
}