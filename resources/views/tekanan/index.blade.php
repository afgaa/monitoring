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
                <div class="card-body">
                    <div id="tekananChart1" max-width="400px"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Tekanan 2</h5>
                </div>
                <div class="card-body">
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
                    <h5 class="card-category">Tekanan 5</h5>
                </div>
                <div class="card-body">
                    <div id="tekananChart5" max-width="400px"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Tekanan 6</h5>
                </div>
                <div class="card-body">
                    <div id="tekananChart6"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Tekanan 7</h5>
                </div>
                <div class="card-body">
                    <div id="tekananChart7" max-width="400px"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Tekanan 8</h5>
                </div>
                <div class="card-body">
                    <div id="tekananChart8"></div>
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
        const tekananChart1El = document.querySelector('#tekananChart1');
        const tekananChart1Config = {
            series: [10],
            labels: ['Tekanan 1'],
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

        if (typeof tekananChart1El !== undefined && tekananChart1El !== null) {
            const tekananChart1 = new ApexCharts(tekananChart1El, tekananChart1Config);
            tekananChart1.render();
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
        const tekananChart3Config = {
            series: [10],
            labels: ['Tekanan 3'],
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

        if (typeof tekananChart3El !== undefined && tekananChart3El !== null) {
            const tekananChart3 = new ApexCharts(tekananChart3El, tekananChart3Config);
            tekananChart3.render();
        }
    });

</script>

{{-- Chart Tekanan 4 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tekananChart4El = document.querySelector('#tekananChart4');
        const tekananChart4Config = {
            series: [10],
            labels: ['Tekanan 4'],
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

        if (typeof tekananChart4El !== undefined && tekananChart4El !== null) {
            const tekananChart4 = new ApexCharts(tekananChart4El, tekananChart4Config);
            tekananChart4.render();
        }
    });

</script>


{{-- Chart Tekanan 5 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tekananChart5El = document.querySelector('#tekananChart5');
        const tekananChart5Config = {
            series: [10],
            labels: ['Tekanan 5'],
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

        if (typeof tekananChart5El !== undefined && tekananChart5El !== null) {
            const tekananChart5 = new ApexCharts(tekananChart5El, tekananChart5Config);
            tekananChart5.render();
        }
    });

</script>

{{-- Chart Tekanan 6 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tekananChart6El = document.querySelector('#tekananChart6');
        const tekananChart6Config = {
            series: [10],
            labels: ['Tekanan 6'],
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

        if (typeof tekananChart6El !== undefined && tekananChart6El !== null) {
            const tekananChart6 = new ApexCharts(tekananChart6El, tekananChart6Config);
            tekananChart6.render();
        }
    });

</script>

{{-- Chart Tekanan 7 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tekananChart7El = document.querySelector('#tekananChart7');
        const tekananChart7Config = {
            series: [10],
            labels: ['Tekanan 7'],
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

        if (typeof tekananChart7El !== undefined && tekananChart7El !== null) {
            const tekananChart7 = new ApexCharts(tekananChart7El, tekananChart7Config);
            tekananChart7.render();
        }
    });

</script>

{{-- Chart Tekanan 8 --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tekananChart8El = document.querySelector('#tekananChart8');
        const tekananChart8Config = {
            series: [10],
            labels: ['Tekanan 8'],
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

        if (typeof tekananChart8El !== undefined && tekananChart8El !== null) {
            const tekananChart8 = new ApexCharts(tekananChart8El, tekananChart8Config);
            tekananChart8.render();
        }
    });

</script>

<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}



@endpush
