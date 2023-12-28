<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'title',
        'image',
        'author',
        'editor',
        'synopsis',
        'status',
        'popularity',
        'release_date',
    ];

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'manga_genres', 'manga_id', 'genre_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function volumes()
    {
        return $this->hasMany(Volume::class);
    }
}
