<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

require_once 'Transmitter.php';
require_once 'Device.php';
require_once 'Phone.php';
require_once 'Tablet.php';

require_once 'Messenger.php';
require_once 'SMS.php';

$phone = new Phone();
$phone->setSender(new SMS());

$phone->send('Butta la pasta');
