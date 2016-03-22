<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class School extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'shortname', 'region', 'town', 'country', 
        'email', 'postal_address', 'phone', 'website', 'fb_page', 'fb_group', 
        'twitter_url',
    ];

    public function alums()
    {
        return $this->hasMany("App\Alum");
    }
}
