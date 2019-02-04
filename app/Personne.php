<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $table = 'personne';
    public $timestamps = false;

    public function realisations() {
        return $this->hasMany("App\Film", "idRealisateur");

        //SELECT * FROM film WHERE idRealisateur=$this->id
    }
}
