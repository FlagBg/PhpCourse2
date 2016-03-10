<?php

include_once 'AbstractVehicle.php';
/**
 *
 * @brief		Object Ferari that returns $time using the
 * method in Abstract class;
 *	@param double;
 */
class Ferrari extends AbstractVehicle
{
	public function getAverageSpeed()
	{
		return 170;
	}
}