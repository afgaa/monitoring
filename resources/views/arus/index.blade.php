@extends('layouts.app', [
'namePage' => '',
'class' => 'login-page sidebar-mini ',
'activePage' => 'arus',
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
                    <h5 class="card-category">Arus R</h5>
                </div>
                <div class="card-body">
                    <div id="arus1"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Arus S</h5>
                </div>
                <div class="card-body">
                    <div id="arus2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card  card-tasks">
                <div class="card-header ">
                    <h5 class="card-category">Arus T</h5>
                </div>
                <div class="card-body">
                    <div id="arus3"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-category">Arus N</h5>
                </div>
                <div class="card-body">
                    <div id="arus4"></div>
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

{{-- Chart arus 1 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const arusChart1El = document.querySelector('#arus1');
        const arusChart1Config = {
            series: [101],
            labels: ['Arus R'],
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

        if (typeof arusChart1El !== undefined && arusChart1El !== null) {
            const arus1 = new ApexCharts(arusChart1El, arusChart1Config);
            arus1.render();
        }
    });

</script>

{{-- Chart arus 2 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const arusChart2El = document.querySelector('#arus2');
        const arusChart2Config = {
            series: [10],
            labels: ['Arus S'],
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

        if (typeof arusChart2El !== undefined && arusChart2El !== null) {
            const arus2 = new ApexCharts(arusChart2El, arusChart2Config);
            arus2.render();
        }
    });

</script>

{{-- Chart arus 3 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const arusChart3El = document.querySelector('#arus3');
        const arusChart3Config = {
            series: [10],
            labels: ['Arus T'],
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

        if (typeof arusChart3El !== undefined && arusChart3El !== null) {
            const arus3 = new ApexCharts(arusChart3El, arusChart3Config);
            arus3.render();
        }
    });

</script>

{{-- Chart arus 4 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const arusChart4El = document.querySelector('#arus4');
        const arusChart4Config = {
            series: [10],
            labels: ['Arus N'],
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

        if (typeof arusChart4El !== undefined && arusChart4El !== null) {
            const arus4 = new ApexCharts(arusChart4El, arusChart4Config);
            arus4.render();
        }
    });

</script>
<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}



@endpush
