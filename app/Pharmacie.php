<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pharmacie extends Model
{
    use SoftDeletes;

    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function ville() {
        return $this->belongsTo('App\Ville')->withTimestamps();
    }
}
