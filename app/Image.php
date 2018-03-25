<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {
    public $timestamps = false;
    public function cascade() {
        return $this->belongsTo('App\Cascade');
    }
}
