<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LP extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'artist_id'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    protected function getAuthorNamesAttribute()
    {
        $authors = $this->songs->flatMap->authors;

        return $authors->isEmpty()
            ? 'No authors available for this LP'
            : $authors->unique('name')->implode('name', ', ');
    }
}
