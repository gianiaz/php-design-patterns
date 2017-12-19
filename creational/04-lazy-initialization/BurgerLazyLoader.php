<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class BurgerLazyLoader
{
    private static $instances = [];

    public static function getBurger(bool $cheese, bool $chips): Burger
    {
        if (!isset(self::$instances[$chips.$chips])) {
            self::$instances[$cheese.$chips] = new Burger($cheese, $chips);
        }

        return self::$instances[$cheese.$chips];
    }

    public static function getBurgerCount(): int
    {
        return count(self::$instances);
    }
}
