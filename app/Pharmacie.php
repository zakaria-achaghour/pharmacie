<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pharmacie extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'cin_pharmacien', 'nom_pharmacien', 'nom','patente','rc','if','ice',
        'num_autorisation','contact','fichier','fichier_cin','fichier_diplome'
        ,'fichier_autorisation','fichier_rc_patent','fichier_if_ice','user_id'
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function ville() {
        return $this->belongsTo('App\Ville')->withTimestamps();
    }
}
