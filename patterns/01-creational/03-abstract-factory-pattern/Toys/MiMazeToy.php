<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

namespace Toys;

class MiMazeToy extends MazeToy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $this->size = 9;
        $this->pictureName = 'Milan Maze';
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getPictureName(): string
    {
        return $this->pictureName;
    }
}
