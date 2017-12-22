<?php
// 17/12/17, 7.45
// @author : Giovanni Battista Lenoci <gianiaz@gmail.com>

class ElectronicNotifierFactory implements NotifierFactory
{

    public static function getNotifier($notifier, $to)
    {
        if (empty($notifier)) {
            throw new Exception('No notifier passed');
        }

        switch ($notifier) {
            case 'SMS':
                return new SMS($to);
                break;
            case 'Email':
                return new Email($to, 'gianiaz');
                break;
            default:
                throw new Exception('Notifier invalid');
                break;
        }
    }

}