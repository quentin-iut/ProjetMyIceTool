<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    public $timestamps = false;
    public function cascades() {
        return $this->hasMany('App\Cascade');
    }
}
