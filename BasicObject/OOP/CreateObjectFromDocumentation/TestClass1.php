<?php
/**
 *@brief  
 */
class TestClass1 extends TestClass
{
	protected $protected = 'Protected2';

		function printHello()
		{
			echo $this->public;
			echo $this->protected;
			echo $this->private;
		}

}

$object2 = new TestClass1();

echo $object2->public;
echo $object2->protected;
echo $object2->private;

$obj2-printHello();

		