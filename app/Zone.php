<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    public function cascades() {
        return $this->belongsToMany('App\Cascade');
    }
    public function releves() {
        return $this->hasMany('App\Releve');
    }
}
