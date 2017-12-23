<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

/**
 * Class ATMWithPhoneTopUp.
 */
class ATMWithPhoneTopUp extends ATM
{
    /**
     * @param float $amount
     * @param int   $time
     *
     * @throws Exception
     *
     * @return string
     */
    public function getTopUp(float $amount, int $time): string
    {
        if (true === $this->reduceBalance($amount)) {
            return $this->generateTopUpCode($amount, $time);
        }

        throw new Exception("Couldn't withdraw money.");
    }

    /**
     * @param float $amount
     * @param int   $time
     *
     * @return string
     */
    private function generateTopUpCode(float $amount, int $time): string
    {
        return $amount.$time.rand(0, 10000);
    }
}
