@extends('layouts.app', [
    'namePage' => '',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'powerfakktor',
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
@endpush