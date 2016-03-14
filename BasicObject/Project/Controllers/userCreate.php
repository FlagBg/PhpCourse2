<?php

include_once '../Models/UsersModel.php';

class UserCreate
{
	protected $userData;	
	
	public function __construct()
	{
		if( !empty( $_POST ) )
		{
			$this->userdata = array(
				'username' => $_POST['username'], 
				'password' => md5(trim($_POST['password'])), 
				'role_id' => $_POST['role_id'], 
				'fname' => $_POST['fname'], 
				'lname' => $_POST['lname'], 
				'age' => $_POST['age'], 
			);
		}
	}
	
	public function create()
	{
		$userModel = new UsersModel();
	
		$userModel->createUser( $this->userData );
	}
	
	public function renderForm()
	{
		$form	= file_get_contents( __DIR__ . '/../Views/createUser.html' );
	
		print( $form );
	}
	
}


