@extends('front.master')
@section('content')
<section id="slider" class="slider-element slider-parallax min-vh-60 min-vh-md-100 with-header swiper_wrapper">
   <div class="slider-inner">
      <div class="swiper-container swiper-parent">
         <div class="swiper-wrapper">
            {{-- Sliders --}}
            <div class="swiper-slide dark">
               <div class="container">
                  <div class="slider-caption slider-caption-center">
                     <h2 style="color:#e95e28;" data-animate="fadeInUp">Olinks Homes</h2>
                     {{--
                     <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Linking you to Luxurious Housing</p>
                     --}}
                     <small data-animate="fadeInUp" class="d-block text-uppercase ls3 h5 mt-3 pb-2">You Name it. We Have it.</small>
                     {{--  --}}
                     <h1 class="nott mb-4 mx-auto" style="max-width: 1000px; letter-spacing: -2px !important;">
                        <span data-animate="fadeInUp" class="text-rotater nocolor" data-separator="|" data-rotate="fadeIn" data-speed="1800" data-backdelay="2100" data-typed="false" data-shuffle="true" data-loop="true">
                        <span style="color:#e95e28;" data-animate="fadeInUp" class="t-rotate text-uppercase">Tiles|Cabinets|Gypsum|Real Estate|Roofs|Construction|Store|Glasses|Doors|Lighting|Water Tanks|Solar Panels|Gates|Furniture|Kitchens|Toilets</span>
                        </span>
                        <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
                     </h1>
                     {{--  --}}
                  </div>
               </div>
               <div class="video-wrap">
                  <video poster="{{asset('olinkshomes/images/videos/interior-min.png')}}" preload="auto" loop autoplay muted>
                     <source src="{{asset('olinkshomes/images/videos/interior.mp4')}}" type='video/mp4' />
                     <source src="{{asset('olinkshomes/images/videos/interior.webm')}}" type='video/webm' />
                  </video>
                  <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
               </div>
            </div>
         </div>
         {{--
         <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
         <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
         --}}
         {{--
         <div class="slide-number">
            <div class="slide-number-current"></div>
            <span>/</span>
            <div class="slide-number-total"></div>
         </div>
         --}}
      </div>
   </div>
</section>
@include('front.menu')
<section id="content">
   <div class="content-wrap">
      <div class="container clearfix">
         <div class="row clearfix">
            <div class="col-lg-6">
               <div class="heading-block border-bottom-0 bottommargin-sm">
                  <h3>What We Do</h3>
                  <span>Dramatically orchestrate multimedia based opportunities and client-based e-business. Competently create human capital.</span>
               </div>
               <p>Holisticly incubate enterprise users whereas just in time sources. Rapidiously transition performance based e-business for bricks-and-clicks methodologies. Intrinsicly network quality interfaces rather than customer directed e-services. Rapidiously implement out-of-the-box content with alternative data. Collaboratively simplify seamless initiatives through sustainable infomediaries. Holisticly aggregate bleeding-edge expertise.</p>
               <p>Holisticly incubate enterprise users whereas just in time sources. Rapidiously transition performance based e-business for bricks-and-clicks methodologies. Intrinsicly network quality interfaces rather than customer directed e-services. Rapidiously implement out-of-the-box content with alternative data. Collaboratively simplify seamless initiatives through sustainable infomediaries. Holisticly aggregate bleeding-edge expertise.</p>
               <a href="#" class="button button-3d ms-0 bottommargin-sm">Learn More</a>
            </div>
            <div class="col-lg-6">
               <div class="fslider flex-thumb-grid grid-6" data-pagi="false" data-arrows="false" data-thumbs="true">
                  <div class="flexslider">
                     <div class="slider-wrap">
                        <div class="slide" data-thumb="{{asset('olinkshomes/demos/construction/images/gallery/thumbs/1.jpg')}}">
                           <img src="{{asset('olinkshomes/demos/construction/images/gallery/1.jpg')}}" alt="Image">
                           <div class="bg-overlay">
                              <div class="bg-overlay-content justify-content-start align-items-end">
                                 <div class="h4 fw-light bg-light text-dark px-3 py-2">Government Contraction</div>
                              </div>
                           </div>
                        </div>
                        <div class="slide" data-thumb="{{asset('olinkshomes/demos/construction/images/gallery/thumbs/2.jpg')}}">
                           <img src="{{asset('olinkshomes/demos/construction/images/gallery/2.jpg')}}" alt="Image">
                           <div class="bg-overlay">
                              <div class="bg-overlay-content justify-content-start align-items-end">
                                 <div class="h4 fw-light bg-light text-dark px-3 py-2">Home Renovation</div>
                              </div>
                           </div>
                        </div>
                        <div class="slide" data-thumb="{{asset('olinkshomes/demos/construction/images/gallery/thumbs/3.jpg')}}">
                           <img src="{{asset('olinkshomes/demos/construction/images/gallery/3.jpg')}}" alt="Image">
                           <div class="bg-overlay">
                              <div class="bg-overlay-content justify-content-start align-items-end">
                                 <div class="h4 fw-light bg-light text-dark px-3 py-2">Residential Construction</div>
                              </div>
                           </div>
                        </div>
                        <div class="slide" data-thumb="{{asset('olinkshomes/demos/construction/images/gallery/thumbs/4.jpg')}}">
                           <img src="{{asset('olinkshomes/demos/construction/images/gallery/4.jpg')}}" alt="Image">
                           <div class="bg-overlay">
                              <div class="bg-overlay-content justify-content-start align-items-end">
                                 <div class="h4 fw-light bg-light text-dark px-3 py-2">Wooden Floor</div>
                              </div>
                           </div>
                        </div>
                        <div class="slide" data-thumb="{{asset('olinkshomes/demos/construction/images/gallery/thumbs/5.jpg')}}">
                           <img src="{{asset('olinkshomes/demos/construction/images/gallery/5.jpg')}}" alt="Image">
                           <div class="bg-overlay">
                              <div class="bg-overlay-content justify-content-start align-items-end">
                                 <div class="h4 fw-light bg-light text-dark px-3 py-2">Repairing of Houses</div>
                              </div>
                           </div>
                        </div>
                        <div class="slide" data-thumb="{{asset('olinkshomes/demos/construction/images/gallery/thumbs/6.jpg')}}">
                           <img src="{{asset('olinkshomes/demos/construction/images/gallery/6.jpg')}}" alt="Image">
                           <div class="bg-overlay">
                              <div class="bg-overlay-content justify-content-start align-items-end">
                                 <div class="h4 fw-light bg-light text-dark px-3 py-2">Building Renovaion</div>
                              </div>
                           </div>
                        </div>
                        <div class="slide" data-thumb="{{asset('olinkshomes/demos/construction/images/gallery/thumbs/7.jpg')}}">
                           <img src="{{asset('olinkshomes/demos/construction/images/gallery/7.jpg')}}" alt="Image">
                           <div class="bg-overlay">
                              <div class="bg-overlay-content justify-content-start align-items-end">
                                 <div class="h4 fw-light bg-light text-dark px-3 py-2">Hightech Construction</div>
                              </div>
                           </div>
                        </div>
                        <div class="slide" data-thumb="{{asset('olinkshomes/demos/construction/images/gallery/thumbs/8.jpg')}}">
                           <img src="{{asset('olinkshomes/demos/construction/images/gallery/8.jpg')}}" alt="Image">
                           <div class="bg-overlay">
                              <div class="bg-overlay-content justify-content-start align-items-end">
                                 <div class="h4 fw-light bg-light text-dark px-3 py-2">Hardwood Flooring</div>
                              </div>
                           </div>
                        </div>
                        <div class="slide" data-thumb="{{asset('olinkshomes/demos/construction/images/gallery/thumbs/9.jpg')}}">
                           <img src="{{asset('olinkshomes/demos/construction/images/gallery/9.jpg')}}" alt="Image">
                           <div class="bg-overlay">
                              <div class="bg-overlay-content justify-content-start align-items-end">
                                 <div class="h4 fw-light bg-light text-dark px-3 py-2">Commercial Construction</div>
                              </div>
                           </div>
                        </div>
                        <div class="slide" data-thumb="{{asset('olinkshomes/demos/construction/images/gallery/thumbs/10.jpg')}}">
                           <img src="{{asset('olinkshomes/demos/construction/images/gallery/10.jpg')}}" alt="Image">
                           <div class="bg-overlay">
                              <div class="bg-overlay-content justify-content-start align-items-end">
                                 <div class="h4 fw-light bg-light text-dark px-3 py-2">Repairing Of Roof</div>
                              </div>
                           </div>
                        </div>
                        <div class="slide" data-thumb="{{asset('olinkshomes/demos/construction/images/gallery/thumbs/11.jpg')}}">
                           <img src="{{asset('olinkshomes/demos/construction/images/gallery/11.jpg')}}" alt="Image">
                           <div class="bg-overlay">
                              <div class="bg-overlay-content justify-content-start align-items-end">
                                 <div class="h4 fw-light bg-light text-dark px-3 py-2">Home Renovation</div>
                              </div>
                           </div>
                        </div>
                        <div class="slide" data-thumb="{{asset('olinkshomes/demos/construction/images/gallery/thumbs/11.jpg')}}">
                           <img src="{{asset('olinkshomes/demos/construction/images/gallery/12.jpg')}}" alt="Image">
                           <div class="bg-overlay">
                              <div class="bg-overlay-content justify-content-start align-items-end">
                                 <div class="h4 fw-light bg-light text-dark px-3 py-2">Office Renovation</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="clear"></div>
      <div class="section row p-0 align-items-stretch dark topmargin clearfix">
         <div class="col-lg-4 d-none d-md-block" style="background: url('{{asset('olinkshomes/demos/construction/images/services/parallax.jpg')}}') center center repeat; background-size: cover;">
            <div>&nbsp;</div>
         </div>
         <div class="col-lg-8">
            <div class="col-padding">
               <div class="row align-items-stretch clearfix">
                  <div class="col-md-6 bottommargin">
                     <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                           <a href="#"><img src="{{asset('olinkshomes/demos/construction/images/icons/building.png')}}" alt="Concrete Developments"></a>
                        </div>
                        <div class="fbox-content">
                           <h3>Concrete Developments</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 bottommargin">
                     <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                           <a href="#"><img src="{{asset('olinkshomes/demos/construction/images/icons/bank.png')}}" alt="Finance Assistance"></a>
                        </div>
                        <div class="fbox-content">
                           <h3>Finance Assistance</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 bottommargin">
                     <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                           <a href="#"><img src="{{asset('olinkshomes/demos/construction/images/icons/traffic-cone.png')}}" alt="Smart Builders"></a>
                        </div>
                        <div class="fbox-content">
                           <h3>Smart Builders</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 bottommargin">
                     <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                           <a href="#"><img src="{{asset('olinkshomes/demos/construction/images/icons/paint-brush.png')}}" alt="Quality Infrastructure"></a>
                        </div>
                        <div class="fbox-content">
                           <h3>Quality Infrastructure</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                           <a href="#"><img src="{{asset('olinkshomes/demos/construction/images/icons/drawer.png')}}" alt="Interiorly Designed"></a>
                        </div>
                        <div class="fbox-content">
                           <h3>Interiorly Designed</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                           <a href="#"><img src="{{asset('olinkshomes/demos/construction/images/icons/paper-money.png')}}" alt="Cost Effective Solutions"></a>
                        </div>
                        <div class="fbox-content">
                           <h3>Cost Effective Solutions</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container clearfix">
         <div class="row clearfix">
            <div class="col-lg-7">
               <h4>Our Dedicated Team</h4>
               <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="true" data-items-xs="2" data-items-xl="3">
                  <div class="oc-item">
                     <div class="team">
                        <div class="team-image">
                           <img src="{{asset('olinkshomes/demos/construction/images/team/1.jpg')}}" alt="John Doe">
                        </div>
                        <div class="team-desc">
                           <div class="team-title">
                              <a href="#">
                                 <h4>Onyango Oile</h4>
                              </a>
                              <span>Lead Consultant</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="oc-item">
                     <div class="team">
                        <div class="team-image">
                           <img src="{{asset('olinkshomes/demos/construction/images/team/2.jpg')}}" alt="Josh Thompson">
                        </div>
                        <div class="team-desc">
                           <div class="team-title">
                              <a href="#">
                                 <h4>Molly Meglinks</h4>
                              </a>
                              <span>Operations Manager</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="oc-item">
                     <div class="team">
                        <div class="team-image">
                           <img src="{{asset('olinkshomes/demos/construction/images/team/3.jpg')}}" alt="Mary Jane">
                        </div>
                        <div class="team-desc">
                           <div class="team-title">
                              <a href="#">
                                 <h4>Mary Jane</h4>
                              </a>
                              <span>Quality manager</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="oc-item">
                     <div class="team">
                        <div class="team-image">
                           <img src="{{asset('olinkshomes/demos/construction/images/team/5.jpg')}}" alt="Mary Jane">
                        </div>
                        <div class="team-desc">
                           <div class="team-title">
                              <a href="#">
                                 <h4>Alan Fresco</h4>
                              </a>
                              <span>Vehicle park manager</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="oc-item">
                     <div class="team">
                        <div class="team-image">
                           <img src="{{asset('olinkshomes/demos/construction/images/team/4.jpg')}}" alt="Mary Jane">
                        </div>
                        <div class="team-desc">
                           <div class="team-title">
                              <a href="#">
                                 <h4>Customer Support</h4>
                              </a>
                              <span>Quality manager</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <h4>Clients Overview</h4>
               <p>We prize our Clients more than everything else. We strive to provide Quality Services to all our Clients on a Priority Basis. You are invited to join our Clients List and enjoy our Services. <a href="#">See more...</a></p>
               <ul class="clients-grid grid-2 grid-sm-3 mb-0">
                  <li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{asset('olinkshomes/images/clients/1.png')}}" alt="Clients"></a></li>
                  <li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{asset('olinkshomes/images/clients/2.png')}}" alt="Clients"></a></li>
                  <li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{asset('olinkshomes/images/clients/3.png')}}" alt="Clients"></a></li>
                  <li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{asset('olinkshomes/images/clients/4.png')}}" alt="Clients"></a></li>
                  <li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{asset('olinkshomes/images/clients/5.png')}}" alt="Clients"></a></li>
                  <li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{asset('olinkshomes/images/clients/6.png')}}" alt="Clients"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <a target="new" href="{{env('SHOP')}}" class="button button-3d border-bottom-0 topmargin-sm button-full center text-end bottommargin fw-light font-primary" style="font-size: 26px;">
         <div class="container clearfix">
            Would you like to Buy building material for your dream home with Us? <strong>Buy Here</strong> <i class="icon-angle-right" style="top:3px;"></i>
         </div>
      </a>
      <div class="section bg-transparent mt-0 p-0 footer-stick">
         <div class="container clearfix">
            <div class="row">
               <div class="col-lg-7">
                  <img src="{{asset('olinkshomes/demos/construction/images/services/bottom-trust.jpg')}}" alt="Bottom Trust">
               </div>
               <div class="col-lg-5 topmargin-sm">
                  <div class="heading-block border-bottom-0">
                     <h2>You're in Good Hands.</h2>
                     <span class="ls1">Five Points that define Our Reliability.</span>
                  </div>
                  <ul class="iconlist iconlist-large iconlist-color">
                     <li><i class="icon-ok"></i> Market Leader since 1915</li>
                     <li><i class="icon-ok"></i> Positive Results within Deadlines</li>
                     <li><i class="icon-ok"></i> 100% Reliability &amp; Guarantee</li>
                     <li><i class="icon-ok"></i> Dedicated Professional Team of 500+</li>
                     <li><i class="icon-ok"></i> Unmatched After Project Completion Support</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   {{--  --}}
   <div class="clearfix"></div>
   <a href="tel:0701 211206" class="button button-3d border-bottom-0 topmargin-sm button-full center text-end bottommargin fw-light font-primary" style="font-size: 26px;">
      <div class="container clearfix">
         You need anything fixed in your home? <strong>Dial a Fundi</strong> <i class="icon-angle-right" style="top:3px;"></i>
      </div>
   </a>
   {{--  --}}
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
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127643.83205121818!2d36.684971086624145!3d-1.2494074167644187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17fac21c0d31%3A0xe3e8bd5c82eca045!2sOlinks%20Homes%20ShowHouse!5e0!3m2!1sen!2ske!4v1647856120754!5m2!1sen!2ske" width="100%" height="100%" allowfullscreen loading="lazy"></iframe>
            </div>
         </div>
         <hr>
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
                        <h3>Make a Video Call<span class="subtitle">OlinksHomesOnSkype</span></h3>
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
   {{--  --}}
   <div class="section mb-0">
    <div class="container">
       <div class="heading-block center border-bottom-0 mb-0">
          <h3>Some of our Products</h3>
          <span>Awesome Works that I've contibuted to. Proudly.!</span>
       </div>
    </div>
 </div>
 <div id="portfolio" class="portfolio row grid-container portfolio-reveal g-0">
    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-1-5 pf-illustrations">
       <div class="grid-inner">
          <div class="portfolio-image">
             <a href="#">
             <img src="{{asset('olinkshomes/images/instagram/7.jpg')}}" style="min-height:238px !important" alt="Garden Lighting">
             </a>
             <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                   <a href="{{asset('olinkshomes/images/instagram/7.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                   <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
             </div>
          </div>
          <div class="portfolio-desc">
             <h3><a href="#">Garden Lighting</a></h3>
             <span><a href="#">Olinks Homes</a></span>
          </div>
       </div>
    </article>
    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-1-5 pf-graphics pf-uielements">
       <div class="grid-inner">
          <div class="portfolio-image">
             <a href="#">
             <img src="{{asset('olinkshomes/images/instagram/10.jpg')}}" style="min-height:238px !important" alt="Tiles">
             </a>
             <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                   <a href="https://www.youtube.com/watch?v=5-efWouiXos" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                   <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
             </div>
          </div>
          <div class="portfolio-desc">
             <h3><a href="portfolio-single-video.html">Tiles</a></h3>
             <span><a href="#">Tiles</a>, <a href="#">Floors</a></span>
          </div>
       </div>
    </article>
    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-1-5 pf-icons pf-illustrations">
       <div class="grid-inner">
          <div class="portfolio-image">
             <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                <div class="flexslider">
                   <div class="slider-wrap">
                      <div class="slide"><a href="#"><img style="min-height:238px !important" src="{{asset('olinkshomes/images/instagram/8.jpg')}}" alt="Morning Dew"></a></div>
                      <div class="slide"><a href="#"><img style="min-height:238px !important" src="{{asset('olinkshomes/images/instagram/9.jpg')}}" alt="Morning Dew"></a></div>
                   </div>
                </div>
             </div>
             <div class="bg-overlay" data-lightbox="gallery">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                   <a href="{{asset('olinkshomes/images/instagram/8.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                   <a href="{{asset('olinkshomes/images/instagram/9.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                   <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
             </div>
          </div>
          <div class="portfolio-desc">
             <h3><a href="#">Home Lights</a></h3>
             <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
          </div>
       </div>
    </article>
    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-1-5 pf-graphics pf-illustrations">
        <div class="grid-inner">
           <div class="portfolio-image">
              <div class="fslider" data-arrows="false">
                 <div class="flexslider">
                    <div class="slider-wrap">
                       <div class="slide"><a href="#"><img style="min-height:238px !important" src="{{asset('olinkshomes/images/instagram/5.jpg')}}" alt="Shake It"></a></div>
                       <div class="slide"><a href="#"><img style="min-height:238px !important" src="{{asset('olinkshomes/images/instagram/6.jpg')}}" alt="Shake It"></a></div>
                    </div>
                 </div>
              </div>
              <div class="bg-overlay" data-lightbox="gallery">
                 <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                    <a href="{{asset('olinkshomes/images/instagram/5.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                    <a href="{{asset('olinkshomes/images/instagram/6.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                    <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
                 </div>
                 <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
              </div>
           </div>
           <div class="portfolio-desc">
              <h3><a href="#">Ceiling</a></h3>
              <span><a href="#">Gypsum</a>, <a href="#">Hardwood</a></span>
           </div>
        </div>
     </article>
    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-1-5 pf-graphics pf-illustrations">
       <div class="grid-inner">
          <div class="portfolio-image">
             <div class="fslider" data-arrows="false">
                <div class="flexslider">
                   <div class="slider-wrap">
                      <div class="slide"><a href="#"><img style="min-height:238px !important" src="{{asset('olinkshomes/images/instagram/1.jpg')}}" alt="Shake It"></a></div>
                      <div class="slide"><a href="#"><img style="min-height:238px !important" src="{{asset('olinkshomes/images/instagram/2.jpg')}}" alt="Shake It"></a></div>
                      <div class="slide"><a href="#"><img style="min-height:238px !important" src="{{asset('olinkshomes/images/instagram/3.jpg')}}" alt="Shake It"></a></div>
                      <div class="slide"><a href="#"><img style="min-height:238px !important" src="{{asset('olinkshomes/images/instagram/4.jpg')}}" alt="Shake It"></a></div>
                   </div>
                </div>
             </div>
             <div class="bg-overlay" data-lightbox="gallery">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                   <a href="{{asset('olinkshomes/images/instagram/1.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                   <a href="{{asset('olinkshomes/images/instagram/2.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                   <a href="{{asset('olinkshomes/images/instagram/3.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                   <a href="{{asset('olinkshomes/images/instagram/4.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                   <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
             </div>
          </div>
          <div class="portfolio-desc">
             <h3><a href="#">Bathrooms</a></h3>
             <span><a href="#">Plumbing</a>, <a href="#">Washrooms</a></span>
          </div>
       </div>
    </article>
 </div>
   {{--  --}}
</section>
@endsection
