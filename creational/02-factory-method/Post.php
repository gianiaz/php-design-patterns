<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class Post extends Notifier
{
    public function validateTo(): bool
    {
        $address = explode(',', $this->to);
        if (2 !== substr_count($address, ', ') + 1) {
            return false;
        }

        return true;
    }

    public function sendNotification(): string
    {
        if (false === $this->validateTo()) {
            throw new Exception('Invalid address');
        }
    }
}
