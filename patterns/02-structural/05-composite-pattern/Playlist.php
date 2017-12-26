<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class Playlist implements Music
{
    private $songs = [];

    public function addSong(Music $content): bool
    {
        $this->songs[spl_object_hash($content)] = $content;

        return true;
    }

    public function play()
    {
        foreach ($this->songs as $content) {
            $content->play();
        }
    }

    private function removeItem(Music $content): bool
    {
        unset($this->songs[spl_object_hash($content)]);

        return true;
    }
}
