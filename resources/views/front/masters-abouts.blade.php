<!DOCTYPE html>
<html dir="ltr" lang="en-US">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="author" content="Designekta Studios" />
      <title>About Us | Olinks Homes</title>
      <link href="{{asset('olinkshomes/fonts.googleapis.com/css2936.css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="{{asset('olinkshomes/css/bootstrap.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{asset('olinkshomes/style.css')}}" type="text/css" />
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
   </head>
   <body class="stretched">
      <div id="wrapper" class="clearfix">
         <header id="header" class="full-header transparent-header dark" data-sticky-class="not-dark">
            <div id="header-wrap">
               <div class="container">
                  <div class="header-row">
                     <div id="logo">
                        <a href="{{url('/')}}" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Olinks Homes"></a>
                        <a href="{{url('/')}}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo%402x.png" alt="Olinks Homes"></a>
                     </div>
                     <div class="header-misc">
                        <div id="top-search" class="header-misc-icon">
                           <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                        </div>

                     </div>
                     <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100">
                           <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                           <path d="m 30,50 h 40"></path>
                           <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                        </svg>
                     </div>
                     <nav class="primary-menu">
                        <ul class="menu-container">
                            <li class="menu-item">
                                <a class="menu-link" href="{{url('/')}}/home" >
                                   <div>Home</div>
                                </a>
                             </li>
                             <li class="menu-item">
                                <a class="menu-link" href="{{url('/')}}/about-us">
                                   <div>About</div>
                                </a>
                             </li>
                             <li class="menu-item">
                              <a class="menu-link" href="{{url('/')}}/team" data-href="#section-team">
                                 <div>Team</div>
                              </a>
                             </li>
                              <li class="menu-item">
                                  <a class="menu-link" href="{{url('/')}}/team" data-href="#section-team">
                                  <div>Partners</div>
                                  </a>
                              </li>
                             <li class="menu-item">
                                <a class="menu-link" href="{{url('/')}}/our-work">
                                   <div>Work</div>
                                </a>
                             </li>

                             <li class="menu-item">
                                <a class="menu-link" href="{{url('/')}}/our-services" >
                                   <div>Services</div>
                                </a>
                             </li>
                            <li class="menu-item">
                                <a class="menu-link" href="https://shop.olinkshomes.com" data-href="#section-pricing">
                                   <div>Shop</div>
                                </a>
                             </li>
                             <li class="menu-item">
                                <a class="menu-link" href="https://homes.olinkshomes.com">
                                   <div>Homes</div>
                                </a>
                             </li>
                             <li class="menu-item">
                                <a class="menu-link" href="{{url('/')}}/contact-us">
                                   <div>Contact</div>
                                </a>
                             </li>
                        </ul>
                     </nav>
                     <form class="top-search-form" action="#" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                     </form>
                  </div>
               </div>
            </div>
            <div class="header-wrap-clone"></div>
         </header>
         @yield('content')
         @include('front.footer')
      </div>
      <div id="gotoTop" class="icon-angle-up"></div>
      <script data-cfasync="false" src="{{asset('olinkshomes/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
      <script src="{{asset('olinkshomes/js/jquery.js')}}"></script>
      <script src="{{asset('olinkshomes/js/plugins.min.js')}}"></script>
      <script src="{{asset('olinkshomes/js/functions.js')}}"></script>
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6e80b5094feb6bf3","token":"0627f0b8b73941069bc19139e63db853","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
   </body>

</html>
