@extends('front.masters-services')
@section('content')
<div id="wrapper" class="clearfix">

    <section id="page-title">
       <div class="container clearfix">
          <h1>Our Services</h1>
          <span>Get in Touch with Us</span>
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Our Services</li>
          </ol>
       </div>
    </section>

    <section id="content">
        <div class="content-wrap">
           <div class="container clearfix">
              <div class="row clearfix center mx-auto" style="max-width: 960px;">
                 <div class="col-lg-12">
                    <div class="heading-block center">
                       <h3>Every Step, One Stop</h3>
                       {{-- <span>Browse Construction &amp; Extraction Job Descriptions By Job Titles</span> --}}
                    </div>
                    <div id="faqs-list">
                       <div class="row align-items-stretch grid-border clearfix">
                          <div class="col-lg-4 col-md-6">
                             <div class="feature-box fbox-center fbox-plain border-bottom-0">
                                <div class="fbox-icon">
                                   <i class="icon-realestate-building-crane"></i>
                                </div>
                                <div class="fbox-content">
                                   <h3><a href="#" class="text-dark">Cranes & Builders</a></h3>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                             <div class="feature-box fbox-center fbox-plain border-bottom-0">
                                <div class="fbox-icon">
                                   <i class="icon-realestate-barrow"></i>
                                </div>
                                <div class="fbox-content">
                                   <h3><a href="#" class="text-dark">Equipment Operators</a></h3>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                             <div class="feature-box fbox-center fbox-plain border-bottom-0">
                                <div class="fbox-icon">
                                   <i class="icon-realestate-realtor"></i>
                                </div>
                                <div class="fbox-content">
                                   <h3><a href="#" class="text-dark">Construction Laborers &amp; Helpers</a></h3>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                             <div class="feature-box fbox-center fbox-plain border-bottom-0">
                                <div class="fbox-icon">
                                   <i class="icon-realestate-light-bulb"></i>
                                </div>
                                <div class="fbox-content">
                                   <h3><a href="#" class="text-dark">Electricians and Floor Layer</a></h3>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                             <div class="feature-box fbox-center fbox-plain border-bottom-0">
                                <div class="fbox-icon">
                                   <i class="icon-realestate-trowel"></i>
                                </div>
                                <div class="fbox-content">
                                   <h3><a href="#" class="text-dark">Elevator Installers and Repairers</a></h3>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                             <div class="feature-box fbox-center fbox-plain border-bottom-0">
                                <div class="fbox-icon">
                                   <i class="icon-realestate-drill"></i>
                                </div>
                                <div class="fbox-content">
                                   <h3><a href="#" class="text-dark">Insulation Workers and Helpers</a></h3>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                             <div class="feature-box fbox-center fbox-plain border-bottom-0">
                                <div class="fbox-icon">
                                   <i class="icon-realestate-high-voltage"></i>
                                </div>
                                <div class="fbox-content">
                                   <h3><a href="#" class="text-dark">Construction Iron Workers</a></h3>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                             <div class="feature-box fbox-center fbox-plain border-bottom-0">
                                <div class="fbox-icon">
                                   <i class="icon-realestate-plan3"></i>
                                </div>
                                <div class="fbox-content">
                                   <h3><a href="#" class="text-dark">Planners and Masonry Workers</a></h3>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                             <div class="feature-box fbox-center fbox-plain border-bottom-0">
                                <div class="fbox-icon">
                                   <i class="icon-realestate-pipe-wrench"></i>
                                </div>
                                <div class="fbox-content">
                                   <h3><a href="#" class="text-dark">Plumbers &amp; Pipefitters</a></h3>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                             <div class="feature-box fbox-center fbox-plain border-bottom-0">
                                <div class="fbox-icon">
                                   <i class="icon-realestate-fence"></i>
                                </div>
                                <div class="fbox-content">
                                   <h3><a href="#" class="text-dark">Building Inspector &amp; Carpenter</a></h3>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                             <div class="feature-box fbox-center fbox-plain border-bottom-0">
                                <div class="fbox-icon">
                                   <i class="icon-realestate-construction-helmet"></i>
                                </div>
                                <div class="fbox-content">
                                   <h3><a href="#" class="text-dark">Construction Superintendent</a></h3>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                             <div class="feature-box fbox-center fbox-plain border-bottom-0">
                                <div class="fbox-icon">
                                   <i class="icon-realestate-bricks"></i>
                                </div>
                                <div class="fbox-content">
                                   <h3><a href="#" class="text-dark">Dry Wall Finisher &amp; Installer</a></h3>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="button button-3d topmargin">Browse More Categories</div>
                 </div>
              </div>
           </div>
           <div class="line"></div>

           <a href="tel:0701211206" class="button button-3d border-bottom-0 button-full center text-end fw-light font-primary topmargin footer-stick" style="font-size: 26px;">
              <div class="container clearfix">
                 Got any Construction Gig? <strong>Dial a Fundi</strong> <i class="icon-angle-right" style="top:3px;"></i>
              </div>
           </a>
        </div>
     </section>
 </div>
@endsection
