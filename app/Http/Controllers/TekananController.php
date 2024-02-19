<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TekananController extends Controller
{
    public function tekanan()
    {
        return view('tekanan.index');
    }
}
