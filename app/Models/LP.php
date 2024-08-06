<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->songs->flatMap->authors->unique('id')->implode('name', ', ');
    }
}
