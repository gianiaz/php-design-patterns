<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

interface Transmitter
{
    public function setSender(Messenger $sender);

    public function send(string $body);
}
