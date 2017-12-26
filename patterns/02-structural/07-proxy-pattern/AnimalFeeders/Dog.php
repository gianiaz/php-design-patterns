<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

namespace PetShop\AnimalFeeders;

class Dog
{
    /**
     * @var string
     */
    private $petName;

    public function __construct(string $petName)
    {
        $this->petName = $petName;

        if (strlen($petName) > 10) {
            throw new \Exception('Name too long');
        }
    }

    public function dropFood(int $hungerLevel, bool $water = false): string
    {
        return $this->selectFood($hungerLevel).($water ? ' with water' : '');
    }

    public function displayFood(int $hungerLevel): string
    {
        return $this->selectFood($hungerLevel);
    }

    protected function selectFood(int $hungerLevel): string
    {
        if (3 == $hungerLevel) {
            return 'chickend and vegetables';
        }

        if (date('H') < 10) {
            return 'turkey and beef';
        }

        return 'chickend and rice';
    }
}
