<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

require_once 'Student.php';

$prototypeStudent = new Student();
$prototypeStudent->setName('Giovanni');
$prototypeStudent->setYear(2);
$prototypeStudent->setGrade('A*');

var_dump($prototypeStudent);

$anotherChild = clone $prototypeStudent;
$anotherChild->setName('Mario');
$anotherChild->setGrade('B');
$anotherChild->dance = function (string $style) {
    return "Dancing $style style.";
};

var_dump($anotherChild);
var_dump($anotherChild->dance->__invoke('Pogo'));
