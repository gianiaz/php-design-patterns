<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

require_once 'Book.php';
require_once 'Ebook.php';

$Book = new Ebook('Dune', 'Frank Herbert', 'La storia di Paul Atreides');

require_once 'PrintBook.php';

$PrintBook = new PrintBook('Dune', 'Frank Herbert', 'La storia di Paul Atreides');

echo $PrintBook->getText();
