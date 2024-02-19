<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PowerFaktorController extends Controller
{
    public function powerfaktor()
    {
        return view('powerfaktor.index');
    }
}
