<?php

include_once 'Address.php';
include_once 'Person.php';


$rasmus = new person();
$rasmus ->setName( 'Rasmus Lerdorf' );
$rasmus ->setCity( 'Plovdiv' );

$alibaba = clone $rasmus;
$alibaba->setName('Razboinik E');
$alibaba->setCity(' Bruxell');

print $rasmus->getName(). ' lives in ' . $rasmus->getCity() . '.';
print $alibaba->getName(). ' lives in' . $alibaba->getCity() . '.';


