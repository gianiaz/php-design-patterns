<?php
// 17/12/17, 7.27
// @author : Giovanni Battista Lenoci <gianiaz@gmail.com>

class Email extends Notifier
{
    public function __construct($to, $from)
    {
        parent::__construct($to);

        if (isset($from)) {
            $this->from = $from;
        } else {
            $this->from = 'Anonymous';
        }
    }


    public function validateTo(): bool
    {
        $isEmail = filter_var($this->to, FILTER_VALIDATE_EMAIL);

        return $isEmail ? true : false;
    }

    public function sendNotification(): string
    {
        if ($this->validateTo() === false) {
            throw new Exception('Invalid email address');
        }

        $notificationType = get_class($this);

        return 'This is a '.$notificationType.' to '.$this->to.' from '.$this->from.'.'."\n";
    }


}
