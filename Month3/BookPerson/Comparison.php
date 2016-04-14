<?php

/**
 * @brief basic comparisons
 * 
 * @author User
 *
 */
 class Comparisons
 {
	/**
	 * @var string $name
	 */
	public $name = 'Alex';
	
	/**
	 * @var integer $age
	 */
	//public 
	public $age = 21;
	
	/**
	 * @var boolean = $status;
	 */
	//public S
	
	/**
	 * @brief 	when executed doing the basic comparisons
	 */
	public function firstComparisons( )
 	{
		//$status = false;
	//$age = 21;
		
		if ( $age >= 21 )
		{
			$status = true;
		}
		if ( $status == true )
			{
				print 'You are allowed';
			}
		else if ( $status ==false )
		{
			{
				print 'Sorry not allowed';
			}
		}
	}
	
	public function secondComparisons()
	{
		$age = 21;
		$name = 'Alex';
		
		if ($name != 'Alex' )
		{			
			print 'TRUE';
		}
		else 
		{
			print 'NOT TRUE ';
		}
		if ( $age>18 )
		{
			print ' The Age is greater than 18';
		}
		else
		{
			print 'The age is less 18';
		}
	}
}

$comparison = new Comparisons( $age, $name );
var_dump( $comparison);
$comparison->firstComparisons();
$comparison->secondComparisons();
