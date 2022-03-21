@extends('front.master')
@section('content')
<section id="slider" class="slider-element slider-parallax min-vh-60 min-vh-md-100 with-header swiper_wrapper">
    <div class="slider-inner">
       <div class="swiper-container swiper-parent">
          <div class="swiper-wrapper">

             <div class="swiper-slide dark">
                <div class="container">
                   <div class="slider-caption slider-caption-center">
                      <h2 style="color:#e95e28;" data-animate="fadeInUp">Olinks Homes</h2>
                      <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Linking you to Luxurious Housing</p>
                      {{--  --}}
                      <h1 class="nott mb-4 mx-auto" style="max-width: 1000px; letter-spacing: -2px !important;">

                        <span data-animate="fadeInUp" class="text-rotater nocolor" data-separator="|" data-rotate="fadeIn" data-speed="1800" data-backdelay="2100" data-typed="false" data-shuffle="true" data-loop="true">
                        <span style="color:#e95e28;" data-animate="fadeInUp" class="t-rotate text-uppercase">Tiles|Cabinets|Gypsum|Real Estate|Roofs|Construction|Store|Glasses|Doors|Lighting|Water Tanks|Solar Panels|Gates|Furniture|Kitchens|Toilets</span>
                        </span>



                        <small data-animate="fadeInUp" class="d-block text-uppercase ls3 h5 mt-3 pb-2">You Name it. We Have it.</small>
                        </h1>
                      {{--  --}}
                   </div>
                </div>
                <div class="video-wrap">
                   <video poster="{{asset('olinkshomes/images/videos/interior-min.png')}}" preload="auto" loop autoplay muted>
                      <source src="{{asset('olinkshomes/images/videos/interior.mp4')}}" type='video/mp4' />
                      <source src="{{asset('olinkshomes/images/videos/interior.mp4')}}" type='video/webm' />
                   </video>
                   <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                </div>
             </div>
             {{-- <div class="swiper-slide">
                <div class="container">
                   <div class="slider-caption">
                      <h2 data-animate="fadeInUp">Great Performance</h2>
                      <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                   </div>
                </div>
                <div class="swiper-slide-bg" style="background-image: url('{{asset('olinkshomes/images/slider/swiper/3.jpg')}}'); background-position: center top;"></div>
             </div> --}}
          </div>
          <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
          <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
          <div class="slide-number">
             <div class="slide-number-current"></div>
             <span>/</span>
             <div class="slide-number-total"></div>
          </div>
       </div>
    </div>
 </section>
 <header id="header" class="full-header">
    <div id="header-wrap">
       <div class="container">
          <div class="header-row">
             <div id="logo">
                <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Olinks Homes"></a>
                <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo%402x.png" alt="Olinks Homes"></a>
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
                <ul class="menu-container one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
                   <li class="menu-item">
                      <a class="menu-link" href="{{url('/')}}" data-href="#home">
                         <div>Home</div>
                      </a>
                   </li>
                   <li class="menu-item">
                      <a class="menu-link" href="{{url('/')}}/about-us" data-href="#section-about">
                         <div>About</div>
                      </a>
                   </li>
                   <li class="menu-item">
                      <a class="menu-link" href="{{url('/')}}/work" data-href="#section-work">
                         <div>Work</div>
                      </a>
                   </li>
                   <li class="menu-item">
                      <a class="menu-link" href="{{url('/')}}/team" data-href="#section-team">
                         <div>Team</div>
                      </a>
                   </li>
                   <li class="menu-item">
                      <a class="menu-link" href="{{url('/')}}/services" data-href="#section-services">
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
                      <a class="menu-link" href="{{url('/')}}/contact-us" data-href="#section-contact">
                         <div>Contact</div>
                      </a>
                   </li>
                </ul>
             </nav>
             <form class="top-search-form" action="https://themes.semicolonweb.com/html/canvas/search.html" method="get">
                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
             </form>
          </div>
       </div>
    </div>
    <div class="header-wrap-clone"></div>
 </header>
<section id="content">
    <div class="content-wrap">
       <section id="section-about" class="page-section">
          <div class="container clearfix">
             <div class="heading-block center">
                <h2>We are <span>Olinks Homes</span></h2>
                <span>Every Step, One Stop</span>
             </div>

          </div>
       </section>




       <hr>
       <section id="section-contact" class="page-section">
          <div class="heading-block text-center">
             <h2>Get in Touch with us</h2>
             <span>Still have Questions? Contact Us using the Form below.</span>
          </div>
          <div class="container clearfix">
             <div class="row align-items-stretch col-mb-50 mb-0">
                <div class="col-lg-6">
                   <div class="fancy-title title-border">
                      <h3>Send us an Email</h3>
                   </div>
                   <div class="form-widget">
                      <div class="form-result"></div>
                      <form class="mb-0" id="template-contactform" name="template-contactform" action="https://themes.semicolonweb.com/html/canvas/include/form.php" method="post">
                         <div class="form-process">
                            <div class="css3-spinner">
                               <div class="css3-spinner-scaler"></div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-4 form-group">
                               <label for="template-contactform-name">Name <small>*</small></label>
                               <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                            </div>
                            <div class="col-md-4 form-group">
                               <label for="template-contactform-email">Email <small>*</small></label>
                               <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                            </div>
                            <div class="col-md-4 form-group">
                               <label for="template-contactform-phone">Phone</label>
                               <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-8 form-group">
                               <label for="template-contactform-subject">Subject <small>*</small></label>
                               <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                            </div>
                            <div class="col-md-4 form-group">
                               <label for="template-contactform-service">Services</label>
                               <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                  <option value="">-- Select One --</option>
                                  <option value="Wordpress">Wordpress</option>
                                  <option value="PHP / MySQL">PHP / MySQL</option>
                                  <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                  <option value="Graphic Design">Graphic Design</option>
                               </select>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12 form-group">
                               <label for="template-contactform-message">Message <small>*</small></label>
                               <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                            </div>
                            <div class="col-12 form-group d-none">
                               <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>
                            <div class="col-12 form-group">
                               <button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                            </div>
                         </div>
                         <input type="hidden" name="prefix" value="template-contactform-">
                      </form>
                   </div>
                </div>
                <div class="col-lg-6 min-vh-40">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127643.83205121818!2d36.684971086624145!3d-1.2494074167644187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17fac21c0d31%3A0xe3e8bd5c82eca045!2sOlinks%20Homes%20ShowHouse!5e0!3m2!1sen!2ske!4v1647856120754!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
             </div>
             <div class="w-100">
                <div class="row col-mb-50">
                   <div class="col-sm-6 col-lg-3">
                      <div class="feature-box fbox-center fbox-bg fbox-plain">
                         <div class="fbox-icon">
                            <a href="#"><i class="icon-map-marker2"></i></a>
                         </div>
                         <div class="fbox-content">
                            <h3>Our ShowHouse<span class="subtitle">Riverside Gardens, Nairobi</span></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-sm-6 col-lg-3">
                      <div class="feature-box fbox-center fbox-bg fbox-plain">
                         <div class="fbox-icon">
                            <a href="#"><i class="icon-phone3"></i></a>
                         </div>
                         <div class="fbox-content">
                            <h3>Speak to Us<span class="subtitle">0701211206</span></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-sm-6 col-lg-3">
                      <div class="feature-box fbox-center fbox-bg fbox-plain">
                         <div class="fbox-icon">
                            <a href="#"><i class="icon-skype2"></i></a>
                         </div>
                         <div class="fbox-content">
                            <h3>Make a Video Call<span class="subtitle">CanvasOnSkype</span></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-sm-6 col-lg-3">
                      <div class="feature-box fbox-center fbox-bg fbox-plain">
                         <div class="fbox-icon">
                            <a href="#"><i class="icon-twitter2"></i></a>
                         </div>
                         <div class="fbox-content">
                            <h3>Follow on Twitter<span class="subtitle">2.3M Followers</span></h3>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
    </div>
 </section>
@endsection
