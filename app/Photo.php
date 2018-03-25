<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {
    public $timestamps = false;
    public function commentaire() {
        return $this->belongsTo('App\Commentaire');
    }
}
