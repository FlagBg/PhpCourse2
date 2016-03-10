<?php

class User
{
	
	public $name;
	public $email;
	
	public function __construct( $name, $email )
	{
		$this->name= $name;
		$this->email = $email;
		//$this->type = $type;
	}
	
	public function getType()
	{
		return $this->type;
	}
	
	
	
}
/* 
	//public $age;
	private $pasword;
	
	public function __construct( $age )
	{	
		$this->age = $age;
		$this->pasword = 'asdfasdfasdf';
	} 
	
	private function getAge()
	{
		echo "Age " . $this->age;
	}
	
	public function getPassword($hint)
	{
		if($hint == 'getit')
		{
			return $this->pasword;
		}
		else
		{
			return 'You don\'t have permission';
		}
	}
}


	
	 */
	
	
	
	
	
	
	
	/*
	 * 
	 
	public function __construct( $me )
	{
		echo 'Hi from constr ';
		echo 'Hi from ' . $me; 
	}
	
	
	
}

$angel1 = new User();
$angel = new User('Angel');
$ivan = new User('Ivan');
$john = new User('John');

 */
	?>
