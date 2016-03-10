<?php

include_once ('TrickDeAbstract.php');

class OneTrickConcrete extends TrickDeAbstract
{
	public function trick( $whatever )
	{
		$this->storeHere = " An abstract property ";
		return $whatever . $this -> storeHere;
	}

}

$worker = new OneTrickConcrete();
echo $worker -> trick( "From an abstract origin..." );



?>
