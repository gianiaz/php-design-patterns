<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class CourierNotifierFactory implements NotifierFactory
{
    public static function getNotifier($notifier, $to)
    {
        if (empty($notifier)) {
            throw new Exception('No notifier passed');
        }
        switch ($notifier) {
            case 'Post':
                return new Post($to);

                break;
            default:
                throw new Exception('Notifier invalid');
                break;
        }
    }
}
