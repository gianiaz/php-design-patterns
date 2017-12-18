<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class Post extends Notifier
{
    public function validateTo(): bool
    {
        if (2 !== substr_count($this->to, ',') + 1) {
            return false;
        }

        return true;
    }

    public function sendNotification(): string
    {
        if (false === $this->validateTo()) {
            throw new Exception('Invalid address');
        }
        $notificationType = get_class($this);

        return 'This is a '.$notificationType.' to '.$this->to.'.';
    }
}
