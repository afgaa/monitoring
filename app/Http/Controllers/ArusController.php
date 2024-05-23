<?php

namespace App\Http\Controllers;
use App\Charts\ArusChart;

use Illuminate\Http\Request;

class ArusController extends Controller
{
    public function arus(ArusChart $chart)
    {
        return view('arus.index', ['chart' => $chart->build()]);
    }
}