<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{
    // use HasFactory;

    protected $table = 'managers';

    protected $fillable = [
        'clubs_id',
        'name',
        'old',
        'nationality'
    ];

    public function clubs()
    {
        return $this->belongsTo('App\Models\Clubs', 'clubs_id', 'id');
    }
}
