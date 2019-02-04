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

    function index() {
        return "Bonjour mon p'tit pote";
    }
}
