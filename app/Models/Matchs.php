<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    // use HasFactory;

    protected $table = 'match';

    protected $fillable = [
        'clubs_id',
        'rivals_id',
        'schedule'
    ];

    public function clubs()
    {
        return $this->belongsTo('App\Models\Clubs', 'clubs_id', 'id');
    }

    public function rivals()
    {
        return $this->belongsTo('App\Models\Clubs', 'rivals_id', 'id');
    }
}
