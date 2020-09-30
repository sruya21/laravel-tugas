<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   
   <!--CSS-->
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
   <!--Custom Style-->
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
  
  </head>
  
  <body>
    @include('layout.nav')
    @yield('content')
    @yield('about')
    
    
    <!--Scripts-->
   <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/bootstrap.bundle.js')}}"></script>

  </body>
  </html>
