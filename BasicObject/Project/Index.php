<?php




include_once 'Electromer.php';
include_once 'InterfaceElectromer.php';
include_once 'Users.php';
include_once 'Admin.php';


$el = new Electromer(33, 22);

//print "The price for the Day tariff is: " . $el->priceDayRateValue();
print "The price for the Night tariff is: " .$el->priceNightRateValue();
//print $el;


$admin = new Admin('Ivan', 'Ivanov', 22, 'admin', '3');
print " My first Name is: " . $admin->getFirstName() . " ";
print "I am  usertype: " . $admin->getType() . " ";
print "My level of persmission is " . $admin->getPermissionLevel() . " ";
print "My age is: " . $admin->getAge() . " ";

