<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <!-- CSS Files -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
     
     
     <!-- Custom CSS File -->
      <link href="{{asset('/css/style.css')}}" rel="stylesheet">
       </head>
    
    <body>
      @include('layout.nav')
      @yield('content')
      @include('layout.footer')
      
      
       <!-- JS Files -->
       <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
       <script type="text/javascript" src="https://unpkg.com/swiper/swiper-bundle.js"></script>
       <script type="text/javascript" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     
       <!-- Custom JS-->
       <script>
          var swiper = new Swiper('.swiper-container', {
            direction: 'vertical',
            slidesPerView: 1,
            spaceBetween: 30,
            mousewheel: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,},});
</script>
      <script>
        $(document).ready(function() {
        $('li.active').removeClass('active');
        $('a[href="' + location.pathname + '"]').closest('li').addClass('active'); });
      </script>
      <script>
        $(document).ready(function() {
        $('a.bg-primary').removeClass('bg-primary');
        $('a[href="' + location.pathname + '"]').closest('a').addClass('bg-primary'); });
      </script>
    </body>
</html>