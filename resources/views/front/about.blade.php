@extends('front.masters-abouts')
@section('content')
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 250px 0; background-image: url('{{asset('olinkshomes/images/parallax/parallax-bg.jpg')}}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix" style="color:#e95e28 !important; ">
       <h1 style="color:#e95e28 !important; ">About Us</h1>
       <span style="color:#e95e28 !important; ">Everything you need to know about our Company</span>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a style="color:#e95e28 !important; " href="{{url('/')}}">Home</a></li>
          {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
          <li style="color:#e95e28 !important; " class="breadcrumb-item active" aria-current="page">About Us</li>
       </ol>
    </div>
 </section>
 <section id="content">
    <div class="content-wrap">
       <div class="container clearfix">
          <div class="row col-mb-50 mb-0">
             <div class="col-lg-4">
                <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                   <h4>Why choose <span>Us</span>.</h4>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>
             </div>
             <div class="col-lg-4">
                <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                   <h4>Our <span>Mission</span>.</h4>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>
             </div>
             <div class="col-lg-4">
                <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                   <h4>What we <span>Do</span>.</h4>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>
             </div>
          </div>
       </div>
       {{--  --}}

       <div class="section m-0">
        <div class="heading-block center border-0" data-heading="W">
            <h3>About Olinks Homes</h3>
            </div>
            <div class="row clearfix">
                <div class="center col-lg-8 offset-lg-2 bottommargin">
                <h3 class="text-rotater font-secondary" data-separator="," data-rotate="fadeInRight" data-speed="3500">Olinks Homes is a Partner, That links you to all your building and construction material and man power. Build whatever you like with this us. Be it <span class="d-inline"><span class="t-rotate color">Swimming Pools,Corporate Offices,Medical Buildings,Construction,Real Estate,Tiles,Gypsum</span></span><br> just everything is possible with Olinks Homes.</h3>
            </div>
            <div class="clear"></div>
        </div>
       </div>
        {{--  --}}
       <div class="section m-0">
          <div class="container clearfix">
             <div class="row col-mb-50">
                <div class="col-sm-6 col-lg-4 text-center" data-animate="bounceIn">
                   <i class="i-plain i-xlarge mx-auto icon-line2-directions"></i>
                   <div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K+</div>
                   <h5>Completed Projects</h5>
                </div>
                <div class="col-sm-6 col-lg-4 text-center" data-animate="bounceIn" data-delay="200">
                   <i class="i-plain i-xlarge mx-auto mb-0 icon-line2-graph"></i>
                   <div class="counter counter-lined"><span data-from="3000" data-to="15360" data-refresh-interval="100" data-speed="2500"></span>+</div>
                   <h5>Happy Clients</h5>
                </div>
                <div class="col-sm-6 col-lg-4 text-center" data-animate="bounceIn" data-delay="400">
                   <i class="i-plain i-xlarge mx-auto mb-0 icon-line2-layers"></i>
                   <div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25" data-speed="3500"></span>*</div>
                   <h5>No. of Projects</h5>
                </div>

             </div>
          </div>
       </div>
       <br><br>
       <div class="container clearfix">
          <div class="clear"></div>
          <div class="heading-block center">
             <h4>Our Clients</h4>
          </div>
          <ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0">
             <li class="grid-item"><a href="https://logofury.com/logo/enzo.html"><img src="{{asset('olinkshomes/images/clients/1.png')}}" alt="Clients"></a></li>
             <li class="grid-item"><a href="https://logofury.com/"><img src="{{asset('olinkshomes/images/clients/2.png')}}" alt="Clients"></a></li>
             <li class="grid-item"><a href="https://logofaves.com/2021/03/grabbt/"><img src="{{asset('olinkshomes/images/clients/3.png')}}" alt="Clients"></a></li>
             <li class="grid-item"><a href="https://logofaves.com/2021/01/ladera-granola/"><img src="{{asset('olinkshomes/images/clients/4.png')}}" alt="Clients"></a></li>
             <li class="grid-item"><a href="https://logofaves.com/2021/02/hershel-farms/"><img src="{{asset('olinkshomes/images/clients/5.png')}}" alt="Clients"></a></li>
             <li class="grid-item"><a href="https://logofury.com/logo/food-fight-radio.html"><img src="{{asset('olinkshomes/images/clients/6.png')}}" alt="Clients"></a></li>
             <li class="grid-item"><a href="https://logofury.com/"><img src="{{asset('olinkshomes/images/clients/7.png')}}" alt="Clients"></a></li>
             <li class="grid-item"><a href="https://logofury.com/logo/up-travel.html"><img src="{{asset('olinkshomes/images/clients/8.png')}}" alt="Clients"></a></li>
             <li class="grid-item"><a href="https://logofury.com/logo/caffi-bardi.html"><img src="{{asset('olinkshomes/images/clients/9.png')}}" alt="Clients"></a></li>
             <li class="grid-item"><a href="https://logofury.com/logo/bignix-design.html"><img src="{{asset('olinkshomes/images/clients/10.png')}}" alt="Clients"></a></li>
             <li class="grid-item"><a href="https://logofury.com/"><img src="{{asset('olinkshomes/images/clients/11.png')}}" alt="Clients"></a></li>
             <li class="grid-item"><a href="https://logofury.com/"><img src="{{asset('olinkshomes/images/clients/12.png')}}" alt="Clients"></a></li>
          </ul>
       </div>
    </div>
 </section>
@endsection
