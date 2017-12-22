<?php
// 17/12/17, 7.22
// @author : Giovanni Battista Lenoci <gianiaz@gmail.com>

abstract class Notifier
{

    protected $to;

    /**
     * Notifier constructor.
     * @param $to
     */
    public function __construct(string $to)
    {
        $this->to = $to;
    }

    abstract public function validateTo(): bool;

    abstract public function sendNotification(): string;

}