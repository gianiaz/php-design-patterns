<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

require_once 'ToyFactory.php';
require_once 'Toys/Toy.php';
require_once 'Toys/MazeToy.php';
require_once 'Toys/PuzzleToy.php';
require_once 'MilanToyFactory.php';
require_once 'Toys/MiMazeToy.php';
require_once 'Toys/MiPuzzleToy.php';
$MilanToyFactory = new MilanToyFactory();
var_dump($MilanToyFactory->makeMaze());
echo "\n";
var_dump($MilanToyFactory->makePuzzle());
require_once 'RomeToyFactory.php';
require_once 'Toys/RomeMazeToy.php';
require_once 'Toys/RomePuzzleToy.php';
$romeToyFactory = new RomeToyFactory();
var_dump($romeToyFactory->makeMaze());
echo "\n";
var_dump($romeToyFactory->makePuzzle());
echo "\n";
