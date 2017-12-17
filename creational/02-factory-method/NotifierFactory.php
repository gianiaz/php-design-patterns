<?php
// 17/12/17, 7.44
// @author : Giovanni Battista Lenoci <gianiaz@gmail.com>

interface NotifierFactory
{

    public static function getNotifier($notifier, $to);

}