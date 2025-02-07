<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['name', 'artist_id', 'genre_id', 'feature_id'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function feature()
    {
        return $this->belongsTo(Artist::class, 'feature_id');
    }
}
