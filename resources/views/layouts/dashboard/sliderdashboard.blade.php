<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

  <!-- LOGO -->
  <div class="navbar-brand-box">
    <a href="#" class="logo logo-dark">
      <span class="logo-sm">
        <img src="{{asset('asset/images/logo-sm.png')}}" style="margin-top: 26px;" alt="" height="22">
      </span>
      <span class="logo-lg">
        <img src="{{asset('asset/images/logo-dark.png')}}" style="margin-top: 26px;" alt="" height="20">
      </span>
    </a>

    <a href="#" class="logo logo-light">
      <span class="logo-sm">
        <img src="{{asset('asset/images/logo-sm.png')}}" style="margin-top: 26px;" alt="" height="22">
      </span>
      <span class="logo-lg">
        <img src="{{asset('asset/images/logo-light.png')}}" style="margin-top: 26px;" alt="" height="20">
      </span>
    </a>
  </div>

  <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
    <i class="fas fa-bars"></i>
  </button>

  <div data-simplebar class="sidebar-menu-scroll">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <!-- Left Menu Start -->
      <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" style="font-size: 18px">@lang('site.menu')</li>
        <li>
          <a href="{{route('dashboard.countries.index')}}">
            <i class="uil-home-alt"></i><span class="badge badge-pill badge-primary float-right">01</span>
            <span class="dashboard_site">@lang('site.dashboard')</span>
          </a>
        </li>
      </ul>
      </li>
      </ul>
    </div>
    <!-- Sidebar -->
  </div>
</div>
<!-- Left Sidebar End -->
