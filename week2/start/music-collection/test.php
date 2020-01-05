<?php
require_once 'includes\music-data.php';


foreach ($musicAlbums as $album){
    echo $album['artist'];
    echo $album['album'];
    echo $album['year'];
    echo $album['tracks'];
    echo $album['genre'];
}