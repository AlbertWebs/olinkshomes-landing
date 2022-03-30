<!DOCTYPE html>
<html dir="ltr" lang="en-US">
   <head>
      <title>Linking You To Luxurious homes | Olinks Homes</title>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta http-equiv="content-type" content="text/html;charset=utf-8" />
      <meta name="author" content="Designekta Studios" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link href="../../../fonts.googleapis.com/css2936.css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="{{asset('olinkshomes/css/bootstrap.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{asset('olinkshomes/style.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{asset('olinkshomes/css/swiper.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{asset('olinkshomes/css/dark.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{asset('olinkshomes/css/font-icons.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{asset('olinkshomes/css/animate.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{asset('olinkshomes/css/magnific-popup.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{asset('olinkshomes/css/custom.css')}}" type="text/css" />
       {{--  --}}
            <!--Start of Tawk.to Script-->
            <script type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/622ef9d61ffac05b1d7e70ec/1fu3nvrii';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
                })();
                </script>
        <!--End of Tawk.to Script-->
        {{--  --}}
        <style>
            .slider-caption-bg {
                left: 20px;
                bottom: 20px;
            }
        </style>
   </head>
   <body class="stretched">
      <div id="wrapper" class="clearfix">
         <div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>


         @yield('content')

         @include('front.footer')
      </div>
      <div id="gotoTop" class="icon-angle-up"></div>
      <script data-cfasync="false" src="{{asset('olinkshomes/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
      <script src="{{asset('olinkshomes/js/jquery.js')}}"></script>
      <script src="{{asset('olinkshomes/js/plugins.min.js')}}"></script>
      <script src="https://maps.google.com/maps/api/js?key=AIzaSyAO2BYvn4xyrdisvP8feA4AS_PGZFxJDp4"></script>
      <script src="{{asset('olinkshomes/js/functions.js')}}"></script>
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6e80b2ca7fce6bd0","token":"0627f0b8b73941069bc19139e63db853","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
   </body>
</html>
