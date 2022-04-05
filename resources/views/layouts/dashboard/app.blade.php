<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="company" name="description" />
  <meta content="company" name="author" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- <title>{{$title}}</title> --}}
  {{-- <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}" /> --}}
  {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"> --}}
  <link rel="stylesheet" href="{{asset('asset/css/all.css')}}" />
  <link rel="stylesheet" href="{{asset('asset/css/app.min.css')}}" />
  <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('asset/css/icons.min.css')}}" />
  <link rel="stylesheet" href="{{asset('asset/css/line.css')}}" />
  <link rel="stylesheet" href="{{asset('asset/toastr/toastr.min.css')}}" />
  <link rel="stylesheet" href="{{asset('asset/bootstraptoggle/bootstrap-toggle.min.css')}}" />
  <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}" />
  <link rel="stylesheet" href="{{asset('seleccted/select2.min.css')}}" />
  <link rel="stylesheet" href="{{asset('asset/css/style.css')}}" />

  @if (app()->getLocale() == 'ar')
  <!-- App css  ar-->
  <link rel="stylesheet" href="{{asset('asset/css/app-rtl.min.css')}}" />
  <link rel="stylesheet" href="{{asset('asset/css/style-rtl.css')}}" />
  {{-- <link rel="stylesheet" href="{{asset('asset/css/font-awesome-rtl.min.css')}}" /> --}}
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    span {
      font-family: 'Cairo', sans-serif !important;
    }
  </style>
  @else
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  @endif
</head>

<body>

  <div class="row">
    <div class="col-12">
      <div class="loader_bg">
        <div class="loader">
        <div class="spinner-border text-primary" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <h3 class="Loading">@lang('site.Loading...')</h3>
        </div>
      </div>

    </DIV>
  </div>
  <!-- Begin page -->
  <div id="layout-wrapper">
    @include('layouts.dashboard.topbardashboard')
    @include('layouts.dashboard.sliderdashboard')
    @include('layouts.dashboard.footerdashboard')
  </div>
  <!-- END layout-wrapper -->

  @yield('content')

  <div class="rightbar-overlay"></div>

  {{-- script --}}
  {{-- <script src="{{asset('asset/js/jquery-3.5.1.min.js')}}"></script> --}}
  <!-- Right bar overlay-->
  <script>
    window.FontAwesomeConfig = { searchPseudoElements: true };
  </script>
  <!-- JAVASCRIPT -->
  @yield('script')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="{{asset('asset/js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('asset/js/popper.min.js')}}"></script>

  {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
  <script src="{{asset('asset/js/jquery-3.4.1.min.js')}}"></script>

  {{-- <script src="{{asset('asset/libs/jquery/jquery.min.js')}}"></script> --}}
  <script src="{{asset('asset/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('asset/libs/metismenu/metisMenu.min.js')}}"></script>
  <script src="{{asset('asset/libs/simplebar/simplebar.min.js')}}"></script>
  <script src="{{asset('asset/libs/node-waves/waves.min.js')}}"></script>
  <script src="{{asset('asset/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('asset/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('asset/toastr/toastr.min.js')}}"></script>
  <script src="{{asset('asset/bootstraptoggle/bootstrap-toggle.min.js')}}"></script>
  <script src="{{asset('asset/js/app.js')}}"></script>
  <script src="{{asset('asset/js/dashboard.init.js')}}"></script>
  <script defer src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
  <script defer src="{{asset('seleccted/select2.min.js')}}"></script>
  @include('layouts.dashboard.toastr')
  @if(app()->getLocale() == 'ar')
  <script src="{{asset('asset/js/main_ar.js')}}"></script>
  @else
  <script src="{{asset('asset/js/main_en.js')}}"></script>
  @endif

  <script src="https://cdn.datatables.net/plug-ins/1.10.21/i18n/Arabic.json"></script>
  @yield('scripts')

  <script>
    setTimeout(function(){
$('.loader_bg').fadeToggle();
}, 1500);

  $(document).ready(function() {
      $('.selected').select2();
  });

  </script>

</body>
