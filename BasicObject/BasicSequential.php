<?php

class OneTrick
{
	private $storeHere;
	
	public function trick( $trickDe )
	{
		$this-> storeHere= $trickDe;
		
		return $this->storeHere;
		
	}	

}

$doIt = new OneTrick();
$dataNow = $doIt->trick( "This is perfect. " );
echo $dataNow;



$first = 10;
$second = 20;
$total = $first + $second;
echo $total;

function addSum( $firstOne,$secondOne )
{
	$totalOne = ( $firstOne + $secondOne );
	echo $totalOne;
}



addSum(40, 20) ;
?>
