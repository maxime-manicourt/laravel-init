<?php

namespace App\Http\Controllers;

use App\Film;
use App\Personne;
use Illuminate\Http\Request;

class MonControlleur extends Controller
{
    function personnes() {
        $personnes = Personne::all();
        return view('personnes', ['personnes' => $personnes]);
    }

    function personne($id) {
        $personne = Personne::find($id);
        if($personne == false)
            return abort('404');
        return view('personne', ['personne' => $personne]);
    }

    function detailFilm($id) {
        $film = Film::find($id);
        if($film == false)
            return abort('404');
        return view('film', ['film' => $film]);
    }

    function index() {
        return "Bonjour mon p'tit pote";
    }
}
