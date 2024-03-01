<?php

namespace App\Http\Controllers;
use App\Charts\Tekanan1Chart;

class TekananController extends Controller
{
    public function tekanan(Tekanan1Chart $chart)
    {
        session()->flash('error', 'Pesan Berhasil');
        return view('tekanan.index', ['chart' => $chart->build()]);
    }
    
}
