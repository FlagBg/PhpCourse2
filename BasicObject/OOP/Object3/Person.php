<?php

include_once 'MovableInterface.php';

class Person implements MovableInterface
{
	
	public function move()
	{
		echo "I am a Person and my speed is 5km/h";
	}
	
	public function stopping()
	{
		echo "I am Person and I'm stopping right now!";
	}
	
	public function turning()
	{
		echo "I am Person and I'm doing left and right!";
	}
	
	
}


