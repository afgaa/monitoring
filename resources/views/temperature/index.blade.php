{{-- @extends('layouts.app', [
    'namePage' => '',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'tekanan',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
  <br><br><br><br>
  <div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-lg-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Data Spido meter </h5>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Data Spidometer</h5>
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
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
   <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initGoogleMaps();
    });
</script>
@endpush --}}


@extends('layouts.app', [
    'namePage' => '',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'tekanan',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
  <br><br><br><br>
  <div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-lg-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Data Spido meter </h5>
            <canvas id="spidometerChart1" width="200" height="200"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Data Spidometer</h5>
            <canvas id="spidometerChart2" width="200" height="200"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // JavaScript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

      // Chart.js
      var ctx1 = document.getElementById('spidometerChart1').getContext('2d');
      var spidometerChart1 = new Chart(ctx1, {
        type: 'doughnut',
        data: {
          datasets: [{
            data: [70, 30], // Example data, adjust as needed
            backgroundColor: [
              'rgba(255, 99, 132, 0.8)', // Red
              'rgba(54, 162, 235, 0.2)' // Blue
            ],
            borderWidth: 0
          }]
        },
        options: {
          cutout: '50%', // Make it a half circle
          rotation: 1 * Math.PI,
          circumference: 1 * Math.PI
          // Add more options as needed
        }
      });

      var ctx2 = document.getElementById('spidometerChart2').getContext('2d');
      var spidometerChart2 = new Chart(ctx2, {
        type: 'doughnut',
        data: {
          datasets: [{
            data: [50, 50], // Example data, adjust as needed
            backgroundColor: [
              'rgba(255, 99, 132, 0.8)', // Red
              'rgba(54, 162, 235, 0.2)' // Blue
            ],
            borderWidth: 0
          }]
        },
        options: {
          cutout: '50%', // Make it a half circle
          rotation: 1 * Math.PI,
          circumference: 1 * Math.PI
          // Add more options as needed
        }
      });
    });
  </script>
@endpush
