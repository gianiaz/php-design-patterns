<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

/**
 * Class ATM.
 */
class ATM
{
    /**
     * @var float
     */
    private $balance;

    /**
     * ATM constructor.
     *
     * @param $balance
     */
    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    /**
     * @param float $amount
     *
     * @throws Exception
     *
     * @return float
     */
    public function withdraw(float $amount): float
    {
        if (true === $this->reduceBalance($amount)) {
            return $amount;
        }

        throw new Exception("Couldn't withdraw money.");
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $amount
     *
     * @return bool
     */
    protected function reduceBalance(float $amount): bool
    {
        if ($amount >= $this->balance) {
            return false;
        }
        $this->balance = ($this->balance - $amount);

        return true;
    }
}
