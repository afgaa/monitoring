@extends('layouts.app', [
'namePage' => '',
'class' => 'login-page sidebar-mini ',
'activePage' => 'htegangan',
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
                    <h5 class="card-category">VTHD R</h5>
                </div>
                <div class="card-body">
                    <div id="hateg1"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">VTHD S</h5>
                </div>
                <div class="card-body">
                    <div id="hateg2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card  card-tasks">
                <div class="card-header ">
                    <h5 class="card-category">VTHD T</h5>
                </div>
                <div class="card-body">
                    <div id="hateg3"></div>
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

{{-- Chart hateg 1 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const hategChart1El = document.querySelector('#hateg1');
        const hategChart1Config = {
            series: [101],
            labels: ['VTHD R'],
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

        if (typeof hategChart1El !== undefined && hategChart1El !== null) {
            const hateg1 = new ApexCharts(hategChart1El, hategChart1Config);
            hateg1.render();
        }
    });

</script>

{{-- Chart hateg 2 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const hategChart2El = document.querySelector('#hateg2');
        const hategChart2Config = {
            series: [10],
            labels: ['VTHD S'],
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

        if (typeof hategChart2El !== undefined && hategChart2El !== null) {
            const hateg2 = new ApexCharts(hategChart2El, hategChart2Config);
            hateg2.render();
        }
    });

</script>

{{-- Chart hateg 3 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const hategChart3El = document.querySelector('#hateg3');
        const hategChart3Config = {
            series: [10],
            labels: ['VTHD T'],
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

        if (typeof hategChart3El !== undefined && hategChart3El !== null) {
            const hateg3 = new ApexCharts(hategChart3El, hategChart3Config);
            hateg3.render();
        }
    });

</script>

<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}



@endpush
