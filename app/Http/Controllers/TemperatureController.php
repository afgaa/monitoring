<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function temperature()
    {
        return view('temperature.index');
    }
}
