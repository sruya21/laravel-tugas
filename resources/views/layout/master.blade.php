<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   
   <!-- Vendor CSS Files -->
   <link href="{{assets('/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{assets('/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
   <link href="{{assets('/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
   <link href="{{assets('/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
   <link href="{{assets('/vendor/venobox/venobox.css')" rel="stylesheet}}">
   <link href="{{assets('/vendor/aos/aos.css')}}" rel="stylesheet">
   
   <!-- Custom CSS File -->
     <link href="{{assets('/css/style.css')}}" rel="stylesheet">
  
  </head>
  
  <body>
    @include('layout.nav')
    @yield('content')
    @yield('about')
    
    
     <!-- Vendor JS Files -->
     <script type="text/javascript" src="{{assets('/vendor/jquery/jquery.min.js')}}"></script>
     <script type="text/javascript" src="{{assets('/js/bootstrap.bundle.min.js')}}"></script>
     <script type="text/javascript" src="{{assets('/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
     <script type="text/javascript" src="{{assets('/vendor/php-email-form/validate.js')}}"></script>
     <script type="text/javascript" src="{{assets('/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
     <script type="text/javascript" src="{{assets('/vendor/counterup/counterup.min.js')}}"></script>
     <script type="text/javascript" src="{{assets('/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
     <script type="text/javascript" src="{{assets('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
     <script type="text/javascript" src="{{assets('/vendor/venobox/venobox.min.js')}}"></script>
     <script type="text/javascript" src="{{assets('/vendor/aos/aos.js')}}"></script>
   
     <!-- Custom Main JS File -->
     <script type="text/javascript" src="{{assets('/js/main.js')}}"></script>
   

  </body>
  </html>