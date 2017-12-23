<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

interface MarketCompare
{
    public function __construct(float $limit, float $excess);

    public function getAnnualPremium();

    public function getMonthlyPremium();
}
