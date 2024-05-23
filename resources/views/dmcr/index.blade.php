@extends('layouts.app', [
'namePage' => '',
'class' => 'login-page sidebar-mini ',
'activePage' => 'dmcr',
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
                    <h5 class="card-category">Tekanan</h5>
                </div>
                <div class="card-body">
                    <div id="dmcr1"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Suhu Minyak</h5>
                </div>
                <div class="card-body">
                    <div id="dmcr2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card  card-tasks">
                <div class="card-header ">
                    <h5 class="card-category">Suhu Ambient</h5>
                </div>
                <div class="card-body">
                    <div id="dmcr3"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-category">Level Minyak</h5>
                </div>
                <div class="card-body">
                    <div id="dmcr4"></div>
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

{{-- Chart dmcr 1 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const dmcrChart1El = document.querySelector('#dmcr1');
        const dmcrChart1Config = {
            series: [101],
            labels: ['Tekanan'],
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

        if (typeof dmcrChart1El !== undefined && dmcrChart1El !== null) {
            const dmcr1 = new ApexCharts(dmcrChart1El, dmcrChart1Config);
            dmcr1.render();
        }
    });

</script>

{{-- Chart dmcr 2 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const dmcrChart2El = document.querySelector('#dmcr2');
        const dmcrChart2Config = {
            series: [10],
            labels: ['Suhu Minyak'],
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

        if (typeof dmcrChart2El !== undefined && dmcrChart2El !== null) {
            const dmcr2 = new ApexCharts(dmcrChart2El, dmcrChart2Config);
            dmcr2.render();
        }
    });

</script>

{{-- Chart arus 3 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const dmcrChart3El = document.querySelector('#dmcr3');
        const dmcrChart3Config = {
            series: [10],
            labels: ['Suhu Ambient'],
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

        if (typeof dmcrChart3El !== undefined && dmcrChart3El !== null) {
            const dmcr3 = new ApexCharts(dmcrChart3El, dmcrChart3Config);
            dmcr3.render();
        }
    });

</script>

{{-- Chart dmcr 4 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const dmcrChart4El = document.querySelector('#dmcr4');
        const dmcrChart4Config = {
            series: [10],
            labels: ['Level Minyak'],
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

        if (typeof dmcrChart4El !== undefined && dmcrChart4El !== null) {
            const dmcr4 = new ApexCharts(dmcrChart4El, dmcrChart4Config);
            dmcr4.render();
        }
    });

</script>
<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}



@endpush
