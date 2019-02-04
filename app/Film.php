<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';
    
	public function __construct($titre,$spectateurs,$annee,$id=false) {
		$this->id = $id;
		$this->titre = $titre;
		$this->annee = $annee;
		$this->spectateurs = $spectateurs;
	}
}
