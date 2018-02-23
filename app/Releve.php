<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Releve extends Model
{
    public $timestamps = false;
    public function zone() {
        return $this->belongsTo('App\Zone');
    }
}
