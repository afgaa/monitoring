<?php

namespace App\Http\Controllers;
use App\Charts\HArusChart;

use Illuminate\Http\Request;

class HArusController extends Controller
{
    public function harus(HArusChart $chart)
    {
        return view('harus.index', ['chart' => $chart->build()]);
    }
}