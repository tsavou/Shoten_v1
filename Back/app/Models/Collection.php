<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'volume_id',
        'user_id'
    ];

    public function volume()
    {
        return $this->hasMany(Volume::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
