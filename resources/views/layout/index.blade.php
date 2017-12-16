<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <base href="{{ asset('') }}">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>Welcome to FlatShop</title>
      <link href="{{asset('../public/css/bootstrap.css')}}" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="{{asset('../public/css/font-awesome.min.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('../public/css/flexslider.css')}}" type="text/css" media="screen"/>
      <link href="{{asset('../public/css/sequence-looptheme.css')}}" rel="stylesheet" media="all"/>
      <link href="{{asset('../public/css/style.css')}}" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">

         @include('layout.header')
          
         <div class="clearfix"></div>

         @yield('content')

         <div class="clearfix"></div>

         @include('layout.footer')

      </div>
      <!-- Bootstrap core JavaScript==================================================-->
     <script type="text/javascript" src="{{asset('../public/js/jquery-1.10.2.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('../public/js/jquery.easing.1.3.js')}}"></script>
     <script type="text/javascript" src="{{asset('../public/js/bootstrap.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('../public/js/jquery.sequence-min.js')}}"></script>
     <script type="text/javascript" src="{{asset('../public/js/jquery.carouFredSel-6.2.1-packed.js')}}"></script>
     <script defer src="{{asset('../public/js/jquery.flexslider.js')}}"></script>
     <script type="text/javascript" src="{{asset('../public/js/script.min.js')}}" ></script>

     @yield('script')
   </body>
</html>