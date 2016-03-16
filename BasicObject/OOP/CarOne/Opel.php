<?php

include_once 'InterfaceCarOne.php';
class Opel implements InterfaceCarOne
{
	protected $engineSize   = 	1800;	
	protected $distance		=	2;
	protected $time;
	protected $runningFuel;
	protected $doors;
	
	
	public function stopping()
	{
		return "Stopping ";
	}
	
	public function turning()
	{
		return "Turning ";
	}
	
	protected function createDoors()
	{
		$this->doors = $doors;
	}
	
	protected function setDoors( $doors )
	{
		$this->doors = $doors;
	}
	
	protected function allOpelHasDoors()
	{
		$this->doors = $this->doors + 2;
	}
	
	public function getDoors()
	{
		$this->allOpelHasDoors();
		return $this->doors;
	}
	
	
	
}
