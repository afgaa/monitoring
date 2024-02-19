<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArusController extends Controller
{
    public function arus()
    {
        return view('arus.index');
    }
}
