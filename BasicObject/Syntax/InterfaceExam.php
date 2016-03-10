<?php

interface Boat
{
	function a();
	function b();
	function c();
}

interface Plane
{
	function d();
	function e();
	function f();
}

class BoatPlane implements Boat, Plane
{
	public function a()
	{
		print " Hi ";
	}
	public function b()
	{
		return " 1 ";						
	}
	public function c()
	{
		echo "Second Hi";
	}
	public function d()
	{
		echo "Ala Bala";
	}
	public function e(){}
	public function f(){}
	
}

$obj = new BoatPlane();
$obj->a();
$obj->c();