<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    use HasFactory;

    protected $fillable = [
        'manga_id',
        'title',
        'image',
        'number',
        'release_date'
    ];

    public function manga()
    {
        return $this->belongsTo(Manga::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'collections', 'volume_id', 'user_id');
    }
}
