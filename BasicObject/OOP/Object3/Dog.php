<?php

include_once 'MovableInterface.php';


class Dog implements MovableInterface
{
	public function move()
	{
		echo "I am the dog and my speed is 10km/h";
	}
	
	public function stopping()
	{
		echo "I am a dog and I'm stopping";
	}
	
	public function turning()
	{
		echo "The Dog is Stopping";
	}
	
// 	public function bite()
// 	{
// 		echo "I am dog and I can Bite";	
// 	}
 }

