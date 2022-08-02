<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadiums extends Model
{
    // use HasFactory;

    protected $table = 'stadiums';

    protected $fillable = [
        'name',
        'capacity',
        'address',
    ];

    // relation with clubs
    public function clubs()
    {
        return $this->hasOne('App\Models\Clubs', 'stadiums_id');
    }
}
