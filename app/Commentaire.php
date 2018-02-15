<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public function cascade() {
        return $this->belongsTo('App\Cascade');
    }

    public function photos() {
        return $this->hasMany('App\Photo');
    }
}
