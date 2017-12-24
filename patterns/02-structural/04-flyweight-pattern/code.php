<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

require_once 'Shape.php';
require_once 'Circle.php';
require_once 'ShapeFactory.php';

$colours = ['red', 'blue', 'yellow'];

$factory = new ShapeFactory();

for ($i = 0; $i <= 100; ++$i) {
    $randomColour = $colours[array_rand($colours)];
    $circle = $factory->getCircle($randomColour);
    $circle->setX(random_int(0, 100));
    $circle->setY(random_int(0, 100));
    $circle->setRadius(100);

    $circle->draw();
}
