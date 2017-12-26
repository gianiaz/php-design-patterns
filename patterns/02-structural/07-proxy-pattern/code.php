<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

require_once 'AnimalFeeder.php';
require_once 'AnimalFeederProxy.php';

require_once 'AnimalFeeders/Cat.php';
$felix = new PetShop\AnimalFeederProxy('Cat', 'Felix');
echo $felix->displayFood(1);
echo "\n";
echo $felix->dropFood(1, true);
echo "\n";

require_once 'AnimalFeeders/Dog.php';
$brian = new PetShop\AnimalFeederProxy('Dog', 'Brian');
echo $brian->displayFood(1);
echo "\n";
echo $brian->dropFood(1, true);
echo "\n";
