<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class InstantMessenger implements Messenger
{
    public function send(string $Body): void
    {
        echo 'SMS: '.$Body;
    }
}
