<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
     
     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
     
     <!-- Vendor CSS Files -->
     <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
     <link href="{{asset('/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
     <link href="{{asset('/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
     <link href="{{asset('/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
     <link href="{{asset('/vendor/venobox/venobox.css')}}" rel="stylesheet">
     <link href="{{asset('/vendor/aos/aos.css')}}" rel="stylesheet">
     
     <!-- Custom CSS File -->
       <link href="{{asset('/css/style.css')}}" rel="stylesheet">
       </head>
    
    <body>
      @include('layout.nav')
      @yield('content')
      @include('layout.footer')
      
      
       <!-- Vendor JS Files -->
       <script type="text/javascript" src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('/vendor/php-email-form/validate.js')}}"></script>
       <script type="text/javascript" src="{{asset('/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('/vendor/counterup/counterup.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('/vendor/venobox/venobox.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('/vendor/aos/aos.js')}}"></script>
     
       <!-- Custom Main JS File -->
       <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>
     
  
    </body>
    </html>