<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;

Route::get('/status', function(){
    $base = config('app.url');
    return "The api is alive on $base:8000";
});

Route::resource('/v1/artist', ArtistController::class);
Route::resource('/v1/genre', GenreController::class);