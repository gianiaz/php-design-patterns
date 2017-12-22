<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class Pizza
{
    private $size;
    private $cheese;
    private $mushrooms;
    private $bacon;

    public function __construct(PizzaBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->bacon = $builder->bacon;
        $this->mushrooms = $builder->mushrooms;
    }

    public function show()
    {
        $recipe = $this->size.' cm pizza with the following toppings: ';
        $recipe .= $this->cheese ? 'cheese, ' : '';
        $recipe .= $this->mushrooms ? 'mushrooms, ' : '';
        $recipe .= $this->bacon ? 'bacon, ' : '';

        return $recipe;
    }
}
