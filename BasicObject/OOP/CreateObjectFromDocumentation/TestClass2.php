<?php

include_once 'TestClass.php';
include_once 'TestClass1.php';

class TestClass2 extends TestClass1
{
	private $priv;//private promenliva

	public function __construct( $priv )//constructor
	{
		$this->priv = $priv; //accessor;	
	}
	
	private function bar()
	{
		echo 'accessed private method.';
	}
	
	public function bar1(TestClass2 $other)
	{
		//changing and assigning propery:
		$other->priv = 'CHANGED!';
		var_dump($other->priv);
		echo '123123213213';
		//calling the private method
		$other->bar();
	}
}

/**
 *
 $firstName = "David";
 if ( $loggedIn)
 {
 print "Welcome, $firstName";
 }
 else
 {
 print "stranger";
 }

 //probvam si getter(accessor) zaradi $name;
 class Entree
 {
 private $name;
 protected $ingredients = array();

 //ya da vidim sega get/set in php;
 public function getName()
 {
 return $this->name;
 }

 //__construct
 public function __construct( $name, $ingredients )
 {
 if (! is_array( $ingredients ))
 {
 throw new Exception( '$ingredients must be in array' );
 }
 $this->name = $name;
 $this->ingredients = $ingredients;
 }

 public function hasIngredients($ingredient)
 {
 return in_array($ingredient, $this ->ingredients);
 }

 }

 //tova e bez convenciyata,(constructor v subclasses; Sega da go analize;)
 class ComboMeal extends Entree
 {
 public function hasIngredient($ingredient)
 {
 foreach ( $this->ingredients as $entree)
 {
 if ( $entree->hasIngredient( $ingredient))
 {
 return true;
 }
 }
 return false;
 }
 }


 class Entree
 {
 public $name;
 public $contains = array();

 public function __construct( $name, $contains )
 {
 $this->name = $name;
 $this->contains = $contains;
 }

 public function hasContains( $contains )
 {
 return in_array( $name, $this->contains );
 }
 }


 $coffee = new Entree( 'Double Espresso', array( 'arabica', 'brasilia' ));
 $breakfast = new Entree( 'Egg&Bacon', array( 'eggs', 'potatoes' ));

 var_dump ($coffee);
 print_r($coffee);
 print_r($breakfast);
 print ('$coffee');
 print "I am the  $coffee";
 print "I am the $breakfast";
 printf($coffee);



 echo $breakfast;

*/
