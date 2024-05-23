<?php

namespace App\Http\Controllers;
use App\Charts\HTeganganChart;

use Illuminate\Http\Request;

class HTeganganController extends Controller
{
    public function htegangan(HTeganganChart $chart)
    {
        return view('htegangan.index', ['chart' => $chart->build()]);
    }
}