<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

namespace Toys;

class RomeMazeToy extends MazeToy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $this->size = 9;
        $this->pictureName = 'Rome Maze';
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
