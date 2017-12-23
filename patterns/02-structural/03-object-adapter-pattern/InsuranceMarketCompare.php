<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class InsuranceMarketCompare implements MarketCompare
{
    private $premium;

    /**
     * InsuranceMarketCompare constructor.
     */
    public function __construct(float $limit, float $excesss)
    {
        $this->premium = new Insurance($limit, $excesss);
    }

    public function getAnnualPremium(): float
    {
        return $this->premium->annualPremium();
    }

    public function getMonthlyPremium(): float
    {
        return $this->premium->monthlyPremium();
    }
}
