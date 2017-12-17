<?php
require_once('Notifier.php');
require_once('NotifierFactory.php');
require_once('ElectronicNotifierFactory.php');


require_once('SMS.php');
echo '<pre>';
$mobile = ElectronicNotifierFactory::getNotifier('SMS', '3477196482');
echo $mobile->sendNotification();

require_once('Email.php');
$email = ElectronicNotifierFactory::getNotifier('Email', 'gianiaz@gmail.com');
echo $email->sendNotification();
echo '</pre>';
