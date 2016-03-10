cd<?php

include_once 'MovableInterface.php';

class Car implements MovableInterface
{
	public function move()
	{
		echo "I am a car and my speed is 80km/h";
	}
	
	public function turning()
	{
		echo "I am the car and I am turning left and right";
	}
	
	public function stopping()
	{
		echo "I am the Car and I'm stopping";
	}
	
}
 