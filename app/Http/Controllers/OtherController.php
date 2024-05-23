<?php

namespace App\Http\Controllers;
use App\Charts\OtherChart;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function other(OtherChart $chart)
    {
        return view('other.index', ['chart' => $chart->build()]);
    }
}