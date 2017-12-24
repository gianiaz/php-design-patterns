<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class Circle implements Shape
{
    private $colour;
    private $x;
    private $y;
    private $radius;

    public function __construct($colour)
    {
        $this->colour = $colour;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function draw()
    {
        echo 'Drawing circle wich is '.$this->colour.' at ['.$this->x.', '.$this->y.'] of radius '.$this->radius;
        echo "\n";
    }
}
