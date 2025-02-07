<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongControllers\StoreSongController;
use App\Http\Controllers\SongControllers\SongController;

Route::get('/status', function(){
    $base = config('app.url');
    return "The api is alive on $base:8000";
});

Route::apiresource('/v1/artist', ArtistController::class);
Route::apiresource('/v1/genre', GenreController::class);

#Attempt at a single action controller for the store function
Route::apiresource('/v1/song', SongController::class)->except("store");
Route::post('/v1/song', StoreSongController::class);