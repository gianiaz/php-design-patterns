<?php

require_once 'Music.php';
require_once 'Playlist.php';
require_once 'Song.php';

$songOne = new Song('Learn to fly');
$songTwo = new Song('Just Breathe');
$songThree = new Song('Come as you are');

$playlistOne = new Playlist();
$playlistTwo = new Playlist();
$playlistThree = new Playlist();
$playlistTwo->addSong($songOne);
$playlistTwo->addSong($songTwo);
$playlistThree->addSong($songThree);
$playlistThree->addSong($playlistTwo);
$playlistOne->addSong($playlistThree);
$playlistOne->play();


