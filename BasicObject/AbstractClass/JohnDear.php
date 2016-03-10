<?php
include_once 'AbstractVehicle.php'
		;
class JohnDear extends AbstractVehicle
/**
 *
 * @brief		Object JohnDear that returns $time using the
 * method in Abstract class;
 *	@param double;
 */
{
	public function getAverageSpeed()
	{
		return 10;
	}
}