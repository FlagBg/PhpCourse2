<?php 


class DatabaseSingleton
{
	const USER					= 'root';
	const PASSWORD				= '';
	const HOST					= 'localhost';
	const DB_NAME				= 'electromer';
	
	public static $connection = NULL;
	
	private function __construct()
	{
		
		
	}
	
	public static function getInstance()
	{
		if ( self::$connection === NULL)
		{
			self::$connection = new PDO( "mysql:host=" . self::HOST . ";dbname="  . 
					self::DB_NAME . ";", self::USER, self::PASSWORD
			);
		}
		
	return self::$connection;
		
	}

}
?>