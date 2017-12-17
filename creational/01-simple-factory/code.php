<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

require_once 'Notifier.php';
require_once 'NotifierFactory.php';

require_once 'SMS.php';
$mobile = NotifierFactory::getNotifier('SMS', '3477196482');
echo $mobile->sendNotification();

require_once 'Email.php';
$email = NotifierFactory::getNotifier('Email', 'gianiaz@gmail.com');
echo $email->sendNotification();
