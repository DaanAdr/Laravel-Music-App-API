<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Model;

#[ApiResource]
class Song extends Model
{
    protected $fillable = ['name', 'artist_id', 'genre_id', 'feature_id'];
}
