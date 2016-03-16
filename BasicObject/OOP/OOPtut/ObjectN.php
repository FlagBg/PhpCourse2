<?php

class ObjectN
{
	private $name;
	private $job;
	private $age;
	
	public function __construct($name, $job, $age)
	{
		$this->name = $name;
		$this->job =  $job;
		$this->age = $age;
	}
	
	public function changeJob()
	{
		$this->job = $newJob;
	}
	
	public function happyBirthday()
	{
		++$this->age;
	}
}

$person1 = new ObjectN("Richard", "IT", 31);
$person2 = new ObjectN("Ivan", "FE", 24);


print_r($person1, true);
echo "Person 2: ", print_r($person2, TRUE), " ";

