<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class PizzaBuilder
{
    public $size;
    public $cheese;
    public $mushrooms;
    public $bacon;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function cheese(bool $present): self
    {
        $this->cheese = $present;

        return $this;
    }

    public function mushrooms(bool $present): self
    {
        $this->mushrooms = $present;

        return $this;
    }

    public function bacon(bool $present): self
    {
        $this->bacon = $present;

        return $this;
    }

    public function build()
    {
        return $this;
    }
}
