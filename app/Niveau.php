<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    public function cascades() {
        return $this->hasMany('App\Cascade');
    }

    public function users() {
        return $this->hasMany('App\User');
    }
}
