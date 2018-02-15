<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cascade extends Model
{
    public function commentaires() {
        return $this->hasMany('App\Commentaire');
    }

    public function constituants() {
        return $this->belongsToMany('App\Constituant');
    }

    public function images() {
        return $this->hasMany('App\Image');
    }

    public function niveau() {
        return $this->belongsTo('App\Niveau');
    }

    public function orientation() {
        return $this->belongsTo('App\Orientation');
    }

    public function pays() {
        return $this->belongsTo('App\Pays');
    }

    public function structure() {
        return $this->belongsTo('App\Structure');
    }

    public function supports() {
        return $this->belongsToMany('App\Support');
    }

    public function typeFinVie() {
        return $this->belongsTo('App\TypeFinVie');
    }

    public function typeGlace() {
        return $this->belongsTo('App\TypeGlace');
    }

    public function users() {
        return $this->belongsToMany('App\User');
    }

    public function zones() {
        return $this->belongsToMany('App\Zone');
    }
}
