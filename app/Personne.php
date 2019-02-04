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

    public function joueDans() {
        return $this->belongsToMany("App\Film", "joue", "idActeur", "idFilm");

        // SELECT * FROM film JOIN ON joue ON idFilm=film.id WHERE idActeurs=$this->id
    }
}
