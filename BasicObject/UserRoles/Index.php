<?php
include_once 'User.php';
include_once 'Admin.php';
include_once 'Member.php';

$user1 = new Admin('Angel', 'angelike_80@yahoo.com', 'Member', 3 );

print $user1->name;

echo $user1->getType();

$user2 = new Member('Ivan', 'Alabala@ca.com', 'Member', '12.03.2013');

//echo $user2->getType();


/* 

$brad = new User( 31 );
echo $brad->getPassword('somethingelse');
echo $brad->getPassword('getit');



//$brad->getAge();
echo 'hi';
 */