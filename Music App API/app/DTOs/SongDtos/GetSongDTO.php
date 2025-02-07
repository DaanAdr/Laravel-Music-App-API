<?php

namespace App\DTOs\SongDtos;

class GetSongDTO
{
    public int $id;
    public string $title;
    public string $artist;
    public string $genre;
    public ?string $feature;

    public function __construct(int $id, string $title, string $artist, string $genre, ?string $feature) {
        $this->id = $id;
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->feature = $feature;
    }
}
