<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LP extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
