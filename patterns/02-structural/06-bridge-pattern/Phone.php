<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class Phone extends Device
{
    public function send(string $Body)
    {
        $Body .= "\n\n Sent from a phone.";

        return $this->sender->send($Body);
    }
}
