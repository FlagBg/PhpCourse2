<?php
/**
 * 
 * @author User
 *
 */
class Circle
{
	/**
	 * @param Pi = const;
	 * @param double $radius;
	 * @param float $area;
	 * @param integer 
	 * @var unknown
	 */	
	const Pi = 3.14159;
	public $radius;
	//public $area;
	//public $circumference = perimeter;
	public $diameter;
	
	public function __construct( $radius )
	{
		$this->radius = $radius;
	}
	
}
