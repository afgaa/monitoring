<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DMCRChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    } 
   
    public function build()
    {
        return $this->chart->areaChart()
        ->setTitle('Tekanan')
        ->addData('Physical sales', [40, 93, 35, 42, 18, 82])
        ->addData('Physical sales', [60, 93, 55, 81, 28, 21])
        ->addData('Digital sales', [70, 29, 77, 28, 55, 45])
        ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}