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
        return $this->belongsTo(Volume::class, 'volume_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
