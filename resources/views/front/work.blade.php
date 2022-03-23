@extends('front.masters-services')
@section('content')
<div id="wrapper" class="clearfix">

    <section id="page-title">
       <div class="container clearfix">
          <h1>Our Portfolio</h1>
          <span>Get in Touch with Us</span>
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Our Work</li>
          </ol>
       </div>
    </section>

    <section id="content">
        <div class="content-wrap">
           <div class="container clearfix">
              <div class="grid-filter-wrap">
                 <ul class="grid-filter" data-container="#portfolio">
                    <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
                    <li><a href="#" data-filter=".pf-icons">Icons</a></li>
                    <li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
                    <li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
                    <li><a href="#" data-filter=".pf-media">Media</a></li>
                    <li><a href="#" data-filter=".pf-graphics">Graphics</a></li>
                 </ul>
                 <div class="grid-shuffle rounded" data-container="#portfolio">
                    <i class="icon-random"></i>
                 </div>
              </div>
              <div id="portfolio" class="portfolio row grid-container gutter-30">
                 <article class="portfolio-item col-sm-6 col-12 pf-media pf-icons">
                    <div class="grid-inner">
                       <div class="portfolio-image">
                          <a href="portfolio-single.html">
                          <img src="{{asset('olinkshomes/images/portfolio/masonry/2/1.jpg')}}" alt="Open Imagination">
                          </a>
                          <div class="bg-overlay">
                             <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="{{asset('olinkshomes/images/portfolio/full/1.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                             </div>
                             <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                          </div>
                       </div>
                       <div class="portfolio-desc">
                          <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                          <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                       </div>
                    </div>
                 </article>
                 <article class="portfolio-item col-sm-6 col-12 pf-illustrations">
                    <div class="grid-inner">
                       <div class="portfolio-image">
                          <a href="portfolio-single.html">
                          <img src="{{asset('olinkshomes/images/portfolio/masonry/2/2.jpg')}}" alt="Locked Steel Gate">
                          </a>
                          <div class="bg-overlay">
                             <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="{{asset('olinkshomes/images/portfolio/full/2.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                             </div>
                             <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                          </div>
                       </div>
                       <div class="portfolio-desc">
                          <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                          <span><a href="#">Illustrations</a></span>
                       </div>
                    </div>
                 </article>
                 <article class="portfolio-item col-sm-6 col-12 pf-graphics pf-uielements">
                    <div class="grid-inner">
                       <div class="portfolio-image">
                          <a href="#">
                          <img src="{{asset('olinkshomes/images/portfolio/masonry/2/3.jpg')}}" alt="Mac Sunglasses">
                          </a>
                          <div class="bg-overlay">
                             <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                             </div>
                             <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                          </div>
                       </div>
                       <div class="portfolio-desc">
                          <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                          <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                       </div>
                    </div>
                 </article>
                 <article class="portfolio-item col-sm-6 col-12 pf-icons pf-illustrations">
                    <div class="grid-inner">
                       <div class="portfolio-image">
                          <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                             <div class="flexslider">
                                <div class="slider-wrap">
                                   <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('olinkshomes/images/portfolio/masonry/2/4.jpg')}}" alt="Morning Dew"></a></div>
                                   <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('olinkshomes/images/portfolio/masonry/2/4-1.jpg')}}" alt="Morning Dew"></a></div>
                                </div>
                             </div>
                          </div>
                          <div class="bg-overlay" data-lightbox="gallery">
                             <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="{{asset('olinkshomes/images/portfolio/full/4.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="{{asset('olinkshomes/images/portfolio/full/4-1.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                             </div>
                             <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                          </div>
                       </div>
                       <div class="portfolio-desc">
                          <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                          <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                       </div>
                    </div>
                 </article>
                 <article class="portfolio-item col-sm-6 col-12 pf-uielements pf-media">
                    <div class="grid-inner">
                       <div class="portfolio-image">
                          <a href="portfolio-single.html">
                          <img src="{{asset('olinkshomes/images/portfolio/masonry/2/5.jpg')}}" alt="Console Activity">
                          </a>
                          <div class="bg-overlay">
                             <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="{{asset('olinkshomes/images/portfolio/full/5.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                             </div>
                             <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                          </div>
                       </div>
                       <div class="portfolio-desc">
                          <h3><a href="portfolio-single.html">Console Activity</a></h3>
                          <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                       </div>
                    </div>
                 </article>
                 <article class="portfolio-item col-sm-6 col-12 pf-graphics pf-illustrations">
                    <div class="grid-inner">
                       <div class="portfolio-image">
                          <div class="fslider" data-arrows="false">
                             <div class="flexslider">
                                <div class="slider-wrap">
                                   <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('olinkshomes/images/portfolio/masonry/2/6.jpg')}}" alt="Shake It"></a></div>
                                   <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('olinkshomes/images/portfolio/masonry/2/6-1.jpg')}}" alt="Shake It"></a></div>
                                   <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('olinkshomes/images/portfolio/masonry/2/6-2.jpg')}}" alt="Shake It"></a></div>
                                   <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('olinkshomes/images/portfolio/masonry/2/6-3.jpg')}}" alt="Shake It"></a></div>
                                </div>
                             </div>
                          </div>
                          <div class="bg-overlay" data-lightbox="gallery">
                             <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="{{asset('olinkshomes/images/portfolio/full/6.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="{{asset('olinkshomes/images/portfolio/full/6-1.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                <a href="{{asset('olinkshomes/images/portfolio/full/6-2.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                <a href="{{asset('olinkshomes/images/portfolio/full/6-3.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                <a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                             </div>
                             <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                          </div>
                       </div>
                       <div class="portfolio-desc">
                          <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                          <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                       </div>
                    </div>
                 </article>
                 <article class="portfolio-item col-sm-6 col-12 pf-uielements pf-icons">
                    <div class="grid-inner">
                       <div class="portfolio-image">
                          <a href="portfolio-single-video.html">
                          <img src="{{asset('olinkshomes/images/portfolio/masonry/2/7.jpg')}}" alt="Backpack Contents">
                          </a>
                          <div class="bg-overlay">
                             <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                             </div>
                             <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                          </div>
                       </div>
                       <div class="portfolio-desc">
                          <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                          <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                       </div>
                    </div>
                 </article>
                 <article class="portfolio-item col-sm-6 col-12 pf-graphics">
                    <div class="grid-inner">
                       <div class="portfolio-image">
                          <a href="portfolio-single.html">
                          <img src="{{asset('olinkshomes/images/portfolio/masonry/2/8.jpg')}}" alt="Sunset Bulb Glow">
                          </a>
                          <div class="bg-overlay">
                             <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="{{asset('olinkshomes/images/portfolio/full/8.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                             </div>
                             <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                          </div>
                       </div>
                       <div class="portfolio-desc">
                          <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                          <span><a href="#">Graphics</a></span>
                       </div>
                    </div>
                 </article>
              </div>
           </div>
        </div>
     </section>
 </div>
@endsection
