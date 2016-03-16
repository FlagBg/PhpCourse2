<?php
include_once 'Character.php';
include_once 'Human.php';

$user = new Human();
$user->attack();
$user->setup(1, 2);
