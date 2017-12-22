<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class RomeToyFactory implements ToyFactory
{
    private $location = 'Roma';

    public function makeMaze()
    {
        return new Toys\RomeMazeToy();
    }

    public function makePuzzle()
    {
        return new Toys\RomePuzzleToy();
    }
}
