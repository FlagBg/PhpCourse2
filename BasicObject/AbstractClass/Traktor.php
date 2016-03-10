<?php
include_once 'AbstractVehicle.php';

class Tractor extends AbstractVehicle
{
	protected $averageSpeed;
	
	public function getAverageSpeed()
	{
		return 20;
	}
	
}