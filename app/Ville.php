<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{

    public function pharmacies() {
         return $this->hasMany('App\Pharmacie')->withTimestamps();
    }
}
