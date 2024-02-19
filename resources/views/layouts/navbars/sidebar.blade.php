<div class="sidebar" data-color="blue">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
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
      <li class="@if ($activePage == 'tekanan') active @endif">
        <a href="{{ route('tekanan') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Tekanan') }}</p>
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
      <li class="@if ($activePage == 'powerfaktor') active @endif">
        <a href="{{ route('powerfaktor') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Power Faktor') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'harmonisa') active @endif">
        <a href="{{ route('harmonisa') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Harmonisa') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'temperatur') active @endif">
        <a href="{{ route('temperatur') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Temperatur') }}</p>
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
