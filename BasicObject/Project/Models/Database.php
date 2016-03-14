<?php
/**
 * 
 * @brief Singleton design pattern using const;
 * 
 * @details: it works with const, because we need to open one connection to 
 * 			 the database;
 *
 */
class Database
{
	/**
	 * @const	string user
	 * @const	string password
	 * @const	string HOST		='localhost'
	 * @const	string DB_NAME
	 * 
	 * @param	float  $Cconnection
	 * @var	    int	PORT
	 */
	const USER					= 'root';
	const PASSWORD				= '';
	const HOST					= 'localhost';
	const DB_NAME				= 'electromer';
	
	public static $connection	= null;
	
	/**
	 * private funstion construction as defauilt that creating connection with no param;
	 */
	private function __construct()
	{
		
	}
	
	/**
	 * @brief	function that create the database connection. works as object
	 * 
	 * @details	
	 * 
	 * @param	if sell::$connection === NULL;
	 * @return PDO connection;
	 */
	public static function getInstance()
	{
		if (self::$connection === NULL)
		{
			self::$connection	= new PDO( 'mysql:host=' . self::HOST . ';dbname=' . self::DB_NAME, self::USER, self::PASSWORD );
		}
		
		return self::$connection;
	}
}