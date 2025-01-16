<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artikel extends Model
{
    protected $table = 'artikels';

    protected $fillable = [
        'judul',
        'penulis',
        'gambar',
        'konten',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
