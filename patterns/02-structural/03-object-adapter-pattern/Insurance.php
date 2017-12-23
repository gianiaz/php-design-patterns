<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class Insurance
{
    /**
     * @var float
     */
    private $limit;
    /**
     * @var float
     */
    private $excess;

    /**
     * Insurance constructor.
     */
    public function __construct(float $limit, float $excess)
    {
        if ($excess >= $limit) {
            throw new Exception('Excess must be less than premium.');
        }
        $this->limit = $limit;
        $this->excess = $excess;
    }

    public function monthlyPremium(): float
    {
        return ($this->limit - $this->excess) / 200;
    }

    public function annualPremium(): float
    {
        return $this->monthlyPremium() * 11.5;
    }
}
