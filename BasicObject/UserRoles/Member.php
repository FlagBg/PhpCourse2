<?php

include_once 'User.php';
class Member extends User

{
	public $dateAdded;
	public $type = 'Member';
	
	
	public function __construct($name, $email, $type, $dateAdded )
	{
		// 		$this->name = 			$name;
		// 		$this->email= 			$email;
		// 		$this->type = 			$type;
		// 		$this->permissionLevel= $permissionLevel;
		parent::__construct($type, $dateAdded);
		$this->dateAdded = dateAdded;
		$this->type = type;
	}
	
	public function getType()
	{
		return "Hi from " . parent::getType();
	}
}