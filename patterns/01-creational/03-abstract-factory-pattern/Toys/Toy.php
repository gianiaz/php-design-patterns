<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

namespace Toys;

abstract class Toy
{
    abstract public function getSize(): int;

    abstract public function getPictureName(): string;
}
