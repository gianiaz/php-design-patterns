<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class SMS implements Messenger
{
    public function send(string $Body)
    {
        echo 'SMS: '.$Body;
    }
}
