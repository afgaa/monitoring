<?php

namespace App\Http\Controllers;
use App\Charts\DMCRChart;
use Illuminate\Http\Request;

class DMCRController extends Controller
{
    public function dmcr(DMCRChart $chart)
    {
        return view('dmcr.index', ['chart' => $chart->build()]);
    }
}
