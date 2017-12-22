<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class PrintBook implements Book
{
    public $ebook;

    public function __construct(string $title, string $author, string $contents)
    {
        $this->ebook = new Ebook($title, $author, $contents);
    }

    public function getTitle(): string
    {
        return $this->ebook->getTitle();
    }

    public function getAuthor(): string
    {
        return $this->ebook->getAuthor();
    }

    public function getContents(): string
    {
        return $this->ebook->getContents();
    }

    public function getText(): string
    {
        $contents = $this->ebook->getTitle().' by '.$this->ebook->getAuthor();
        $contents .= "\n";
        $contents .= $this->ebook->getContents();

        return $contents;
    }
}
