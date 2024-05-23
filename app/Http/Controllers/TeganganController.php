<?php

namespace App\Http\Controllers;
use App\Charts\TeganganChart;

use Illuminate\Http\Request;

class TeganganController extends Controller
{
    public function tegangan(TeganganChart $chart)
    {
        return view('tegangan.index', ['chart' => $chart->build()]);
    }
}