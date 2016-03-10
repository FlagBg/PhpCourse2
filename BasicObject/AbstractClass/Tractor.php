<?php
/**
 *
 * @brief	Traktor is an object that moves and passed specific distance;
 **/

include_once 'AbstractVehicle.php';

 class Tractor extends AbstractVehicle
{
	/**
	 * 
	 * @brief calculate the average speed;
	 * 
	 * @param double;
	 */
	protected $averageSpeed;
	
	public function getAverageSpeed( $time ) 
	{
		return 20;
	}
}

