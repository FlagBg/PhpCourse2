<?php

include_once 'AbstractVehicle.php';

class car extends AbstractVehicle
{
	/**
	 * 
	 * @brief		Object Car that returns $time using the 
	 * method in Abstract class;
	 */
	protected $averageSpeed = 120;
	
	public function getAverageSpeed()
	{

		return 100;
	}
}

