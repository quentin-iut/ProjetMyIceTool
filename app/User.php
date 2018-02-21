<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'telephone',
        'abonne',
        'alert',
        'provider',
        'provider_id',
        'zone_id',
        'niveau_id',
        'langue_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'provider',
        'provider_id',
        'created_at',
        'updated_at'
    ];

    public function langue() {
        return $this->belongsTo('App\Langue');
    }

    public function niveau() {
        return $this->belongsTo('App\Niveau');
    }

    public function cascades() {
        return $this->belongsToMany('App\Cascade');
    }

    public function cascade() {
        return $this->belongsTo('App\Cascade');
    }
}
