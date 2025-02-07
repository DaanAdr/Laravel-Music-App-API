<?php

namespace App\Services\SongServices;
use App\DTOs\SongDtos\GetSongDTO;
use App\Models\Song;

class GetSongService
{
    public function GetAllSongs()
    {
        $songs = Song::with('artist')->with('genre')->with('feature')->get();
        $dtos = $this->ConvertAllSongsToDTO($songs);
        return $dtos;
    }

    private function ConvertSongToDTO(Song $song):GetSongDTO
    {
        $featureName = $song->feature ? $song->feature->name : null; // Pass null if feature is null
        $dto = new GetSongDTO($song->id, $song->name, $song->artist->name, $song->genre->name, $featureName);
        return $dto;
    }

    private function ConvertAllSongsToDTO($songs)
    {
        $dtos = [];

        foreach( $songs as $song ) 
        {
            $dto = $this->ConvertSongToDTO($song);
            array_push($dtos, $dto);
        }

        return $dtos;
    }
}
