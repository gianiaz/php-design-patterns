<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class ShapeFactory
{
    private $shapeMap = [];

    public function getCircle(string $colour)
    {
        $circle = 'Circle_'.$colour;
        if (!isset($this->shapeMap[$circle])) {
            echo 'Creating a '.$colour.' circle';
            echo "\n";
            $this->shapeMap[$circle] = new Circle($colour);
        }

        return $this->shapeMap[$circle];
    }
}
