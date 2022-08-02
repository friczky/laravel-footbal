<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    // use HasFactory;

    protected $table = 'clubs';

    protected $fillable = [
        'stadiums_id',
        'name',
        'logo',
        'url',
        'thropy'
    ];

    // relation with stadiums
    public function stadiums()
    {
        return $this->belongsTo('App\Models\Stadiums', 'stadiums_id', 'id');
    }

    public function manager()
    {
        return $this->hasMany('App\Models\Managers', 'clubs_id');
    }

    public function players()
    {
        return $this->hasMany('App\Models\Players', 'clubs_id');
    }

    public function matchs_clubs()
    {
        return $this->hasOne('App\Models\Matchs', 'clubs_id');
    }

    public function matchs_rivals()
    {
        return $this->hasOne('App\Models\Matchs', 'rivals_id');
    }
}
