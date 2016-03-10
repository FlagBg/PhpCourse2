<?php

interface MovableInterface
{
	public function getDistance( $time );
}


class Car implements MovableInterface
{
	protected $averageSpeed = 100;
	
	public function getDistance( $time )
	{
		$result = $this->averageSpeed * $time;
		
		return $result;
		
	}
}

class Tractor implements MovableInterface
{
	protected $avarageSpeed = 20;
	
	public function getDistance( $time )
	{
		$result = $this->averageSpeed * $time;
		
		return $result;
	}
}


abstract class Vehicle
{
	/**
	 * @brief this abstract function takes object every Average speed and calculate the distance according to math;
	 *
	 * @param int	$avarageSpeed;
	 */
	abstract public function getAverageSpeed();
	
	public function getDistance( $time )
	{
		$result = $this->getAverageSpeed() * $time;
		
		return $result;
	}
		
}

class Ferrari extends Vehicle
{	
	public function getAverageSpeed()
	{	
		return 170;
	}
}

class JohnDear extends Vehicle
{
	public function getAverageSpeed()
	{
		return 10;
	}
}
 
$car = new Car();
print $car-> getDistance( 2 );

$Ferrari = new Ferrari();
$Tractor = new JohnDear();

echo "Speed for 1 hour " . $Ferrary->getDistance( 2 );
echo "Speed for 1 hour " . $Tractor->getDistance( 1 );

