<?php
include_once 'User.php';

class Admin extends User
{
	public $permissionLevel;
	public $type = 'Admin';
	
	
public function __construct($name, $email, $type, $permissionLevel)
 	{
// 		$this->name = 			$name;
// 		$this->email= 			$email;
// 		$this->type = 			$type;
// 		$this->permissionLevel= $permissionLevel;
	 	
		parent::__construct($name, $email);
	 	$this->permissionLevel = $permissionLevel;
	 
	}
	
	public function getType()
	{
		return "This is " . parent::gettype();
	}
	
}