<!DOCTYPE html>

<html lang="en">

    <head>

        <title> @yield('title') | {{ config('app.name') }} </title>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta name="description" content="Sprit World Embassy Cameroon" />
        <meta name="keywords" content="SpiritWorld Church, Cameroon">
        <meta name="author" content="TN CEDRIC" />
        <meta name="MobileOptimized" content="320" />
        <!-- favicon-icon -->
        <link rel="icon" type="image/icon" href="/favicon.ico">
        <!-- theme style -->

        @include('includes.site.styles')

        @yield('styles')

        <!-- custom css -->
        <link href="/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="/css/app.css" rel="stylesheet" type="text/css"/>
        <!-- end theme style -->
    </head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader -->
  <div class="preloader">
    <div class="status">
      <div class="status-message">
      </div>
    </div>
  </div>
<!-- end preloader -->
<!--  navigation -->
  @include('includes.site.navigation')
<!--  end navigation -->

<!-- search -->
<!-- disable searching for the moment -->
  <!-- <div class="search">
    <div class="container clearfix">
      <input type="search" class="search-box" placeholder="Type anything here...."/>
      <a href="#" class="fa fa-times search-close"></a>
    </div>
  </div> -->
<!-- end search -->

@yield('content')

<!-- footer -->
  @include('includes.site.footer')
<!-- end footer -->
    @include('includes.site.scripts')

     @yield('scripts')
    <!-- custom js -->
    <script type="text/javascript" src="/js/theme.js"></script>
<!-- end jquery -->
</body>
<!--body end -->

</html>
