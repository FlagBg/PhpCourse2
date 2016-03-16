
<?php 


class DatabaseConnectingExample
{
	const SERVERNAME		= 'localhost';
	const PASSWORD			= "";
	const USERNAME			= "root";
	const DB_NAME			= "electromer";
	
	private static $isntance;
	
	private $connection;

	
	private function __construct()
	{
		$this->connection = new PDO(
			"mysql:host=" . self::SERVERNAME . ";dbname=" . self::DB_NAME . ";",
				self::USERNAME,
				self::PASSWORD
		);
		
	}
	
	public static function getDatabase()
	{
		if( ! self::$isntance )
		{
			self::$isntance = new self();
		}
		return self::$isntance;
	}
	
	public function getConnection()
	{
		return $this->connection;
	}
	
	
	public function getResults( $sql, $arguments = array() )
	{
	$result				= array();
		
	$connection 		= self::getDatabase()->getConnection();
		
		$stmt   		= $connection->prepare( $sql );
		
		$result 		= $stmt->execute( $arguments );
		
		if ($result )
		{
			$stmt->fetchAll( PDO::FETCH_ASSOC);
		}	
		return $result; 
	}

}
