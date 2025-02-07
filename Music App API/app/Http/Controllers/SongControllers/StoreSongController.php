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
        $this->validateRequest($request);
    
        return Song::create($request->all());
    }

    private function validateRequest(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[\p{L} ]+$/u', // This regex allows letters and spaces
            'artist_id' => 'required|exists:artists,id|regex:/^[0-9]+$/', // This regex allows only numbers
            'genre_id' => ['required', 'exists:genres,id', 'regex:/^[0-9]+$/'],
            'feature_id' => 'nullable|exists:artists,id'
        ]);
    }
}
