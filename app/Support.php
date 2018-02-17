<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    public $timestamps = false;
    public function cascades() {
        return $this->belongsToMany('App\Cascade');
    }
}
