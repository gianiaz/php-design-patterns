<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class MilanToyFactory implements ToyFactory
{
    private $location = 'Milano';

    public function makeMaze()
    {
        return new Toys\MIMazeToy();
    }

    public function makePuzzle()
    {
        return new Toys\MIPuzzleToy();
    }
}
