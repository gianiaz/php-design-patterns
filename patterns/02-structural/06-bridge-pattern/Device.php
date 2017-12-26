<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

abstract class Device implements Transmitter
{
    protected $sender;

    public function setSender(Messenger $sender)
    {
        $this->sender = $sender;
    }
}
