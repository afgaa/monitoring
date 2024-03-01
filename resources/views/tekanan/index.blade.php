@extends('layouts.app', [
'namePage' => '',
'class' => 'login-page sidebar-mini ',
'activePage' => 'tekanan',
'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
<br><br><br><br>
{{-- @php
    dd(session('error'));
@endphp --}}
@if(session('error'))
<div class="alert alert-error alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


<div>
</div>
<div class="content">
    <div class="p-6 m-20 mb-3 bg-white">
        {!! $chart->container() !!}
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Tekanan 1</h5>
                </div>
                <div class="card-body text-center" id="chart1">
                    <div id="tekananChart" max-width="400px"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Tekanan 2</h5>
                </div>
                <div class="card-body text-center" style="max-width: 400px margin: auto">
                    <div id="tekananChart2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card  card-tasks">
                <div class="card-header ">
                    <h5 class="card-category">Tekanan 3</h5>
                </div>
                <div class="card-body">
                    <div id="tekananChart3"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-category">Tekanan 4</h5>
                </div>
                <div class="card-body">
                    <div id="tekananChart4"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Global Sales</h5>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">2018 Sales</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card  card-tasks">
                <div class="card-header ">
                    <h5 class="card-category">Backend development</h5>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-category">All Persons List</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card  card-tasks">
                <div class="card-header ">
                    <h5 class="card-category">Backend development</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });

</script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initGoogleMaps();
    });

</script>

<script>
    // Ambil data dari server
    fetch('/charts/data')
        .then(response => response.json())
        .then(data => {
            // Buat chart
            var ctx = document.getElementById('myDonutChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: {
                    cutoutPercentage: 50,
                    responsive: true,
                    maintainAspectRatio: false,
                }
            });
        });

</script>

{{-- Chart Tekanan 1 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tekananChartEl = document.querySelector('#tekananChart');
        const tekananChartConfig = {
            series: [80],
            labels: ['Tekanan 1'],
            chart: {
                width: 400,
                height: 300,
                type: 'radialBar'
            },
            plotOptions: {
                radialBar: {
                    startAngle: 0,
                    endAngle: 360,
                    strokeWidth: '8',
                    hollow: {
                        margin: 2,
                        size: '45%'
                    },
                    track: {
                        strokeWidth: '50%',
                        background: '#ddd'
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            offsetY: 15,
                            color: '#697a8d',
                            fontSize: '15px',
                            fontWeight: '600',
                            fontFamily: 'Arial'
                        },
                        value: {
                            offsetY: -25,
                            color: '#697a8d',
                            fontSize: '32px',
                            fontWeight: '700',
                            fontFamily: 'Arial'
                        }
                    }
                }
            },
            fill: {
                type: 'solid',
                colors: ['#fb8500']
            },
            stroke: {
                lineCap: 'round'
            },
            grid: {
                padding: {
                    top: -10,
                    bottom: -15,
                    left: -10,
                    right: -10
                }
            },
            states: {
                hover: {
                    filter: {
                        type: 'none'
                    }
                },
                active: {
                    filter: {
                        type: 'none'
                    }
                }
            }
        };

        if (typeof tekananChartEl !== undefined && tekananChartEl !== null) {
            const tekananhart1 = new ApexCharts(tekananChartEl, tekananChartConfig);
            tekananhart1.render();
        }
    });

</script>

{{-- Chart Tekanan 2 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tekananChart2El = document.querySelector('#tekananChart2');
        const tekananChart2Config = {
            series: [10],
            labels: ['Tekanan 2'],
            chart: {
                width: 400,
                height: 300,
                type: 'radialBar',
                offsetY: -20, // Offset untuk membuat setengah lingkaran
            },
            plotOptions: {
                radialBar: {
                    startAngle: -90,
                    endAngle: 90,
                    strokeWidth: '8',
                    hollow: {
                        margin: 2,
                        size: '45%'
                    },
                    track: {
                        strokeWidth: '50%',
                        background: '#ddd'
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            offsetY: 15,
                            color: '#697a8d',
                            fontSize: '15px',
                            fontWeight: '600',
                            fontFamily: 'Arial'
                        },
                        value: {
                            offsetY: -25,
                            color: '#697a8d',
                            fontSize: '32px',
                            fontWeight: '700',
                            fontFamily: 'Arial'
                        }
                    }
                }
            },
            fill: {
                type: 'solid',
                colors: ['#fb8500']
            },
            stroke: {
                lineCap: 'round'
            },
            grid: {
                padding: {
                    top: -10,
                    bottom: -15,
                    left: -10,
                    right: -10
                }
            },
            states: {
                hover: {
                    filter: {
                        type: 'none'
                    }
                },
                active: {
                    filter: {
                        type: 'none'
                    }
                }
            }
        };

        if (typeof tekananChart2El !== undefined && tekananChart2El !== null) {
            const tekananChart2 = new ApexCharts(tekananChart2El, tekananChart2Config);
            tekananChart2.render();
        }
    });

</script>

{{-- Chart Tekanan 3 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tekananChart3El = document.querySelector('#tekananChart3');
        const tekananChart3Options = {
            series: [90],
            labels: ['Tekanan 3'],
            chart: {
                height: 240,
                type: 'radialBar'
            },
            plotOptions: {
                radialBar: {
                    size: 150,
                    offsetY: 10,
                    startAngle: -150,
                    endAngle: 150,
                    hollow: {
                        size: '55%'
                    },
                    track: {
                        background: '#fff',
                        strokeWidth: '100%'
                    },
                    dataLabels: {
                        name: {
                            offsetY: 15,
                            color: '#333',
                            fontSize: '15px',
                            fontWeight: '600',
                            fontFamily: 'Arial'
                        },
                        value: {
                            offsetY: -25,
                            color: '#023047',
                            fontSize: '32px',
                            fontWeight: '700',
                            fontFamily: 'Arial'
                        }
                    }
                }
            },
            colors: ['#3498db'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    shadeIntensity: 0.5,
                    gradientToColors: ['#3498db'],
                    inverseColors: true,
                    opacityFrom: 1,
                    opacityTo: 0.6,
                    stops: [30, 70, 100]
                }
            },
            stroke: {
                dashArray: 5
            },
            grid: {
                padding: {
                    top: -35,
                    bottom: -10
                }
            },
            states: {
                hover: {
                    filter: {
                        type: 'none'
                    }
                },
                active: {
                    filter: {
                        type: 'none'
                    }
                }
            }
        };

        if (typeof tekananChart3El !== 'undefined' && tekananChart3El !== null) {
            const tekananChat3 = new ApexCharts(tekananChart3El, tekananChart3Options);
            tekananChat3.render();
        }
    });

</script>

{{-- Chart Tekanan 4 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tekananChart4El = document.querySelector('#tekananChart4');
        const tekananChart4Options = {
            series: [100],
            labels: ['Tekanan 4'],
            chart: {
                height: 240,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    size: 150,
                    startAngle: -90,
                    endAngle: 90,
                    offsetY: 10,
                    hollow: {
                        size: '55%'
                    },
                    track: {
                        background: '#fff',
                        strokeWidth: '100%'
                    },
                    dataLabels: {
                        name: {
                            offsetY: 15,
                            color: '#333',
                            fontSize: '15px',
                            fontWeight: '600',
                            fontFamily: 'Arial'
                        },
                        value: {
                            offsetY: -25,
                            color: '#023047',
                            fontSize: '32px',
                            fontWeight: '700',
                            fontFamily: 'Arial'
                        }
                    }
                }
            },
            colors: ['#3498db'],
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    shadeIntensity: 0.5,
                    gradientToColors: ['#3498db'],
                    inverseColors: true,
                    opacityFrom: 1,
                    opacityTo: 0.6,
                    stops: [30, 70, 100]
                }
            },
            stroke: {
                dashArray: 5
            },
            grid: {
                padding: {
                    top: -35,
                    bottom: -10
                }
            },
            states: {
                hover: {
                    filter: {
                        type: 'none'
                    }
                },
                active: {
                    filter: {
                        type: 'none'
                    }
                }
            }
        };

        if (typeof tekananChart4El !== 'undefined' && tekananChart4El !== null) {
            const tekananChart4 = new ApexCharts(tekananChart4El, tekananChart4Options);
            tekananChart4.render();
        }
    });

</script>
<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}



@endpush
