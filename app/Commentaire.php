<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public $timestamps = false;
    public function cascade() {
        return $this->belongsTo('App\Cascade');
    }

    public function photos() {
        return $this->hasMany('App\Photo');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
