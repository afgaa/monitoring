@extends('layouts.app', [
    'namePage' => '',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
  <div>
    <img src="assets\img\t.jpeg" alt="t" >
  </div>
  <br><br>
  <div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            Google Maps
          </div>
          <div class="card-body ">
            <div id="map" class="map"></div>
          </div>
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