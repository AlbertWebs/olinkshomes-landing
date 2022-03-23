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
                    <?php $Categories = DB::table('categories')->where('identifier','web')->get(); ?>
                    @foreach ($Categories as $item)
                    <li><a href="#" data-filter=".pf-{{$item->id}}">{{$item->title}}</a></li>
                    @endforeach
                 </ul>
                 <div class="grid-shuffle rounded" data-container="#portfolio">
                    <i class="icon-random"></i>
                 </div>
              </div>
              <div id="portfolio" class="portfolio row grid-container gutter-30">
                  <?php $Portfolio = DB::table('portfolios')->get(); ?>
                  @foreach ($Portfolio as $folio)
                    {{--  --}}
                    <article class="portfolio-item col-sm-6 col-12 pf-{{$folio->cat_id}}">
                        <div class="grid-inner">
                           <div class="portfolio-image">
                              <div class="fslider" data-arrows="false">
                                 <div class="flexslider">
                                    <div class="slider-wrap">
                                        @if($folio->thumbnail == null)

                                        @else
                                        <div class="slide"><a href="#"><img src="{{url('/')}}/uploads/portfolios/{{$folio->thumbnail}}" alt="{{$folio->title}}"></a></div>
                                        @endif

                                        @if($folio->image_one == null)

                                        @else
                                        <div class="slide"><a href="#"><img src="{{url('/')}}/uploads/portfolios/{{$folio->image_one}}" alt="{{$folio->title}}"></a></div>
                                        @endif

                                        @if($folio->image_two == null)

                                        @else
                                        <div class="slide"><a href="#"><img src="{{url('/')}}/uploads/portfolios/{{$folio->image_two}}" alt="{{$folio->title}}"></a></div>
                                        @endif

                                        @if($folio->image_three == null)

                                        @else
                                        <div class="slide"><a href="#"><img src="{{url('/')}}/uploads/portfolios/{{$folio->image_three}}" alt="{{$folio->title}}"></a></div>
                                        @endif
                                    </div>
                                 </div>
                              </div>
                              <div class="bg-overlay" data-lightbox="gallery">
                                 <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    @if($folio->thumbnail == null)

                                    @else
                                    <a href="{{url('/')}}/uploads/portfolios/{{$folio->thumbnail}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                    @endif

                                    @if($folio->image_one == null)

                                    @else
                                    <a href="{{url('/')}}/uploads/portfolios/{{$folio->image_one}}" class="d-none" data-lightbox="gallery-item"></a>
                                    @endif

                                    @if($folio->image_two == null)

                                    @else
                                    <a href="{{url('/')}}/uploads/portfolios/{{$folio->image_two}}" class="d-none" data-lightbox="gallery-item"></a>
                                    @endif

                                    @if($folio->image_three == null)

                                    @else
                                    <a href="{{url('/')}}/uploads/portfolios/{{$folio->image_three}}" class="d-none" data-lightbox="gallery-item"></a>
                                    @endif

                                    <a href="{{url('/')}}/our-work/{{$folio->slung}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                 </div>
                                 <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                              </div>
                           </div>
                           <div class="portfolio-desc">
                              <h3><a href="{{url('/')}}/our-work/{{$folio->slung}}">{{$folio->title}}</a></h3>
                              <span><a href="{{url('/')}}/our-work/{{$folio->slung}}">{{$folio->meta}}</a></span>
                           </div>
                        </div>
                     </article>
                      {{--  --}}
                  @endforeach
              </div>
           </div>
        </div>
     </section>
 </div>
@endsection
