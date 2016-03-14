<?php

include_once 'Database.php';
include_once '../helpers/User.php';
//include_once 'Login.php';

/**
 * 
 * @brief 	class usermodel is representing the model of the nvc
 * 			takes the values in the database and create it as an object
 * 			
 * 			
 * @param	boolean $db
 *
 */
class UsersModel {
	
	/**
	 * 
	 * @var boolean $db;
	 */
	protected $db;
	
	/**
	 * create object 
	 * 
	 * param	string $this->db;
	 *
	 */
	public function __construct()
	{
		$this->db = Database::getInstance();
	}
	
	/**
	 * @brief	create object login() that takes all the values from 
	 * 			the database and return it as statement	
	 * 
	 * 
	 * 
	 * @param 	string  $username
	 * @param	string  $password
	 * @param 	string  sql;
	 * @param	string	stm;
	 * @param	string $reslut as array();
	 */
	public function login( $username, $password )
	{
		$sql	= '
			SELECT * FROM users
			WHERE username = ? AND password = ?
		';
		
		$stmt	= $this->db->prepare( $sql );
		//statement;
		$result	= $stmt->execute( array( $username, $password ) );
		
		if ( $result )
		{
			if( $stmt->rowCount() > 0 )
			{
				$rows	= $stmt->fetchAll(PDO::FETCH_ASSOC);
				$user	= array_pop( $rows ); //print_r(); die();
				
				return new User($user['fname'], $user['lname'], $user['age']);
		
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	
// 	public function userUpdate( $userData )
// 	{
// 		$sql	= '
// 				UPDATE `users` SET `id`=[value-1],
// 				`username`=[value-2],
// 				`password`=[value-3],
// 				`role_id`=[value-4],
// 				`fname`=[value-5],
// 				`lname`=[value-6],
// 				`age`=[value-7]
// 				'
// 		$stmt 	= $this->db->prepare( $sql );
		
// 		$result = $stmt->execute( $userData );
		
//	}
	
	
	public function createUser( $userData )
	{
		$sql	= '
			INSERT INTO users
			SET username = ?,
				password = ?,
				role_id	= ?,
				fname = ?,
				lname = ?,
				age = ?
		';
		
		$stmt	= $this->db->prepare( $sql );
		
		$result	= $stmt->execute( $userData );
	}
	
	
}

