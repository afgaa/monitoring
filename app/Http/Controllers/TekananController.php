<?php

namespace App\Http\Controllers;
use App\Charts\TekananChart;

class TekananController extends Controller
{
    public function tekanan(TekananChart $chart)
    {
        session()->flash('error', 'Pesan Berhasil');
        return view('tekanan.index', ['chart' => $chart->build()]);
    }
    
}
