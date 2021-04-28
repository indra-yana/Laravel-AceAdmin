<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>@yield('title') | App Name </title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('ace-master/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('ace-master/assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

    <!-- page specific plugin styles -->
    @yield('styles')

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('ace-master/assets/css/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('ace-master/assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

    <link rel="stylesheet" href="{{ asset('ace-master/assets/css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('ace-master/assets/css/ace-rtl.min.css') }}" />

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{ asset('ace-master/assets/js/ace-extra.min.js') }}"></script>
  </head>

  <body class="skin-1">
    <!-- TOP NAVBAR -->
    @yield('section_top_nav')
    <!-- END TOP NAVBAR -->

    <!-- MAIN CONTAINER -->
    <div class="main-container ace-save-state" id="main-container">
      <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
      </script>

      <!-- SIDEBAR SECTION -->
      @yield('section_sidebar')
      <!-- END SIDEBAR SECTION -->

      <!-- MAIN CONTENT SECTION -->
      @yield('section_content')
      <!-- END MAIN CONTENT SECTION -->

      <!-- FOOTER SECTION -->
       @yield('section_footer')
      <!-- END FOOTER SECTION -->

      <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
      </a>
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- basic scripts -->
    <script src="{{ asset('ace-master/assets/js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('ace-master/assets/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
    </script>
    <script src="{{ asset('ace-master/assets/js/bootstrap.min.js') }}"></script>

    <!-- page specific plugin scripts -->
    @yield('scripts')

    <!-- ace scripts -->
    <script src="{{ asset('ace-master/assets/js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('ace-master/assets/js/ace.min.js') }}"></script>

    <!-- inline scripts related to this page -->
  </body>
</html>
