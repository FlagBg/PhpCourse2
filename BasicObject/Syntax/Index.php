<?php

require_once 'phptest.php';

$test = new Test();

$test->printA( 33 );
$test->printA( 44 );
$testA = new Test();
$test->printA( 48 );
$test->secondCondition( "Sally" );
$test1 = new test();
$test->secondCondition( "Bob" );
$test->switchCase( "Bob" );
$test->switchCase( "Linda" );
$test->switchCase( "Angel" );
$test1 ->printA( 33 );

	$users[110] = 'Washington';
	$users[111] = 'Plovdiv';
	$users[112] = 'Sofia';
	
	$usersIds = array_key_exists($users, 'Washington');
	var_dump($usersIds);
	var_dump($users);
	

// $users[923] = 'TelRev';
// $users[100] = 'Skellington';
// $users[1202] = 'CapnBlack';
// $userids = array_keys($users);
// var_dump($userids);

// 	$names = array( "Johnny", "Timmy", "Bobby", "Sam", "Tammy", "Danny", "Joe" );
// 	$firstName = array_shift( $names );
// 	$firstName = array_push($names, $names);
// 	var_dump( $names ); 
// sleep(5);

// function doFoo( $name )
// {
// 	return "Name is: " . $name;
// }
// doFoo("Ggggooooo");
// doFoo("BBBBB");

// for ( $i = 1; $i < 3; $i = $i + 1)
// {
// 	for ( $j = 1; $j < 4; $j = $j + 1)
// 	{
// 		for ( $k = 1; $k < 3; $k = $k + 1)
// 		{
// 			print "I: $i, J: $j, K: $k\n";
// 		}
// 	}
// }

 $foo = "Variable!\n";
 $bar = "foo";
 $wom = "bar";
 $bat = "wom";
 sleep(10);
 print $foo;
 print $$bar;
 print $$$wom;
 print $$$$bat;
 sleep(10);
 $str = "i like to program in PHP";
 $strA = "Hi";
 $strB = "OOOPs";
 
 $a = strtoupper( $str );
 $b = strtolower( $str );
 $c = ucfirst( $str );
 $d = ucwords( $str );
 $e = ucwords(strtolower( $str ));
 
  print $a;
  print $b;
  print $c;
  print $d;
  print $e;
  
  sleep(10);
  printf("$str,  $strA, $strB", $str, $strB, $strA);
  
 
//  define ( "CURRENT_TIME", time(), true);
//  print CURRENT_TIME;
 
//  print time();
//  print " ";
//  $time = time();
//  print " ";
//  print $time;
//  print " ";
 
//  print date("H:i") . "\n";
//  print "The day yesterday was " . date("l", time() - 86400) . "\n";
//  print "The year is " . date("Y") . "\n";
//  print date("jS of F Y") . "\n";
//  print "My birthday is on a " . date("l", strtotime("22 Dec 2004")) . " this year.\n";
//  print date("\M\y b\i\\r\\t\h\d\a\y \i\s o\\n \a l \\t\h\i\s \ye\a\\r. ", strtotime("22 Dec 2004")) . "\n";
 
 