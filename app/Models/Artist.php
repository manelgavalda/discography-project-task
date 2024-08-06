<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function lps()
    {
        return $this->hasMany(LP::class);
    }

    protected function getLpsRouteAttribute()
    {
        return route('filament.app.resources.l-p-s.index', ['tableSearch' => $this->name]);
    }
}
