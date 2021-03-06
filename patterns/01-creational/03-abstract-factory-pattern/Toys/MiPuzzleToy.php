<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

namespace Toys;

class MiPuzzleToy extends PuzzleToy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $rand = rand(1, 3);
        switch ($rand) {
            case 1:
                $this->size = 3;

                break;
            case 2:
                $this->size = 6;

                break;
            case 3:
                $this->size = 9;

                break;
        }
        $this->pictureName = 'Milan Puzzle';
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
