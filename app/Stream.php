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
        'name',
    ];

    public function school()
    {
        return $this->belongsTo("App\School");
    }


    public function alums()
    {
        return $this->hasMany("App\Alum");
    }
}
