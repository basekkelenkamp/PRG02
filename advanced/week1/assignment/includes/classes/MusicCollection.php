<?php

/**
 * Class MusicCollection
 */
class MusicCollection
{
    private $albums = [];

    /**
     * @return mixed
     */
    public function getAlbums(): array
    {
        return $this->albums;
    }

    /**
     * @param mixed $albumRaw
     */
    public function addAlbum($albumRaw): void
    {
        $this->albums[] = new Album($albumRaw['name'], $albumRaw['artist'], $albumRaw['genre'], $albumRaw['year'], $albumRaw['tracks']);
    }

    /**
     * @return int
     */
    public function getTotalAlbums(): int
    {
        return count($this->albums);
    }
} 
