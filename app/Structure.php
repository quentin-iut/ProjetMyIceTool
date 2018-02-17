<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    public $timestamps = false;
    public function cascades() {
        return $this->hasMany('App\Cascade');
    }
}
