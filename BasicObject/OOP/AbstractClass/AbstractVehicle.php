<?php
/**
 * @brief	Abstract class that holds GetAverageSpeed for all objects by time.
 * It implements the Interface method, which holds exactly how it comes. Absolute path
 * is provided
 */
include_once 'MovableInterface.php';

abstract class AbstractVehicle implements MovableInterface
{
	abstract public function getAverageSpeed();
	
	public function getDistance( $time )
	{
		return $this-> getAverageSpeed() * $time;
		
		return $result;
	}
}