<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class Song implements Music
{
    public $id;
    /**
     * @var string
     */
    public $name;

    public function __construct(string $name)
    {
        $this->id = uniqid('M', true);
        $this->name = $name;
    }

    public function play()
    {
        printf("Playing song # %s, %s.\n", $this->id, $this->name);
    }
}
