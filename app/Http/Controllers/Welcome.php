<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome extends Controller
{
    function hello() {
        return view('hello', ['name' => 'Camarade']);
    }
}
