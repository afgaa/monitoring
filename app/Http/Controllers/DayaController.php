<?php

namespace App\Http\Controllers;
use App\Charts\DayaChart;
use Illuminate\Http\Request;

class DayaController extends Controller
{
    public function daya(DayaChart $chart)
    {
        return view('daya.index', ['chart' => $chart->build()]);
    }
}
