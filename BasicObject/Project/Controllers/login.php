<?php

include_once '../Models/UsersModel.php';

/**
 * 
 * @brief 	class that is doing the Login. As we have database that keeps records for
 * 			the username and the password of every user so here we are doing object and
 * 			functions that doing exactly this and checking is the useris loggedIn and 
 * 			than prints the Strings as results taking them from the html form;
 */
class Login
{
	/**
	 * this class is creating the object
	 * 
	 * @param 	string 	$username
	 * @param	string 	$password
	 * @param	boolean $loggedIn
	 * 
	 * return	boolean $user
	 */
	protected $username;
	protected $password;
	protected $loggedIn = false;
	protected $user;
	
	/*
	 * default constructor;
	 */
	public function __construct()
	{
	}
	
	/**
	 * @brief the function is extending the userModel crypting the password using 
	 * 		  md5 method; That is why is checking through $sql what the contains is;
	 * 		  
	 * 
	 * @param string $username
	 * @param string $password
	 * 
	 * return	string array[] boolean $this->loggedIn as true or not true and if true
	 * 			than is creating $this->user that is a model from userModel;
	 */
	public function login( $username, $password )
	{
		
		$password = md5( trim( $password ) );
		//die( $password ); 
		$userModel = new UsersModel();
		
		if( $this->user = $userModel->login($username, $password))
		{
			$this->loggedIn = true;
		}
	}

	/*
	 * @brief	function isLoggedIn checked if true print $results:
	 * 			if true print everything in $this->user 
	 */
	public function isloggedIn(){
		
		if( $this->loggedIn )
		{
			echo "User is logged in";
			var_dump($this->user->getAge());
			print_r( $this->user);
			
		}else
		{
			echo "Invalid login parameters";
		}
	}

	/**
	 * @brief	if all true take all the values from the html and print 
	 * 
	 * @param	string	$form
	 */
	public function renderLoginForm()
	{
		$form	= file_get_contents( __DIR__ . '/../Views/Login.html' );
		
		print( $form );
	}
}
