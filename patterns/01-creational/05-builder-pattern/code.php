<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

require_once 'Pizza.php';
require_once 'PizzaBuilder.php';

$pizzaRecipe = (new PizzaBuilder(30))->bacon(true)->cheese(true)->mushrooms(true)->build();

$order = new Pizza($pizzaRecipe);
echo $order->show();
