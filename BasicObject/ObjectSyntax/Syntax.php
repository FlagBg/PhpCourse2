<?php

$juices = array("apple", "orange", "koolaid1" => "purple");

echo "He drank some $juices[0] juice." .PHP_EOL;
echo "He drank some $juices[1] juice." .PHP_EOL;
echo "He drank some $juices[koolaid1] juice." .PHP_EOL;

class people {
	public $john = "John Smith";
	public $jane = "Jane Avrora";
	public $robert = "Robert Sammarsand";
	
	public $smith = "Smith";
	
}

$people = new people();
echo "asfasfafasfasfasfas";

echo " $people->john drank some $juices[0] juice. " .PHP_EOL;
echo " $people->jane  drank some $juices[1] juice. " .PHP_EOL;
echo " $people->jane than said hello to $people->jane. ".PHP_EOL;
echo " $people->robert drank some $juices[2] juice. " .PHP_EOL;
echo " $people->robert greeted the two $people->jane " .PHP_EOL;


?>



<!-- /* -->
<!-- class stdObject{ -->
	
<!-- 	public function __construct(array $arguments = array()){ -->
<!-- 		if(!empty($arguments)) { -->
<!-- 			foreach ($arguments as $property => $argument){ -->
<!-- 				$this->{property} = $argument; -->
<!-- 			} -->
<!-- 		} -->
<!-- 	} -->

<!-- 	public function __call($method, $arguments){ -->
<!-- 		$arguments = array_merge(array("stdObject"=> $this), $arguments); -->
<!-- 		if (isset($this->{$method}) && is_callble($this->{$method})){ -->
<!-- 			return call_user_array($this->{$method}, $arguments); -->
			
<!-- 		}	else { -->
<!-- 			throw new Exception("Fatal error: Call to undefined method stdObject::{$method}()"); -->
<!-- 		} -->
		
<!-- 	} -->
<!-- } -->
				


<!-- $array = array( -->
	
<!-- 		"foo"=> "bar", -->
<!-- 		42 => 24, -->
<!-- 		"multi"=> array( -->
<!-- 			"	dimensional" => array( -->
<!-- 			"array" => "foo" -->
<!-- 		) -->
<!-- 	)		 -->
<!-- ); -->

<!-- var_dump($array["foo"]); -->
<!-- var_dump($array[42]); -->
<!-- var_dump($array["multi"]["dimensional"]["array"]); -->


<!-- $largeNumber = 234214123421; -->

<!-- var_dump($largeNumber); -->

<!-- 	echo <<<EOD -->

// ...all sorts oh xml goes here...
// Nothing will affect the output of this code until:
// EOD;
 
// 	$myOutput = <<<MYHTMLSAFEOUTPUT


<!-- <html> -->
<!-- 	<title>PHP EXAMPLE</title> -->
<!-- 	<body> -->
<!-- 		<p>...all sorts goes here...</p> -->
<!-- 	</body> -->
<!-- </html> -->

<!-- MYHTMLSAFEOUTPUT; -->
<!-- echo $myOutput; -->
<!-- 	?> -->
<!-- */	 -->