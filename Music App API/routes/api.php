<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;

Route::get('/status', function(){
    $base = config('app.url');
    return "The api is alive on $base:8000";
});

Route::resource('/v1/artist', ArtistController::class);