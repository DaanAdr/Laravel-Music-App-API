<?php

namespace App\Http\Controllers\SongControllers;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Services\SongServices\GetSongService;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = new GetSongService();
        $songs = $service->GetAllSongs();
        return $songs;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Song::with('artist')->with('genre')->with('feature')->find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Song = Song::Find($id);
        $Song->update($request->all()); #Updates the entire record

        return $Song;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Song::destroy($id);
    }
}
