<?php

 class Initialize 
{
	function start( MovableInterface $start )
	{
		$start->move();
	}

	function stopping( MovableInterface $stopping )
	{
		$stopping->stopping();
	}
	
	function turning( MovableInterface $turning )
	{
		$turning->turning();
	}
}
