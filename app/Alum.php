<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Alum extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'year_from', 'year_to',
    ];

    public function alums()
    {
        return $this->belongsTo("App\User");
    }

    public function school()
    {
        return $this->belongsTo("App\School");
    }

    public function stream()
    {
        return $this->hasOne("App\Stream");
    }
}
