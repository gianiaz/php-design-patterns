<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class Tablet extends Device
{
    public function send(string $Body)
    {
        $Body .= "\n\n Sent from a Tablet";

        return $this->sender->send($Body);
    }
}
