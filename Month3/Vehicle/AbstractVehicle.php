<?php

include_once 'MovableInterface.php';

/**
 * 
 * @brief 	doing the Abstraction, because all type of cars and traktors are Vehicles. They have got AvarageSpeed and Distance as param; We implement the interface
 *
 */

abstract class AbstractVehicle implements MovableInterface
{
	
	abstract public function getMaxSpeed();
	
	public function getMaxDistance( $time )
	{
		/**
		 * @brief 	that function calclulate the maxDistance according the time
		 * 
		 * @param	$time
		 */
		return $this->getMaxSpeed() * $time;
		
		
			
	}
	
}