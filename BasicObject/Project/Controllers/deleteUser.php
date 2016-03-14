<?php

include_once '../Models/UsersModel.php';

class DeleteUser
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
	
	public function create(){
		$deleteM = new UsersModel();
	
		$userModel->createUser( $this->userData );
	}
	
}