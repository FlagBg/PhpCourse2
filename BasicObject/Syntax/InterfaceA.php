<?php

//the other way round:

interface Boat
{
	function a();
	function b();
	function c();
}

interface Plane extends Boat
{
	function d();
	function e();
	function f();
}

class BoatPlane implements Plane
{
	public function a()
	{
		
	}
	
	public function b()
	{
		
	}
	
	public function c()
	{
		
	}
	
	public function d()
	{
		
	}
	
	public function e()
	{
		
	}
	
	public function f()
	{
		
	}
}

$obj1 = new BoatPlane();