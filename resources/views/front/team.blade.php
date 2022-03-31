@extends('front.masters-team')
@section('content')
<div id="wrapper" class="clearfix">

    <section id="page-title">
       <div class="container clearfix">
          <h1>Our Team</h1>
          <span>Get in Touch with Us</span>
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Our Team</li>
          </ol>
       </div>
    </section>

    <section id="slider" class="slider-element boxed-slider">
        <div class="container">
           <a href="#" class="d-block">
           <img class="w-100 rounded" src="{{asset('olinkshomes/demos/construction/images/team/architecture-construction-team-blue-prints-project-members-workers-74607653.jpg')}}" alt="Olinks Team">
           </a>
        </div>
     </section>

    <section id="content">
        <div class="content-wrap">
           <div id="rev_slider_285_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.1.4">

              <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
           </div>
           {{-- <div class="container mt-5">
              <div class="text-center"><a href="rs-demos.html" class="btn btn-secondary btn-lg w-100" style="max-width: 20rem;"><i class="icon-line-arrow-left me-2" style="position: relative; top: 1px;"></i> Back to All Demos</a></div>
           </div> --}}
        </div>
     </section>
 </div>
@endsection
