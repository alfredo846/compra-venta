<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es"> <!--<![endif]-->

@include('layout.head')

@yield('head')
<body>
    <!-- sidebar -->
   @include('layout.sidebar')

    <div id="right-panel" class="right-panel">

        <!-- navbar-->
        @include('layout.navbar')

        @yield('content')

        <div class="clearfix"></div>

       <!-- footer -->
       <!-- @include('layout.footer') -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    @include('layout.script')

    @yield('script')

</body>

</html>