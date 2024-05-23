<div class="sidebar" data-color="blue">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo" >
    <img src="assets\img\pp.png">
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Home') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'tegangan') active @endif">
        <a href="{{ route('tegangan') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Tegangan') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'arus') active @endif">
        <a href="{{ route('arus') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Arus') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'daya') active @endif">
        <a href="{{ route('daya') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Daya') }}</p>
        </a>
      </li>      
      <li class="@if ($activePage == 'htegangan') active @endif">
        <a href="{{ route('htegangan') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Harmonisa Tegangan ') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'harus') active @endif">
        <a href="{{ route('harus') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Harmonisa Arus ') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'dmcr') active @endif">
        <a href="{{ route('dmcr') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('DMCR') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'other') active @endif">
        <a href="{{ route('other') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Other') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'icons') active @endif">
        <a href="{{ route('page.index','icons') }}">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
