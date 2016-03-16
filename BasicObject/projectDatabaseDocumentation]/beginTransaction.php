<?php 

/**
 *
 *  @brief  		Class that is creating connection with my database and testing INSERT INTO;
 * 		   		It works with createConnection INSERT DATA'S values in my database using WHERE clause;
 *
 *  @details		when we start the application we create objects(connections and than we doing one query select* from;
 *
 */
class beginTransaction
{
	/**
	 * @var 	string localhost
	 * @var		string $user
	 * @var		string $pass
	 * @var		string $dbname
	 * 
	 */
	private $user = "root";
	private $pass = "";
	//const PASSWRD			= "";
	//const USERNAME			= "root";
	//$dbh = new PDO( 'mysql:host= localhost; dbname = electromer', $user, $pass );


	public function getPDO()
	{
		print "hi";
	}
	
	/**
	 * @var		$dbh
	 *
	 * @brief		create the connection with DB and than we insert into it using where clause
	 *
	 * @details		using Transaction() and than exec( $str );
	 *
	 * @return		boolean 
	 */
	public function setAttrubute()
	{
	try {
		
		$dbh = new PDO( 'mysql:host=localhost;dbname=electromer;', 
										$this->user, $this->pass );
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$dbh->beginTransaction();//INSERT/........ 
		//$dbh->exec("INSERT INTO `price`(`dayValueRate`, `nightValueRate`, `id`) 
		//						VALUES (30,40,7)");
		
		$dbh->exec("INSERT INTO `roles`(`id`, `role`) VALUES ('12','Admin')");
		$dbh->exec("INSERT INTO `roles`(`id`, `role`) VALUES ('13','Member')");
		
		
		$dbh->commit();
		$result = $dbh->commit();
		print "Successfully added: " ;
		
		}catch (Exception $e)
			{
				$dbh->rollBack();
				print "Failed: " . $e->getMessage();
			}
	}
	
	public function getConnection()
	{
		/**
		 * @brief	function that create connection with the database with all host,user,pass,databasename;
		 * 	PDO::query(string $statement)
		 * Executes an SQL statement, returning a result set as a PDOStatement object
		 * Parameters:string $statement
		 * The SQL statement to prepare and execute.
		 * Data inside the query should be properly escaped.
		 *
		 * @Returns:PDOStatement PDO::query returns a PDOStatement object, or false on failure.
		 *
		 */
		try {
			$dbh = new PDO( 'mysql:host=localhost;dbname=electromer;', $this->user, $this->pass );
			foreach ($dbh->query('SELECT * FROM users ') as $row )
			{
				print_r( $row );
			}

			$dbh = null;

		} catch( PDOException $e )

		{
			print "Error!: " . $e->getMessage() . " ";
			die();
		}
	}

}
	$insert = new beginTransaction();
	$insert->setAttrubute();
	//$connection->getConnection();