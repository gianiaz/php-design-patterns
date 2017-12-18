<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

require_once 'Notifier.php';
require_once 'NotifierFactory.php';
require_once 'ElectronicNotifierFactory.php';
require_once 'SMS.php';
$mobile = ElectronicNotifierFactory::getNotifier('SMS', '3477196482');
echo $mobile->sendNotification();
require_once 'Email.php';
$email = ElectronicNotifierFactory::getNotifier('Email', 'gianiaz@gmail.com');
echo $email->sendNotification();
require_once 'CourierNotifierFactory.php';
require_once 'Post.php';
$post = CourierNotifierFactory::getNotifier('Post', '10 Downing Street,SW1A 2AA');
echo $post->sendNotification();
