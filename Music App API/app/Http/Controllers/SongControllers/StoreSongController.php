<?php

namespace App\Http\Controllers\SongControllers;

use App\Models\Song;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreSongController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[\p{L} ]+$/u', // This regex allows letters and spaces
            'artist_id' => 'required|exists:artists,id', // Assuming you have an artists table
            'genre_id' => 'required|exists:genres,id',
            'feature_id' => 'nullable|exists:features,id'
        ]);
    
        return Song::create($request->all());
    }
}
