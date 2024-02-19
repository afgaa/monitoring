<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperaturController extends Controller
{
    public function temperatur()
    {
        return view('temperatur.index');
    }
}
